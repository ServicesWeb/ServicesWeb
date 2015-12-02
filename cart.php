<?php
    session_start();  //use a session to keep shop cart information
$total=0;
$result=NULL;
$mysqli=NULL;
?>
<?php
    include 'header.php';
    require 'cartclass.php';
?>
    <div id='cartdiv'>
	    <?php
	        $id=array_key_exists('id',$_POST)?$_POST['id']:NULL;
            $name=array_key_exists('name',$_POST)?$_POST['name']:NULL;
            $count=array_key_exists('count',$_POST)?$_POST['count']:NULL;
            $price=array_key_exists('price',$_POST)?$_POST['price']:NULL;
            $checkout=array_key_exists('checkout',$_POST)?$_POST['checkout']:NULL;
            $product = array('id'=>$id, 'name'=>$name, 'count'=>$count, 'price'=>$price);

            if ($name){
                if(isset($_SESSION['cart']))    //existing session
                    $shopcart=unserialize($_SESSION['cart']);
                else                            //new session
                    $shopcart=new Shopcart();
                $shopcart->add($product);
                $_SESSION['cart']=serialize($shopcart);
            }
            if (isset($_SESSION['cart'])) {
	            $shopcart=unserialize($_SESSION['cart']);
            } else {
	            $shopcart=NULL;
            }
            $productList=$shopcart?$shopcart->productList:NULL;
        ?>

        <?php
            $fullnameerror = "";
            $addresserror = "";
            $zipcodeerror = "";
            $telerror = "";
            $paymenterror = "";
            $globalerror = "";
            $fullname = "";
            $address = "";
            $zipcode = "";
            $tel = "";
            $payment = "";

            if ($checkout){

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["fullname"])) {
                    $fullnameerror = "Name Cannot Be Empty.";
                    $globalerror = "error";
                } else {
                    $fullname = ($_POST["fullname"]);
                    if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
                        $name_error = "Please enter letters or space.";
                        $globalerror = "error";
                    }
                }

                if (empty($_POST["address"])) {
                    $addresserror = "Address Cannot Be Empty.";
                    $globalerror = "error";
                } else {
                    $address = ($_POST["address"]);
                }

                if (empty($_POST["zipcode"])) {
                    $zipcodeerror = "Zipcode Cannot Be Empty.";
                    $globalerror = "error";
                } else {
                    $zipcode = ($_POST["zipcode"]);
                    if (!preg_match("/^(0|[1-9]\d{0,4})$/",$zipcode)) {
                        $zipcodeerror = "Please enter 5 digit numbers.";
                        $globalerror = "error";
                    }
                }

                if (empty($_POST["tel"])) {
                    $telerror = "Phone number cannot be empty.";
                    $globalerror = "error";
                } else {
                    $tel = ($_POST["tel"]);
                    if (!preg_match("/^(0|[1-9]\d{0,15})$/",$tel)) {
                        $telerror = "Please enter numbers like xxx-xxx-xxxx.";
                        $globalerror = "error";
                    }
                }

                if (empty($_POST["payment"])) {
                    $paymenterror = "Card number Cannot Be Empty.";
                    $globalerror = "error";
                } else {
                    $payment = ($_POST["payment"]);
                    if (!preg_match("/^(0|[1-9]\d{0,15})$/",$payment)) {
                        $paymenterror = "Please enter numbers.";
                        $globalerror = "error";
                    }
                }
            }

            function check_input($data) {
               $data = trim($data);
               $data = stripslashes($data);
               $data = htmlspecialchars($data);
               return $data;
            }
        }
        ?>

        <?php
            if (!$checkout || $globalerror != ""){
        ?>
        <h1>Shopping Cart</h1>
		<?php
		     if ($productList) {
		?>
        <table class="carttable">
            <tr>
                <th>Product</th>
                <th>Number</th>
                <th>Price</th>
				<th>Remove</th>
            </tr>
        <?php
            foreach ($productList as $prod){
                $total += $prod['price'] * $prod['count'];
        ?>
            <tr>
                <td><?=$prod['name']?></td>
                <td><?=$prod['count']?></td>
                <td><?=$prod['price']?></td>
                <td><?php
                       printf("<a href=\"cartdel.php?id=%s\">remove</a>",
                       $prod['id']);
                       ?></td>
            </tr>

        <?php
           } // end foreach
           ?>
            <tr>
              <td colspan="3" class="ckbutton"><label>Total Price:  <?=$total?></label></td>
              <td><a href="cartdel.php?all=yes">clear</a></td>
            </tr>
        </table>
        <?php
		    } // end if
		     else {
			     echo "<p>Your cart is empty.</p>";
			}
        ?>
        <h1>Additional Order Information</h1>
        <form enctype = "multipart/form-data" method="post" id="paymentinformation">
            <fieldset>
                <label class="cartheading" for="fullname">Full Name</label>
                <input type=text name=fullname value="<?php echo $fullname;?>" size="40"> * <?php echo $fullnameerror;?>
                <br>
                <label class="cartheading" for="address">Address</label>
                <input type=text name=address value="<?php echo $address;?>" size="40"> * <?php echo $addresserror;?>
                <br>
                <label class="cartheading" for="zipcode">Zip Code</label>
                <input type=text name=zipcode value="<?php echo $zipcode;?>" size="40"> * <?php echo $zipcodeerror;?>
                <br>
                <label class="cartheading" for="tel">Phone Number</label>
                <input type=text name=tel value="<?php echo $tel;?>" size="40"> * <?php echo $telerror;?>
                <br>
                <label class="cartheading" for="payment">Payment Card</label>
                <input type=text name=payment value="<?php echo $payment;?>" size="40"> * <?php echo $paymenterror;?>
                <br>
        <?php
                if ($productList){
        ?>
                <input class="checkoutbtn" type="submit" name="checkout" value="checkout">
        <?php
                }else{
        ?>
                <input class="checkoutbtn2" type="submit" name="checkout" value="checkout" disabled="1">
        <?php
                }
        ?>
            </fieldset>
        </form>

        <?php
            }
        ?>
        <?php
            if ($checkout && $globalerror == "")// checkout event
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
                echo "<h1>Success!</h1><p>Your order number is:  ".$orderid." Please remember your Order Id and track it in <a href =trackorder.php>&#34;Track Order&#34;</a></p>";
            }
        ?>
    </div> <!-- end of mainbody div -->
<?php
    include 'foot.php';
    require 'close.php';
?>
