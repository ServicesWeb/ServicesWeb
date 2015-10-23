<?php
    include 'header.php';
    require 'connection.php';
?>
 

<?php

// below is for testing below is for testing below is for testing below is for testing

$sql = "SELECT * FROM products";

$result = $mysqli->query($sql);
if(!$result){
    echo $mysqli->error;
}

echo "Result row nums:".$result->num_rows."<br>"; 

while(list($id,$category,$name,$description,$price) = $result->fetch_row()) { 
echo "$id, $category, $name, $description, $price"."<br>"; 
} 

// above is for testing above is for testing above is for testing above is for testing

?>


<?php
    include 'foot.php';
?>


<?php
    require 'close.php';
?>