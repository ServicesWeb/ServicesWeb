<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Services Website</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <!-- navbar -->
        <header class="container-fluid">
            <a href="#main" class="sr-only sr-only-focusable">Skip to main content</a>
            <nav class="navbar navbar-default navbar-fixed-top" role = "navigation">
                <div class="navbar-header">
                    <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#navbar-collapse">
                        <span class = "sr-only">Toggle navigation</span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo3.png" alt="logo"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class = "collapse navbar-collapse" id = "navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">
                              <?php
                                 if (empty($_COOKIE["userlogin"])) {
                                    echo "Your account";
                                 } else {
                                    printf("Hello, %s",$_COOKIE["userlogin"]);
                                 }
                              ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                              <?php
                                 if (empty($_COOKIE["userlogin"])) {
                              ?>
                                    <li><a href="signIn.php?show=1">Log In</a></li>
                                    <li><a href="signIn.php?show=2">Register</a></li>
                              <?php
                                  } else {
                              ?>
                                     <li><a href="logout.php">Logout</a></li>
                                     <li><a href="trackorder.php?username=<?=$_COOKIE["userlogin"]?>">Your Orders</a></li>
                              <?php
                                  }
                              ?>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">
                                Category
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">House<span class="caret"></span></a>
                                    <ul class="dropdown-menu sub-menu">
                                        <li><a href="list.php?category=HC">Cleaning</a></li>
                                        <li><a href="list.php?category=GD">Gardening</a></li>
                                        <li><a href="list.php?category=PB">Plumbing</a></li>
                                        <li><a href="list.php?category=RP">Repairing</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cooking<span class="caret"></span></a>
                                    <ul class="dropdown-menu sub-menu">
                                        <li><a href="list.php?category=FR">French Cuisine</a></li>
                                        <li><a href="list.php?category=CH">Chinese Cuisine</a></li>
                                        <li><a href="list.php?category=JA">Japanese Cuisine</a></li>
                                        <li><a href="list.php?category=IN">Indian Cuisine</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Tutoring<span class="caret"></span></a>
                                    <ul class="dropdown-menu sub-menu">
                                        <li><a href="list.php?category=SP">Speaking Spanish</a></li>
                                        <li><a href="list.php?category=SW">Swimming Lessons</a></li>
                                        <li><a href="list.php?category=DR">Driving Instruction</a></li>
                                        <li><a href="list.php?category=CO">Computer and Programming</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">General<span class="caret"></span></a>
                                    <ul class="dropdown-menu sub-menu">
                                        <li><a href="list.php?category=WD">Dog Walking</a></li>
                                        <li><a href="list.php?category=CD">Chauffeur Driving</a></li>
                                        <li><a href="list.php?category=GP">Grocery Purchase</a></li>
                                        <li><a href="list.php?category=MM">Moving and Storage</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-md hidden-sm"><a href="trackorder.php">Track Order</a></li>
                        <li class="hidden-md hidden-sm"><a href="help.php">Help</a></li>
                    </ul>

                    <!-- search form -->
                    <form class="navbar-form navbar-right" role="search" action="search.php">
                        <div class="container-fluid">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                            </div>
                            <input type="submit" value="Search" class="btn btn-default">
                        </div>
                    </form>

                    <!-- shopping cart -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="cart.php">
                                Cart
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
