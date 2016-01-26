<?php
    include 'header.php';
    require 'connection.php';
?>

<?php
    $param = $_GET["search"]; //get the parameter from url in this page after "?"
    if ($param) {
        $name = str_replace('+',' ',$param);
        $sql = "SELECT category, name, description, img FROM product where name LIKE '%".$name."%' and in_stock > 0";     // keyword in product name
        $sql2 = "SELECT category, name, description, img FROM product where description LIKE '%".$name."%' and name NOT LIKE '%".$name."%' and in_stock > 0";  // keyword in description and not in product name
        $result = $mysqli->query($sql);
        $result2 = $mysqli->query($sql2);
        if(!$result && !$result2){  // error detection
            echo $mysqli->error;
        }
    }
?>

<main class="main" id="main">
    <div class="container" id="search">
        <div class="col-md-10 col-md-offset-1">
            <!-- if no result, do not show below -->
            <?php
              if($param){
            ?>
                  <legend><h3>Search results for "<?= $param ?>":</h3></legend>
            <?php
              } else {
            ?>
                  <legend><h3>Please input your keywords to search</h3></legend>
            <?php
              }
            ?>
              <!-- show result as ol list ,  right now we support fuzzy search "seller name" such as clean, garden etc  -->
              <ol>
              <?php
                if ($param){
                    while(list($category,$name,$description,$img) = $result->fetch_row()) {
              ?>
                        <li><p><a href = "profile.php?name=<?=$name?>"><?= $name ?></a></p>
                        <p><?= $description ?></p></li>
              <?php
                    }
                    while(list($category,$name,$description,$img) = $result2->fetch_row()) {
              ?>
                        <li><p><a href = "profile.php?name=<?=$name?>"><?= $name ?></a></p>
                        <p><?= $description ?></p></li>
              <?php
                    }
                }
              ?>
              </ol>
        </div>
    </div>
</main>

<?php
    include 'footer.php';
?>
