<html>
    <head>
        <meta charset="utf-8">
        <title>Vinkaiyang-Fenni Service Website</title>
        <link type="text/css" rel="stylesheet" href="main.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>    
    </head>
    <body onload="slideit()">
        <!-- this is headers beginning -->
        <div id="header">
            <a href="index.php"><img class="logo" src="img/logo.png" alt="logo"></a>
            <ul>
<<<<<<< Updated upstream
              <?php
                 if (empty($_COOKIE["userlogin"])) {
                 ?>
              <li><a href="login.php">Log In</a></li>
              <?php
                 } else {
                 printf("<li>Hello, %s</li>",$_COOKIE["userlogin"]);
                 echo "<li><a href=\"logout.php\">Logout</a></li>";
                 }
                 ?>
              <li><a href="search.php">Search</a></li>
              <li><a href="trackorder.php">Track Order</a></li>
              <li><a class="cart" href="cart.php"><img src="img/shopping-cart.png" /></a></li>
=======
                <li><a href="search.php">Search</a></li>
                <li><a href="login.php">Log In</a></li>
                <li><a href="trackorder.php">Track Order</a></li>
                <li><a class="cart" href="cart.php"><img src="img/shopping-cart.png" /></a></li>
>>>>>>> Stashed changes
            </ul>
        </div>

       <div id="menubar">
           <ul>
               <li><a href="index.php">HOME</a></li>
                        <li>House
                            <ul>
                                <li><a href="list.php?category=HC">House Cleaning</a></li>
                                <li><a href="list.php?category=GD">Gardening</a></li>
                                <li><a href="list.php?category=PB">Plumbing</a></li>
                                <li><a href="list.php?category=RP">Repairing</a></li>
                            </ul>
                        </li>
                        <li>Service
                            <ul>
                                <li><a href="list.php?category=WD">Walking Dog</a></li>
                                <li><a href="list.php?category=CD">Chauffeur Drive</a></li>
                                <li><a href="list.php?category=GP">Grocery Purchase</a></li>
                                <li><a href="list.php?category=MM">Move in &#47; Move out</a></li>
                            </ul>
                        </li>
                        <li>Cooking
                             <ul>
                                <li><a href="list.php?category=FR">French</a></li>
                                <li><a href="list.php?category=JA">Japanese</a></li>
                                <li><a href="list.php?category=CH">Chinese</a></li>
                                <li><a href="list.php?category=IN">Indian</a></li>
                            </ul>
                        </li>
                        <li>Tutor
                             <ul>
                                <li><a href="list.php?category=SP">Spanish</a></li>
                                <li><a href="list.php?category=SW">Swim</a></li>
                                <li><a href="list.php?category=DR">Drive</a></li>
                                <li><a href="list.php?category=CO">Computer</a></li>
                            </ul>
                        </li>
            </ul>
        </div>
        <!-- this is headers end -->
