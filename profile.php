<?php
    include 'header.php';
    require 'connection.php';
?>
 

<?php
    $param = $_GET["name"]; //get the parameter from url in this page after "?"
    $sellername = str_replace('%20',' ',$param);
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

    <div id='mainbody'>


    <?php
        while(list($category,$name,$description,$img) = $result2->fetch_row()) {   
    ?>
                <h1><?= $name ?></h1>
                <p><?= $description ?></p>
                <img class='logo' src="<?= $img ?>"alt='sellers' width='300' height='300'></a>
    <?php  
    }
    ?>
    <?php 
            while(list($id,$name,$hour,$price) = $result1->fetch_row()) {  
    ?>
            <p><?= $id?><?=$name?> <?=$hour?> <?=$price ?> Add to Cart</p>  
    <?php 
            }
    ?>


    </div>




<?php
    include 'foot.php';
    require 'close.php';
?>