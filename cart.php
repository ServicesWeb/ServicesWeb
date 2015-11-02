<?php
    session_start();  //use a session to keep shop cart information
?>
<?php
    include 'header.php';
    require 'cartclass.php';
?>
    <div id='searchdiv'>
        <?php
            $id=$_POST['id'];
            $name=$_POST['name'];
            $count=$_POST['count'];
            $price=$_POST['price'];
            $checkout=$_POST['checkout'];
            $product = array('id'=>$id, 'name'=>$name, 'count'=>$count, 'price'=>$price);

            if ($name){
                if(isset($_SESSION['cart']))    //existing session
                    $shopcart=unserialize($_SESSION['cart']);
                else                            //new session
                    $shopcart=new Shopcart();
                $shopcart->add($product);
                $_SESSION['cart']=serialize($shopcart);
            }
        ?>
        <?php
            $shopcart=unserialize($_SESSION['cart']);
            $productList=$shopcart->productList;
        ?>
        <?php
            if (!$checkout){        //add to cart event
        ?>
            <h1>Shopping Cart</h1>
            <table class="carttable">
                <tr>
                    <th>Produce</th>
                    <th>Number</th>
                    <th>Price</th>      
                </tr>
        <?php              
            foreach ($productList as $prod){
                $total += $prod['price'] * $prod['count'];
        ?>
            <tr>
                <td><?=$prod['name']?></td>
                <td><?=$prod['count']?></td>
                <td><?=$prod['price']?></td>
            </tr>
        <?php
            }
        ?>
            <tr>
                <td colspan="3" class="ckbutton"><label>Total Price:  <?=$total?></label></td>
            </tr>
        </table>
        <h1>Additional Order Information</h1>
        <form action="cart.php" method="post">
                <table class="carttable">
                    <tr>
                        <td>Full Name</td>
                        <td><input type=text name=fullname></td>
                   </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type=text name=address></td>
                    </tr>
                    <tr>
                        <td>Zip Code</td>
                        <td><input type=text name=zipcode></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type=text name=tel></td>
                    <tr>
                    <tr>
                        <td>Payment Card</td>
                        <td><input type=text name=payment></td>
                    <tr>
                        <td colspan="3" class="ckbutton">
                            <input type="submit" name="checkout" value="checkout">
                        </td>
                    </tr>
                </table>
        </form>
        <?php
            }
            else            // checkout event
            {
                require 'connection.php';
                $orderinfo="";
                foreach ($productList as $prod){
                    $sql = "SELECT * FROM product where id='".$prod['id']."'";
                    $result = $mysqli->query($sql);
                    if(!$result){
                        echo $mysqli->error;
                    }else{
                        list($id,$category,$name,$price,$in_stock,$description,$img) = $result->fetch_row();
                        if ($prod['count'] > $in_stock) echo "The order number ".$prod['count']." of ".$name." exceeds the availability ".$in_stock." !";
                        else{
                            $left=$in_stock-$prod['count'];
                            $sql = "UPDATE product set in_stock='".$left."' where id='".$prod['id']."'";
                            $result = $mysqli->query($sql);
                            if(!$result){
                                echo $mysqli->error;
                            }
                            $orderinfo = $orderinfo.$name.",".$price.",".$prod['count'].";";
                        }
                    }
                }
                
                //insert a new order
                $fullname=$_POST['fullname'];
                $address=$_POST['address'];
                $zipcode=$_POST['zipcode'];
                $payment=$_POST['payment'];
                $tel=$_POST['tel'];
                $orderid = "".date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);  //random orderid
                $sql = "INSERT INTO trackorder VALUES('".$orderid."','".$orderinfo."', '".$fullname."', '".$address."', '".$zipcode."', '".$tel."', '".$payment."')";
                $result = $mysqli->query($sql);
                if(!$result){
                    echo $mysqli->error;
                }
                session_destroy();
                echo "<h1>Success!</h1><p>Your order number is:  ".$orderid."</p>";
            }
        ?>
    </div> <!-- end of mainbody div -->
<?php
    include 'foot.php';
    require 'close.php';
?>       