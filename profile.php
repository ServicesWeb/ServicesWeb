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

    list($id,$category,$name,$price,$in_stock,$description,$img) = $result->fetch_row();    // ? potential bug ?

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
                          <li><?=$catNsubcat[0]?></a></li>
                          <li><?=$catNsubcat[1]?></li>
                          <li class="active"><?=$name?></li>

                </ol>
            </div>
        </div>

        <div class="row">
        <?php
          include 'leftbar.php';
        ?>

        <div class="col-md-10 item-main">
              <?php
                  //while(list($id,$category,$name,$price,$in_stock,$description,$img) = $result->fetch_row();) {   //? need or not ? has problem here, but not in list.php
              ?>
              <div id="providerImgName">
                    <img src="<?= $img?>" alt='sellers'>
                    <h1><?= $name ?></h1>
                    <h4>Price: $<?= $price ?>/hour</h4>
                    <h4>Duration: 01/01/2015 - 01/10/2015</h4>
              </div>


                <form action="cart.php" method="post">
                  <div class="shopPart">
                    <input type="hidden" name=id value="<?=$id?>">
                    <input type="hidden" name=name value="<?=$name?>">
                    <input type="hidden" name=price value="<?=$price?>">
                    <div id="addhidden"></div>

                    <div class="calendar">
                      <header>
                        <button type="button" class="monthButton" onclick="updateMonth(-1)">«</button>
                        <h2 id="monthYear"></h2>
                        <button type="button" class="monthButton" onclick="updateMonth(+1)">»</button>
                      </header>

                      <table id="calendarShow">
                        <tr>
                          <th>S</th>
                          <th>M</th>
                          <th>T</th>
                          <th>W</th>
                          <th>Th</th>
                          <th>F</th>
                          <th>S</th>
                        </tr>
                      </table>

                      <span>start:</span>
                      <select name="startHour">
                        <option value="7:00">7:00</option>
                        <option value="8:00">8:00</option>
                        <option value="9:00">9:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                        <option value="20:00">20:00</option>
                      </select>

                      <span>for:</span><input type="text" name="durationHour" value="" size="1"><span>hrs</span>
                      <input type="reset" class="resetButton" value="reset" onclick="showCalendar()">
                      <input type="submit" class="jsShow" value="add to cart">
                    </div>

                  </div>
                </form>

                <div  class="sellerDescription" class="row">
                  <span>Description:</span>
                  <p id="description"><?= $description ?></p>
                  <button id="showMore" onclick="showMore()">show More</button><br />
                </div>
                <!--<div class="evaluation" class="row"><span>Evaluation</span><br /></div>-->

                <?php
                   //}
                ?>

      </div>

  </div>

</div>   <!-- end of profile id -->
</main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="jsProfile.js"></script>

<?php
    include 'footer.php';
    require 'close.php';
?>
