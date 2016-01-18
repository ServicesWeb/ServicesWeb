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

    $categoryList = array("HC"=>"House:Cleaning", "GD"=>"House:Gardening", "PB"=>"House:Plumbing", "RP"=>"House:Repairing",
                          "FR"=>"Cooking:French Cuisine", "CH"=>"Cooking:Chinese Cuisine", "JA"=>"Cooking:Japanese Cuisine", "IN"=>"Cooking:Indian Cuisine",
                          "SP"=>"Tutoring:Speaking Spanish", "SW"=>"Tutoring:Swimming Lessons", "DR"=>"Tutoring:Driving Instruction", "CO"=>"Tutoring:Computer Programming",
                          "WD"=>"General:Dog Walking", "CD"=>"General:Chauffeur Driving", "GP"=>"General:Grocery Purchase", "MM"=>"General:Moving and Storage");
?>


<main class="main">
    <div class="container" id="profile">

        <?php
            while(list($id,$category,$name,$price,$in_stock,$description,$img) = $result->fetch_row()) {
                $catNsubcat = explode(":", $categoryList[$category]);
        ?>

        <div class="row">
          <div>
            <ol class="breadcrumb">
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
          <div class="col-md-10">
              <div class="row" id="provider-img-name">
                <div class="col-md-4" id="provider-img">
                  <img src="<?= $img?>" alt='sellers'>
                </div>

                <div class="col-md-4" id="provider-info">
                  <legend><h3><?= $name ?></h3></legend>
                  <h4>Price: <small>$<?= $price ?>/hour</small></h4>
                  <h4>Duration: <small>01/01/2015 - 01/30/2018</small></h4>
                </div>

                <div class="col-md-4" id="calendar">
                  <form action="cart.php" method="post">
                    <div class="shop-part">
                      <input type="hidden" name=id value="<?=$id?>">
                      <input type="hidden" name=name value="<?=$name?>">
                      <input type="hidden" name=price value="<?=$price?>">
                      <div id="addhidden"></div>

                      <div class="calendar">
                        <header>
                          <button type="button" class="monthButton btn btn-default" onclick="updateMonth(-1)">«</button>
                          <h2 id="monthYear"></h2>
                          <button type="button" class="monthButton btn btn-default" onclick="updateMonth(+1)">»</button>
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

                        <span>Start:</span>
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

                        <span>for:</span><input id="calendar-hour-input" type="text" name="durationHour" value="" size="1"><span>hrs</span>
                        <input type="reset button" class="resetButton btn btn-default" value="Reset" onclick="showCalendar()">
                        <input type="submit" class="jsShow btn btn-default" value="Add to Cart">
                      </div>
                    </div>
                  </form>

                </div>
              </div>

              <div class="row">
                <hr>
                <h5>Description:</h5>
                <p id="description"><?= $description ?></p>
                <hr>
              </div>

          </div>
        </div>
        <?php
           }
        ?>

    </div>   <!-- end of profile id -->
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="jsProfile.js"></script>

<?php
    include 'footer.php';
    require 'close.php';
?>
