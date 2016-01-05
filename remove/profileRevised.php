<?php
    include 'header.php';
?>

        <main class="main">
            <div class="container" id="profile">
                <div class="row">
                    <div>
                        <ol class="breadcrumb">
                          <li><a href="#">Home</a></li>
                          <li><a href="#">House</a></li>
                          <li>Cleaning</li>
                          <li class="active">AAA Cleaning</li>
                        </ol>
                    </div>
                </div>
                <div class="row">

                  <?php
                      include 'leftbar.php';
                  ?>
                  
                    <div class="col-md-10 item-main">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="http://placehold.it/250x200" alt="shop item picture">
                            </div>
                            <div class="col-md-6">
                                <h4>Item Name</h4>
                                <h4>Price: $40</h4>
                                <h4>Duration: 01/01/2015 - 01/10/2015</h4>


                            </div>
                        <div class="row">Item Description</div>
                        <div class="row">Related Products</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php
            include 'footer.php';
        ?>
