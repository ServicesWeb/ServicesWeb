/*   method 1 for coupon rotation
$(document).ready(function() {
    var swapLast = function() {
        $("#coupon li:last").slideUp("slow", function() {
            $(this).remove();
            $("#coupon").prepend($(this));
            $(this).slideDown('slow', function() {
                swapLast();
            });
        });
    }
    swapLast();
});
*/

/*   method 2 for coupon rotation
function run() {
    var prev = $("#coupon li:first-child");
    $.unique(prev).each(function(i) {
      $(this).delay(i*600).slideUp(function() {
        $(this).appendTo(this.parentNode).slideDown();
      });
    });
}

window.setInterval(run,1000);
*/

//    method 3 for coupon rotation
var swap = function() {
    $("#coupon li:last").hide().prependTo("#coupon").fadeIn(500);
}
window.setInterval(swap,3500)
