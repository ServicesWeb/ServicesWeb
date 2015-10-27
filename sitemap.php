<?php
    include 'header.php';
?>

<div id="helpdiv">
    <h1>Site Map</h1>
           <ul>
               <li><a href="index.php">HOME</a></li>
               <li>ABOUT US
                   <ul>
                        <li>Company History</li>
                        <li>Special Offers</li>
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
                                <li><a href="list.php">Plumbing</a></li>
                                <li><a href="list.php">Repairing</a></li>
                            </ul>
                        </li>
                        <li>Service
                            <ul>
                                <li><a href="list.php">Walking Dog</a></li>
                                <li><a href="list.php">Chauffeur Drive</a></li>
                                <li><a href="list.php">Grocery Purchase</a></li>
                                <li><a href="list.php">Move in &#124; Move out</a></li>
                            </ul>
                        </li>
                        <li>Cooking
                             <ul>
                                <li><a href="list.php">French</a></li>
                                <li><a href="list.php">Japanese</a></li>
                                <li><a href="list.php">Chinese</a></li>
                                <li><a href="list.php">Indian</a></li>
                            </ul>
                        </li>
                        <li>Tutor
                             <ul>
                                <li><a href="list.php">Spanish</a></li>
                                <li><a href="list.php">Swim</a></li>
                                <li><a href="list.php">Drive</a></li>
                                <li><a href="list.php">Computer</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
               <li><a href="search.php">SEARCH</a></li>
               <li><a href="help.php">HELP</a></li>
                   <ul>
                        <li>FAQ</li>
                        <li>Rating System</li>
                        <li>Sitemap</li>
                        <li>Service Locations</li>
                    </ul>
            </ul>
</div>
<?php
    require 'foot.php';
?>
