<?php
    include 'header.php';
    require 'connection.php';
?>

<?php
    $param = $_GET["search"]; //get the parameter from url in this page after "?"
    if ($param) {
        $sql = "SELECT * FROM trackorder where orderid ='".$param."'";
        $result = $mysqli->query($sql);
        if(!$result){  // error detection
            echo $mysqli->error;
        }
    }
?>

<main class="main">
  <div class="container" id="profile">

    <div id="searchdiv" >
        <legend><h2>Track Order</h2></legend>
        <form class="form-inline" action="trackorder.php">
            <input type="submit" value="Order #" class="form-control searchsubmit"><input type="text" name="search" class="searchform">
        </form>
        <br>

        <!-- if no result, do not show below -->
        <?php
        if($param){
        ?>
            <hr>
            <p>Result for order "<?= $param ?>":</p>
            <h2>Order Information</h2>
        <?php
        }
        ?>
        <!-- Show order name price and count-->
        <?php
            if ($param){
                 while(list($orderid, $orderinfo, $name, $address, $zipcode, $tel, $payment) = $result->fetch_row()) {
                 $orders=explode(";", $orderinfo);
                 foreach ($orders as $order){
                      if ($order){
                          $details=explode("*", $order);
        ?>
                          <p><?=$details[0]?>: $<?=$details[1]?>/hr</br>
                          <?php
                             $rows=explode("|", $details[2]);
                             foreach ($rows as $row) {
                          ?>
                             <?=$row?> </br>
                          <?php
                             }
                          ?>
                        </p>
                 <?php
                      }
                  }
                 ?>
                 <!-- Show order shipping information-->
                 <h2>Shipping Address:</h2>
                 <p>Name:<?=$name?></p>
                 <p>Address: <?=$address?></p>
                 <p>Zip code: <?=$zipcode?></p>
                 <p>Phone Number: <?=$tel?></p>
                 <p>Payment Method: <?=$payment?></p>
        <?php
                }
            }
        ?>
    </div>

  </div>
</main>

<?php
    include 'footer.php';
?>
