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

<main class="main">
    <div class="container" id="profile">


        <!-- left side of mainbody, showing categories -->
        <div id="categoryleft">

            <ul id="manu1C"><img src="img/category_1.jpg"><h2>House Services</h2><br />
              <div id="manu1">
                <li><a href="list.php?category=HC">House Cleaning</a></li>
                <li><a href="list.php?category=GD">Gardening</a></li>
                <li><a href="list.php?category=PB">Plumbing</a></li>
                <li><a href="list.php?category=RP">Repairing</a></li>
              </div>
            </ul>

          <div id="manu2">
            <ul><img src="img/category_2.jpg"><h2>General Services</h2><br />
                <li><a href="list.php?category=WD">Walking Dog</a></li>
                <li><a href="list.php?category=CD">Chauffeur Drive</a></li>
                <li><a href="list.php?category=GP">Grocery Purchase</a></li>
                <li><a href="list.php?category=MM">Move in &#47; out</a></li>
            </ul>
          </div>
          <div id="manu3">
            <ul><img src="img/category_3.jpg"><h2>Cooking Services</h2><br />
                <li><a href="list.php?category=FR">French Cuisine</a></li>
                <li><a href="list.php?category=JA">Japanese Cuisine</a></li>
                <li><a href="list.php?category=CH">Chinese Cuisine</a></li>
                <li><a href="list.php?category=IN">Indian Cuisine</a></li>
            </ul>
          </div>
          <div id="manu4">
            <ul><img src="img/category_4.jpg"><h2>Tutor Services</h2><br />
                <li><a href="list.php?category=SP">Speaking Spanish</a></li>
                <li><a href="list.php?category=SW">Swimming Lessons</a></li>
                <li><a href="list.php?category=DR">Driving Instruction</a></li>
                <li><a href="list.php?category=CO">Computers</a></li>
            </ul>
          </div>
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
     <!-- end of mainbody div -->

  </div>
</main>

<?php
    include 'footer.php';
    require 'close.php';
?>
