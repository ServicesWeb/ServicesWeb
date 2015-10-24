<?php
    include 'header.php';
    require 'connection.php';
?>
 

<?php
    $param = explode('=', $_SERVER["QUERY_STRING"]); //get the parameter from url in this page after "?"
    $sellername = str_replace('%20',' ',$param[1]);
    $sql = "SELECT * FROM info where name='".$sellername ."'"; 
    $result1 = $mysqli->query($sql); // error detection
    if(!$result1){
        echo $mysqli->error;
    }   
?>

<?php
    $sql = "SELECT * FROM seller where name='".$sellername ."'"; 
    $result2 = $mysqli->query($sql); // error detection
    if(!$result2){
        echo $mysqli->error;
    }
?>

<?php
    echo "<div id='mainbody'>";




    
    /* below is for listing the available time from one seller*/

            while(list($category,$name,$description,$img) = $result2->fetch_row()) {                                 
                    echo "<h1>" . $name . "</h1>";
                    echo "<p>" . $description . "</p>";
                    echo  "<img class='logo' src='" . $img .  "' alt='sellers' width='300' height='300'></a>";
            }

            while(list($id,$name,$hour,$price) = $result1->fetch_row()) {                                 
                echo "<p>" . $id. $name .$hour .$price . " Add to Cart</p>";  
            }







    echo "</div>";
?>




<?php
    include 'foot.php';
    require 'close.php';
?>