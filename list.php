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
    list($id,$category,$name,$price,$in_stock,$description,$img) = $result->fetch_row();

    $categoryList = array("HC"=>"House:Cleaning", "GD"=>"House:Gardening", "PB"=>"House:Plumbing", "RP"=>"House:Repairing",
                          "FR"=>"Cooking:French Cuisine", "CH"=>"Cooking:Chinese Cuisine", "JA"=>"Cooking:Japanese Cuisine", "IN"=>"Cooking:Indian Cuisine",
                          "SP"=>"Tutoring:Speaking Spanish", "SW"=>"Tutoring:Swimming Lessons", "DR"=>"Tutoring:Driving Instruction", "CO"=>"Tutoring:Computer Programming",
                          "WD"=>"General:Dog Walking", "CD"=>"General:Chauffeur Driving", "GP"=>"General:Grocery Purchase", "MM"=>"General:Moving and Storage");
    $catNsubcat = explode(":", $categoryList[$category]);
?>

        <main class="main">
            <div class="container" id="profile">
                <div class="row">
                    <div>
                        <ol class="breadcrumb">
                          <!--<li><a href="#">Home</a></li>-->
                          <li><?=$catNsubcat[0]?></a></li>                                  <!-- need to work-->
                          <li class="active"><?=$catNsubcat[1]?></li>                          <!-- need to work-->
                        </ol>
                    </div>
                </div>
                <div class="row">

                  <?php
                      include 'leftbar.php';
                  ?>

                    <div class="col-md-10 profile-main">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="TextOnImg">
                                    <img class="img-responsive" src="img/<?=$param ?>.jpg" alt="profile-banner-img">
                                    <h1><?=$catNsubcat[1]?></h1>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">

                        <?php
                          while(list($id,$category,$name,$price,$in_stock,$description,$img) = $result->fetch_row()) { //fetch seller's information from sql "seller"
                        ?>
                            <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail">
                                    <a href = "profile.php?name=<?=$name?>"><img src="<?=$img ?>" alt='sellers'></a>
                                    <div class="caption">
                                        <h4 class="pull-right">$<?=$price?></h4>
                                        <h4><a href = "profile.php?name=<?=$name?>"><?=$name?></a></h4>
                                        <!--<p>Description this product</p>-->
                                    </div>
                                    <div class="ratings">
                                        <p class="pull-right">15 reviews</p>
                                        <p>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        <?php
                          }
                        ?>

                        </div>
                    </div>
                </div>
            </div>
        </main>


<?php
  include 'footer.php';
  require 'close.php';
?>
