<?php
    include 'header.php';
    require 'connection.php';
?>

<?php
    $param = $_GET["name"]; //get the parameter from url in this page after "?"
    $sellername = str_replace('%20',' ',$param);
    $sql = "SELECT * FROM product where name='".$sellername ."' and in_stock > 0";
    $result = $mysqli->query($sql); // error detection
    if(!$result){
        echo $mysqli->error;
    }
?>
    <div id='mainbody'>
        <!-- left side of mainbody, showing categories -->
        <div id="categoryleft">
            <h2>House</h2>
                <p><img src="img/category_1.jpg" width="30" height="30"><a href="list.php?category=HC">House Cleaning</a></p>
                <p><img src="img/category_1.jpg" width="30" height="30"><a href="list.php?category=GD">Gardening</a></p>
                <p><img src="img/category_1.jpg" width="30" height="30"><a href="list.php?category=PB">Plumbing</a></p>
                <p><img src="img/category_1.jpg" width="30" height="30"><a href="list.php?category=RP">Repairing</a></p>

            <h2>General</h2>
                <p><img src="img/category_2.jpg"  width="30" height="30"><a href="list.php?category=WD">Walking Dog</a></p>
                <p><img src="img/category_2.jpg"  width="30" height="30"><a href="list.php?category=CD">Chauffeur Drive</a></p>
                <p><img src="img/category_2.jpg"  width="30" height="30"><a href="list.php?category=GP">Grocery Purchase</a></p>
                <p><img src="img/category_2.jpg"  width="30" height="30"><a href="list.php?category=MM">Move in &#124; out</a></p>

            <h2>Cooking</h2>
                <p><img src="img/category_3.jpg"  width="30" height="30"><a href="list.php?category=FR">French Cuisine</a></p>
                <p><img src="img/category_3.jpg"  width="30" height="30"><a href="list.php?category=JA">Japanese Cuisine</a></p>
                <p><img src="img/category_3.jpg"  width="30" height="30"><a href="list.php?category=CH">Chinese Cuisine</a></p>
                <p><img src="img/category_3.jpg"  width="30" height="30"><a href="list.php?category=IN">Indian Cuisine</a></p>

            <h2>Tutor</h2>
                <p><img src="img/category_4.jpg"  width="30" height="30"><a href="list.php?category=SP">Speaking Spanish</a></p>
                <p><img src="img/category_4.jpg"  width="30" height="30"><a href="list.php?category=SW">Swimming Lessons</a></p>
                <p><img src="img/category_4.jpg"  width="30" height="30"><a href="list.php?category=DR">Driving Instruction</a></p>
                <p><img src="img/category_4.jpg"  width="30" height="30"><a href="list.php?category=CO">Computers</a></p>
        </div>
        <!-- right of mainbody showing seller information -->
        <div id="categoryright">
   <?php
        while(list($id,$category,$name,$price,$in_stock,$description,$img) = $result->fetch_row()) {
    ?>
                <img class='sellerprofileimg' src="<?= $img ?>"alt='sellers' width='300' height='300'></a>
                <h1><?= $name ?></h1>
                <h1>Price: $<?= $price ?>/Week</h1>
                <h1>Duration of Availability: <?=$in_stock?> Weeks</h1>
                <form action="cart.php" method="post">
                    <input type="hidden" name=id value="<?=$id?>">
                    <input type="hidden" name=name value="<?=$name?>">
                    <input type="hidden" name=price value="<?=$price?>">
                    <input class="jsShow" type="text" name="count" value="1"> Weeks. <input class="jsShow" type="submit" value="add to cart">
                </form>
                <div  class="sellerprofiledescription">
                  <p id="description">
                    <?= $description ?>
                  </p>
                  <button id="showMore" onclick="showMore()">show More</button>
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
