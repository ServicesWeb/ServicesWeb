<?php
    include 'header.php';
    require 'connection.php';
?>

<?php
    $sql = "SELECT * FROM product ORDER BY RAND() LIMIT 4"; // sql = from table "seller" and category = $param
    $result = $mysqli->query($sql); // error detection
    if(!$result){
        echo $mysqli->error;
    }
?>

        <main class="main">
            <!-- carousel -->
            <div id="carousel-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="banner"><img src="img/banner1.jpg" alt="Frist slide"></div>
                        <div class="carousel-caption">This Caption 1</div>
                    </div>
                    <div class="item">
                        <div class="banner"><img src=img/banner2.jpg alt="Second slide"></div>
                        <div class="carousel-caption">This Caption 2</div>
                    </div>
                    <div class="item">
                        <div class="banner"><img src=img/banner3.jpg alt="Third slide"></div>
                        <div class="carousel-caption">This Caption 3</div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <!-- deal -->
            <div class="deal">
                <div class="container">
                    <h2>
                        Today's star providers
                        <!--<a><small>Learn More</small></a>-->
                    </h2>
                    <div class="row">

                    <?php
                        while(list($id,$category,$name,$price,$in_stock,$description,$img) = $result->fetch_row()) { //fetch seller's information from sql "seller"
                    ?>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <a href = "profile.php?name=<?=$name?>"><img src="<?=$img ?>" alt="First thumbnail"></a>
                                    <div class="caption">
                                        <h3><a href = "profile.php?name=<?=$name?>"><?=$name?></a></h3>
                                        <!--<p>Deal's Content</p>-->
                                    </div>
                                </div>

                            </div>
                     <?php
                        }
                    ?>

                    </div>
                </div>
            </div>

            <!-- learn more -->
            <div class="learn-more">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Fast</h3>
                            <p>We guarantee to make the response in 3 hours after and provide 24-hour helpline.</p>
                            <p><a href="#">See how to facilitate your life by our service</a></p>
                        </div>
                        <div class="col-md-4">
                            <h3>Safety</h3>
                            <p>From Verified ID to our worldwide customer support team, we've got your back.</p>
                            <p><a href="#">Learn about trust at Service Website</a></p>
                        </div>
                        <div class="col-md-4">
                            <h3>Community</h3>
                            <p>All our service providers come from your own community.</p>
                            <p><a href="#">Learn more about your community.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<?php
    include 'footer.php';
    require 'close.php';
?>
