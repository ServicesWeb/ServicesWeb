<?php
    include 'header.php';
    require 'connection.php';
?>

<?php
    if ($_GET["search"]) {
      $param = $_GET["search"]; //get the parameter from url in this page after "?"
      $sql = "SELECT * FROM trackorder where orderid ='".$param."'";
      $result = $mysqli->query($sql);
      if(!$result){  // error detection
          echo $mysqli->error;
      }
    }

    if ($_GET["username"]) {
      $param = $_GET["username"];
      $sql = "SELECT * FROM trackorder where username ='".$param."'";
      $result = $mysqli->query($sql);
      if(!$result){  // error detection
          echo $mysqli->error;
      }
    }
?>

<main class="main" id="main">
  <div class="container" id="track-order">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <!-- Show order name price and count-->
          <?php
              if ($param){
          ?>
              <legend><h2>Order record of <?= $param ?>:</h2></legend>
              <div class="table-responsive">
                <table class="table receiptTableOuter">
                  <tr>
                    <th>Order#</th>
                    <th>Order Details</th>
                    <th>Service Address</th>
                  </tr>
                   <?php
                      while(list($orderid, $orderinfo, $total, $name, $address, $zipcode, $tel, $payment) = $result->fetch_row()) {
                         $orders=explode(";", $orderinfo);
                   ?>
                 <tr>
                    <td><?=$orderid?></td>
                    <td id="track-order-subcell">
                       <table class="table receiptTable">
                          <tr>
                             <th>Name</th>
                             <th>Price</th>
                             <th>Schedule</th>
                             <th>Charge</th>
                          </tr>

                        <?php
                           foreach ($orders as $order){
                        ?>
                              <tr>
                                  <?php
                                    if ($order){
                                        $details=explode("*", $order);
                                  ?>
                                        <td><?=$details[0]?></td>
                                        <td>$<?=$details[1]?>/hr</td>
                                        <td><div id="receiptInfo">
                                        <?php
                                           $rows=explode("|", $details[3]);
                                           foreach ($rows as $row) {
                                        ?>
                                           <h5><?=$row?></h5>
                                        <?php
                                           }
                                        ?>
                                        </div></td>
                                        <td>$<?=$details[2]?></td>
                                  <?php
                                    }
                                  ?>
                              </tr>
                        <?php
                           }
                        ?>

                          <tr><td colspan="4" class="ckbutton">Total: $<?=$total?></td></tr>
                       </table>
                   </td>

                     <!-- Show shipping information-->
                     <td>
                         <p class="shipAddr">
                           Name: <?=$name?> </br>
                           Address: <?=$address?> </br>
                           Zip code: <?=$zipcode?> </br>
                           Phone: <?=$tel?> </br>
                         </p>
                     </td>
                 </tr>
             <?php
                }
             ?>
            </table>
          </div>
         <?php
          }
          else {
          ?>
              <legend><h2>Track Order</h2></legend>
              <form class="form-inline" action="trackorder.php">
                <div class="form-group">
                  <label for="trackOrder">Order#</label>
                  <input type="text" class="form-control" placeholder="2016011100693" name="search">
                  <button type="submit" class="btn btn-default">Search</button>
                </div>
              </form>
          <?php
          }
          ?>
      </div>
    </div>
  </div>
</main>

<?php
    include 'footer.php';
?>
