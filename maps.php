<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 200px;  
        width: 100%;  
       }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

function initMap() {

  var uluru = {lat: -23.5522818, lng: -46.6599397};

  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 17, center: uluru});
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4Ei2N1tYFqXZ9VyjKGkqAjlILKf-VzQQ&callback=initMap">
    </script>
  </body>
</html>