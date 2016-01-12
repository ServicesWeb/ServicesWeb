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

<main class="main">
  <div class="container" id="profile">
    <div class="row" id='cartdiv'>
      <div class="col-md-10 col-md-offset-1">
            <?php
                $id=array_key_exists('id',$_POST)?$_POST['id']:NULL;
                $name=array_key_exists('name',$_POST)?$_POST['name']:NULL;
                $price=array_key_exists('price',$_POST)?$_POST['price']:NULL;
                $days_select=array_key_exists('days_select',$_POST)?$_POST['days_select']:NULL;
                $month=array_key_exists('month',$_POST)?$_POST['month']:NULL;
                $year=array_key_exists('year',$_POST)?$_POST['year']:NULL;
                $startHour=array_key_exists('startHour',$_POST)?$_POST['startHour']:NULL;
                $durationHour=array_key_exists('durationHour',$_POST)?$_POST['durationHour']:NULL;
                $checkout=array_key_exists('checkout',$_POST)?$_POST['checkout']:NULL;   // set $checkout == null at beginning

                $timestub=array();      // Lifen added
                if($days_select) {
                    foreach($days_select as $day) {
                            $temtimestub=array("year"=>$year, "month"=>$month, "day"=>$day, "start"=>$startHour, "finish"=>$startHour + $durationHour, "duration"=>$durationHour);
                            array_push($timestub, $temtimestub);
                    }
                }
                //printf (sizeof($timestub));
                $product = array('id'=>$id, 'name'=>$name, 'price'=>$price, 'timestub'=>$timestub, 'amount'=>$price*$durationHour*sizeof($days_select));

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


    //-- part 1.
    //-- after click checkout button, come here to check whether there is error exits, and remember the error messages
            if ($checkout){                  // after click checkout, come here to check whether there is error
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
                            $telerror = "Please enter numbers like xxxxxxxxxx.";
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
            }
            ?>


    <!-- part 2 -->
    <!-- before click checkout button, or after click checkout button but error exists-->
    <!-- begin of body part, including shopping cart and lower part -->
            <?php
            if (!$checkout || $globalerror != ""){       // when checkout == null (before checkout), or if there is error af checkout
            ?>

            <!-- begin of shopping cart, either emtpy or show table -->
                <legend><h2>Shopping Cart</h2></legend>
                <?php
                if ($productList) {
                ?>
                  <div class="table-responsive">
                   <table class="carttable" border="1">
                      <tr>
                         <th>Product</th>
                         <th>Price/hr</th>
                         <th>Schedule</th>
                         <th>Charge</th>
                         <th>Remove</th>
                      </tr>

                   <?php
                   foreach ($productList as $prod){
                       $total += $prod['amount'];
                   ?>
                      <tr>
                         <td><?=$prod['name']?></td>
                         <td>$<?=$prod['price']?></td>
                         <!-- <td><//?=$prod['timestub']?></td> -->
                         <td id="shopping-cart-subcell">
                           <table class="table" id="shopping-cart-subtable" border="1">
                             <tr>
                               <th>Day</th>
                               <th>Start</th>
                               <th>Finish</th>
                               <th>Time</th>
                             </tr>
                             <?php
                             foreach ($prod['timestub'] as $list) {
                             ?>
                                <tr>
                                <td><div id="cartDay"><?=$list['year']?>-<?=$list['month']?>-<?=$list['day']?></div></td>
                                <td><?=$list['start']?></td>
                                <td><?=$list['finish']?>:00</td>
                                <td><?=$list['duration']?>hr</td>
                                </tr>
                              <?php
                               }
                             ?>
                           </table>
                         </td>

                         <td>$<?=$prod['amount']?></td>
                         <td><?php
                             printf("<a href=\"cartdel.php?id=%s\">remove</a>",
                             $prod['id']);
                             ?></td>
                      </tr>
                   <?php
                   } // end foreach
                   ?>

                      <tr>
                         <td colspan="4" class="ckbutton"><label>Total Price: $<?=$total?></label></td>
                         <td><a href="cartdel.php?all=yes">clear</a></td>
                      </tr>
                   </table>
                </div>
               <?php
               } // end if
               else {
                  echo "<p>Your cart is empty.</p>";
               }
               ?>
               <!-- end of shopping cart -->


            <!-- begin of lower part, type in and show user's infomation: name, address, tel, etc-->
            <legend><h2>Payment Method</h2></legend>
            <form enctype = "multipart/form-data" method="post" id="paymentinformation">
                <fieldset>
                    <label class="cartheading" for="fullname">Full Name</label>
                    <input type=text placeholder="e.g. test" name=fullname value="<?php echo $fullname;?>"> * <?php echo $fullnameerror;?>
                    <br>
                    <label class="cartheading" for="address">Address</label>
                    <input type=text placeholder="e.g. Santa Clara University" name=address value="<?php echo $address;?>"> * <?php echo $addresserror;?>
                    <br>
                    <label class="cartheading" for="zipcode">Zip Code</label>
                    <input type=text placeholder="e.g. 95050" name=zipcode value="<?php echo $zipcode;?>"> * <?php echo $zipcodeerror;?>
                    <br>
                    <label class="cartheading" for="tel">Phone Number</label>
                    <input type=text placeholder="e.g. 1234567890" name=tel value="<?php echo $tel;?>"> * <?php echo $telerror;?>
                    <br>
                    <label class="cartheading" for="payment">Payment Card</label>
                    <input type=text placeholder="e.g. 1111222233334444" name=payment value="<?php echo $payment;?>"> * <?php echo $paymenterror;?>
                    <br>
            <?php
                    if ($productList){
            ?>
                    <button class="btn btn-default center-block" type="submit" name="checkout" value="checkout">Check out</button>
            <?php
                    }else{
            ?>
                    <button class="btn btn-default center-block" type="submit" name="checkout" value="checkout" disabled="1">Check out</button>
            <?php
                    }
            ?>
                </fieldset>
            </form>

            <button class="btn btn-default FAQOrderInfo">Need help?</button>
            <div id="box" class="box">
              <p>One time use? No need to login. Just simply fill out the form and checkout.</p>
              <p>Return user? Please login to check out, and your order will be saved in your account.</p>
            </div>
            <!-- end of lower part -->

            <?php
                }
            ?>
            <!-- end of body part -->




            <!-- part 3 -->
            <!-- after click checkout button and no error exist, connect and write to SQL-->

            <?php
                if ($checkout && $globalerror == "")// checkout event         // after click checkout and no error, save to SQL
                {
                    require 'connection.php';
                    $orderinfo="";
                    $totalAmount=0;        // somehow $total is not global variable, so I made new variable here


                    // here, I marked off the check of the invertory to see the item is still avaiable or not (count)
                    // I could add here to deactive the timespan submitted
                    /*foreach ($productList as $prod){
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
                    }*/


                    // below is to insert a new order,  orderinfo part + userinfo part
                    foreach ($productList as $prod){            // orderinfo part
                      $timestubinfo = "";
                      foreach ($prod['timestub'] as $list) {
                         $timestubinfo = $timestubinfo.$list['year'] ."-". $list['month'] ."-". $list['day'] .",". $list['start'] ."-". $list['finish'] .":00,". $list['duration'] . "hrs|";
                       }
                      $orderinfo = $orderinfo.$prod['name']."*".$prod['price']."*".$prod['amount']."*".$timestubinfo.";";
                      $totalAmount+=$prod['amount'];
                    }


                    //insert a new order
                    $fullname=$_POST['fullname'];
                    $address=$_POST['address'];
                    $zipcode=$_POST['zipcode'];
                    $payment=$_POST['payment'];
                    $tel=$_POST['tel'];
                    $username=$_COOKIE["userlogin"];
                    $orderid = "".date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);  //random orderid
                    $sql = "INSERT INTO trackorder VALUES('".$orderid."','".$orderinfo."','".$totalAmount."','".$fullname."', '".$address."', '".$zipcode."', '".$tel."', '".$payment."', '".$username."')";
                    $result = $mysqli->query($sql);
                    if(!$result){
                        echo $mysqli->error;
                    }
                    session_destroy();
                    echo "<h1>Success!</h1><p>Your order number is:  ".$orderid." Please remember your Order Id and track it in <a href =trackorder.php>&#34;Track Order&#34;</a>.<br/> View your receipt at <a href =trackorder.php?search=".$orderid.">&#34;receipt&#34;</a></p>";
                }
            ?>

        </div> <!-- end of mainbody div -->

        <!--<p>Payments</p>
        <img src="img/creditcard.jpg" alt="creditcard"/>-->
    </div>
</main>

<?php
    include 'footer.php';
    require 'close.php';
?>
