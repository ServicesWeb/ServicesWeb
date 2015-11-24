<?php
    include 'header.php';
?>
    <script type="text/javascript">
var map;

    function initMap() {
  var myLatLng = {lat: 37.349556,, lng:  -121.939535};

  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    scrollwheel: false,
    zoom: 4
  });

  // Create a marker and set its position.
  var marker = new google.maps.Marker({
    map: map,
    position: myLatLng,
    title: 'Hello World!'
  });
}
</script>  
   <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9HcuKsUeJsaK36Up5l7B20Z5wJkjwd-Y&callback=initMap">
    </script>
<div id="searchdiv" >
 <div id="map"></div>

</div>
<?php
    require 'foot.php';
?>
