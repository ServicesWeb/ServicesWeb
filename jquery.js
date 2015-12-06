// function for coupon rotation in index.php
var swap = function() {
    $("#coupon li:last").hide().prependTo("#coupon").fadeIn(500);
}
window.setInterval(swap,3500);

// function for content show in sitemap.php page
$(document).ready(function() {
   $(".clickme").click(function(event){
      $(".target").toggle('slow');
   });
});

//  function for mouseover and mouseleave in profile.php page
$(document).ready(function(){
    $(".jsShow").mouseenter(function(){
         $("input").css("background-color", "#F0E68C");
    });
    $(".jsShow").mouseleave(function(){
         $("input").css("background-color", "white");
    });
});

//  function for content show in help.php page
$(document).ready(function(){
    $(".shop1").click(function(){
        $(".shop_help").slideToggle("slow");
    });
    $(".shop2").click(function(){
        $(".shop_help2").slideToggle("slow");
    });
    $(".shop3").click(function(){
        $(".shop_help3").slideToggle("slow");
    });
});
