<?php
    include 'header.php';
    require 'connection.php';
?>
 

<?php
    $param = explode('=', $_SERVER["QUERY_STRING"]); //get the parameter from url in this page after "?"
    $sql = "SELECT * FROM seller where category='".$param[1]."'"; // sql = from table "seller" and category = $param
    $result = $mysqli->query($sql); // error detection
    if(!$result){
        echo $mysqli->error;
    }
?>

<?php
// below is listing of sellers in one category
    echo "<div id='mainbody'>";


    while(list($category,$name,$description,$img) = $result->fetch_row()) {  //getting all the seller profile information 
 
        
        echo "<div class='listseller'>";
                echo "<h1>" . $name . "</h1>";
                echo "<a href = 'profile.php?id=".$name."'><img class='logo' src='" . $img .  "' alt='sellers' width='300' height='300'></a>";
                echo $description;
        echo "</div>";
        

    }



    echo "</div>";
?>




<?php
    include 'foot.php';
    require 'close.php';
?>