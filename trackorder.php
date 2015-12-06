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
<div id="searchdiv" >
    <h1>Track Order</h1>
    <form action="trackorder.php">
        <input type="text" name="search" class="searchform"> <input type="submit" value="Search" class="searchsubmit">
    </form>
    <!-- if no result, do not show below -->
    <?php
    if($param){
    ?>
        <p>Result for order "<?= $param ?>":</p>
    <?php
    }
    ?>
    <!-- Show order name price and count-->
        <h2>Order Information</h2>
    <?php
        if ($param){
            while(list($orderid, $orderinfo, $name, $address, $zipcode, $tel, $payment) = $result->fetch_row()) {
                $orders=explode(";", $orderinfo);
                foreach ($orders as $order){
                    if ($order){
                        $details=explode(",", $order);
    ?>
                    <p><?=$details[0]?>: $<?=$details[1]?> &lowast; <?=$details[2]?> Weeks</p>
    <?php
                    }
                }
    ?>
    <!-- Show order shipping information-->
        <h2>Shipping Address:</h2>
        <p>Name:<?=$name?></p>
        <p>Address: <?=$address?></p>
        <p>Zipcode: <?=$zipcode?></p>
        <p>Phone Number: <?=$tel?></p>
        <p>Payment Method: <?=$payment?></p>
    <?php
            }
        }
    ?>
</div>

<?php
    include 'foot.php';
?>
