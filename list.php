<?php
    include 'header.php';
    require 'connection.php';
?>
<?php
    $param = $_GET["category"]; //get the parameter from url in this page after "?"
    $sql = "SELECT * FROM product where category='".$param."' and in_stock > 0"; // sql = from table "seller" and category = $param
    $result = $mysqli->query($sql); // error detection
    if(!$result){
        echo $mysqli->error;
    }
?>
    <div id='mainbody'>
        <!-- left side of mainbody, showing categories -->
        <div id="categoryleft">
            <h2>House</h2>
                <p><img src="img/category_1.jpg"><a href="list.php?category=HC">House Cleaning</a></p>
                <p><img src="img/category_1.jpg"><a href="list.php?category=GD">Gardening</a></p>
                <p><img src="img/category_1.jpg"><a href="list.php?category=PB">Plumbing</a></p>
                <p><img src="img/category_1.jpg"><a href="list.php?category=RP">Repairing</a></p>

            <h2>General</h2>
                <p><img src="img/category_2.jpg"><a href="list.php?category=WD">Walking Dog</a></p>
                <p><img src="img/category_2.jpg"><a href="list.php?category=CD">Chauffeur Drive</a></p>
                <p><img src="img/category_2.jpg"><a href="list.php?category=GP">Grocery Purchase</a></p>
                <p><img src="img/category_2.jpg"><a href="list.php?category=MM">Move in &#47; out</a></p>

            <h2>Cooking</h2>
                <p><img src="img/category_3.jpg"><a href="list.php?category=FR">French Cuisine</a></p>
                <p><img src="img/category_3.jpg"><a href="list.php?category=JA">Japanese Cuisine</a></p>
                <p><img src="img/category_3.jpg"><a href="list.php?category=CH">Chinese Cuisine</a></p>
                <p><img src="img/category_3.jpg"><a href="list.php?category=IN">Indian Cuisine</a></p>

            <h2>Tutor</h2>
                <p><img src="img/category_4.jpg"><a href="list.php?category=SP">Speaking Spanish</a></p>
                <p><img src="img/category_4.jpg"><a href="list.php?category=SW">Swimming Lessons</a></p>
                <p><img src="img/category_4.jpg"><a href="list.php?category=DR">Driving Instruction</a></p>
                <p><img src="img/category_4.jpg"><a href="list.php?category=CO">Computers</a></p>
        </div>
        <!-- right of mainbody showing seller list in one category -->
        <div id="categoryright">
            <img src="img/<?=$param ?>.jpg" width="830" height="150"/>
             <p>You are browsing sub-category: <?=$param ?></p>
<?php
        while(list($id,$category,$name,$price,$in_stock,$description,$img) = $result->fetch_row()) { //fetch seller's information from sql "seller"
?>
         <!-- right of mainbody showing seller list in one category, one div has one seller-->
        <div class='listseller'>
            <a href = "profile.php?name=<?=$name?>"><img class='logo' src="<?= $img ?>" alt='sellers' width='180' height='130'></a>
            <p><a href = "profile.php?name=<?=$name?>"><?= $name ?></a></p>
        </div>
<?php
    }
?>
        </div><!-- end of categoryright div -->
    </div> <!-- end of mainbody div -->
<?php
    include 'foot.php';
    require 'close.php';
?>
