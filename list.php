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
        <div id="categoryleft">  
            <h2>House</h2>
                <p><img src="img/category_1.jpg" width="30" height="30"><a href="list.php?category=HC">House Cleaning</a></p>
                <p><img src="img/category_1.jpg" width="30" height="30"><a href="list.php?category=GD">Gardening</a></p>
                <p><img src="img/category_1.jpg" width="30" height="30"><a href="list.php">Plumbing</a></p>
                <p><img src="img/category_1.jpg" width="30" height="30"><a href="list.php">Repairing</a></p>

            <h2>Service</h2>
                <p><img src="img/category_2.jpg"  width="30" height="30"><a href="list.php">Walking Dog</a></p>
                <p><img src="img/category_2.jpg"  width="30" height="30"><a href="list.php">Chauffeur Drive</a></p>
                <p><img src="img/category_2.jpg"  width="30" height="30"><a href="list.php">Grocery Purchase</a></p>
                <p><img src="img/category_2.jpg"  width="30" height="30"><a href="list.php">Move in &#124; out</a></p>
            
            <h2>Cooking</h2>
                <p><img src="img/category_3.jpg"  width="30" height="30"><a href="list.php">French</a></p>
                <p><img src="img/category_3.jpg"  width="30" height="30"><a href="list.php">Japanese</a></p>
                <p><img src="img/category_3.jpg"  width="30" height="30"><a href="list.php">Chinese</a></p>
                <p><img src="img/category_3.jpg"  width="30" height="30"><a href="list.php">Indian</a></p>
            
            <h2>Tutor</h2>
                <p><img src="img/category_4.jpg"  width="30" height="30"><a href="list.php">Spanish</a></p>
                <p><img src="img/category_4.jpg"  width="30" height="30"><a href="list.php">Swim</a></p>
                <p><img src="img/category_4.jpg"  width="30" height="30"><a href="list.php">Drive</a></p>
                <p><img src="img/category_4.jpg"  width="30" height="30"><a href="list.php">Computer</a></p>
            

        </div>
        <div id="categoryright">
<?php
        while(list($category,$name,$description,$img) = $result->fetch_row()) {  
?>
        <div class='listseller'>
        <h1><?= $name ?></h1>
        <a href = "profile.php?name=<?=$name?>"><img class='logo' src="<?= $img ?>" alt='sellers' width='50' height='50'></a>
        <?=$description?>
        </div>
<?php
    }
?>
        </div>

    </div>




<?php
    include 'foot.php';
    require 'close.php';
?>
