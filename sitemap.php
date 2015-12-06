<?php
    include 'header.php';
?>

<div id="helpdiv">
    <h1 class="clickme">Site Map<br /></h1>
           <ul class="target">
               <li><a href="index.php">HOME</a></li>
               <li>ABOUT US
                   <ul>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="sitemap.php">Site Map</a></li>
                    </ul>
               </li>
               <li>SERVICE
                   <ul>
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
                                <li><a href="list.php?category=MM">Move in &#124; Move out</a></li>
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
                </li>
               <li>User Interface
                    <ul>
                        <li><a href="signup.php">Sign Up</a></li>
                        <li><a href="login.php">Log In</a></li>
                        <li><a href="trackorder.php">Track Order</a></li>
                    </ul>
               </li>
               <li><a href="search.php">SEARCH</a></li>
               <li><a href="help.php">HELP</a></li>
            </ul>
</div>
<?php
    include 'foot.php';
?>
