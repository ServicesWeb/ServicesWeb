$(document).ready(function() {
   // function for content show in sitemap.php page
   $(".clickme").click(function(event){
      $(".target").toggle('slow');
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

   $(".FAQOrderInfo").click(function(){
     $(".box").slideToggle("slow");
     });

});


// Zhang Sen added
$(function() {
    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
