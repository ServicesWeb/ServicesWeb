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
                    <input class="jsShow" type="text" name="count" value="1"> Weeks.
                    <input class="jsShow" type="submit" value="add to cart">
                </form>

                <div><strong>date:   </strong> <input type="date" /></div>
                <div><strong>month:   </strong> <input type="month" /></div>
                <div><strong>week:   </strong> <input type="week" /></div>

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
