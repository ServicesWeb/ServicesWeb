<?php
   //include 'headerRevised.php';
   require 'connection.php';
?>

<?php
    $id=$_POST['id'];
    $day=$_POST['day'];
    //printf ($day);
    for($i=8; $i<20; $i++){
      //$period = "7:00-8:00";
      $period = $i . ":00-" . ($i+1) . ":00";
      $sql = "INSERT INTO timeslot (productid, day, hourPeriod, deactive) VALUES('$id', '$day', '$period', '0')";    //////////////
      $result = $mysqli->query($sql);
      if(!$result){
          echo $mysqli->error;
      }
  }
?>



<h1>Welcome, serverce provider. Please input your time slot in this page.</h1>

<form action="loginProvider.php" method="post">
  <div>
    <label>id</label><input type="text" name="id" value=""><br />
    <label>day</label><input type="text" name="day" value=""><br />
    <input type="submit" value="input">
  </div>
</form>


<?php
    //include 'footerRevised.php';
    require 'close.php';
?>
