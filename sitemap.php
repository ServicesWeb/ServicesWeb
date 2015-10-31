<?php
    include 'header.php';
?>

<div id="helpdiv">
    <h1>Site Map</h1>
           <ul>
               <li><a href="index.php">HOME</a></li>
               <li>ABOUT US
                   <ul>
                        <li><a href="contactus.php">Company History</a></li>
                        <li><a href="contactus.php">Special Offers</a></li>
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
               <li><a href="search.php">SEARCH</a></li>
               <li><a href="help.php">HELP</a></li>
                   <ul>
                        <li><a href="help.php">FAQ</a></li>
                        <li><a href="help.php">Rating System</a></li>
                        <li><a href="sitemap.php">Sitemap</a></li>
                        <li><a href="help.php">Service Locations</a></li>
                    </ul>
            </ul>
</div>
<?php
    require 'foot.php';
?>
