<?php
    include 'header.php';
    require 'connection.php';
?>

<?php
    $param = $_GET["search"]; //get the parameter from url in this page after "?"
    if ($param) {
        $name = str_replace('+',' ',$param);
        $sql = "SELECT category, name, description, img FROM product where name LIKE '%".$name."%' and in_stock > 0";
        $result = $mysqli->query($sql);
        if(!$result){  // error detection
            echo $mysqli->error;
        }
    }
?>

<main class="main">
    <div class="container" id="profile">

        <div id="searchdiv" >
        <!-- if no result, do not show below -->
          <?php
            if($param){
          ?>
                <p>Search results for"<?= $param ?>":</p>
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
            }
          ?>
            </ol>
        </div>

    </div>
</main>

<?php
    include 'footer.php';
?>
