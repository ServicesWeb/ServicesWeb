// function for coupon rotation in index.php
var swap = function() {
    $("#coupon li:last").hide().prependTo("#coupon").fadeIn(500);
}
window.setInterval(swap,3500);


$(document).ready(function() {
   // function for content show in sitemap.php page
   $(".clickme").click(function(event){
      $(".target").toggle('slow');
   });

   //  function for mouseover and mouseleave in profile.php page
   $(".jsShow").mouseenter(function(){
        $(".jsShow").css("background-color", "#F0E68C");
   });
   $(".jsShow").mouseleave(function(){
        $(".jsShow").css("background-color", "white");
   });

   //  function for content show in help.php page
   $(".shop1").click(function(){
       $(".shop_help").slideToggle("slow");
   });
   $(".shop2").click(function(){
       $(".shop_help2").slideToggle("slow");
   });
   $(".shop3").click(function(){
       $(".shop_help3").slideToggle("slow");
   });

   // function for category list in list.php
   $("#manu1C").click(function(){
       $("#manu1").slideToggle("slow");
   });
});
