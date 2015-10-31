<?php
    include 'header.php';
?>

<h4>This is the reserved page for shopping cart.</h4>
<table id="carttable">
   <tr>
    <th>Category</th>
    <th>Time slot</th>
    <th>Seller</th>
    <th>Cost</th>
   </tr>

   <tr>
    <td>HC</td>
    <td>12/12/2015, 8pm~9pm</td>
    <td>AAA clean</td>
    <td>$40</td>
   </tr>

   <tr><th colspan="4"></th></tr>
   <tr><th colspan="4">Your total amount is $xxx.</th></tr>
</table>

<form action="checkout.php">

   <input id="ckbutton" type="submit" value="check out"/>
</form>

<?php
    require 'foot.php';
?>
