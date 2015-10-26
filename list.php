<?php
    include 'header.php';
    require 'connection.php';
?>


<?php
    $param = $_GET["category"]; //get the parameter from url in this page after "?"
    $sql = "SELECT * FROM seller where category='".$param."'"; // sql = from table "seller" and category = $param
    $result = $mysqli->query($sql); // error detection
    if(!$result){
        echo $mysqli->error;
    }
?>

    <div id='mainbody'>

        
        
<?php
    while(list($category,$name,$description,$img) = $result->fetch_row()) {  
?>
        <div class='listseller'>
        <h1><?= $name ?></h1>
        <a href = "profile.php?name=<?=$name?>"><img class='logo' src="<?= $img ?>" alt='sellers' width='300' height='300'></a>
        <?=$description?>
        </div>
<?php
    }
?>


    </div>




<?php
    include 'foot.php';
    require 'close.php';
?>
