document.body.onload = function(){
  slideit();
}

//  function for banner rotation on index.php
var slideimages = ["img/banner1.jpg", "img/banner2.jpg", "img/banner3.jpg"];     // array to remember the paths
var step = 0;          //variable that will increment through the images
function slideit(){
   if (!document.images || !document.getElementById("slide"))      //if browser does not support the image object, exit.
      { return; }
   document.getElementById("slide").src = slideimages[step];
   if (step < 2)
      { step++; }
   else
      { step = 0; }
   setTimeout("slideit()",3000);         //call function "slideit()" every 3 seconds
}


// function for coupon rotation in index.php
var swap = function() {
    $("#coupon li:last").hide().prependTo("#coupon").fadeIn(500);
}
window.setInterval(swap,3500);
