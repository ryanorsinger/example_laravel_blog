<html>
<head>
  <style type="text/css">
  #map-canvas {
    width: 320px;
    height: 480px;
  }
  </style>
</head>
<body>
  <!-- div to hold map -->
  <div id="map-canvas"></div>

  <!-- Load the Google Maps API [DON'T FORGET TO USE A KEY] -->
  <script src="https://maps.googleapis.com/maps/api/js?key={{$_ENV['GOOGLE_MAPS_API_KEY']}}"></script>

  <!-- Script to show address on map -->
  <script type="text/javascript">
  // Set our address to geocode
  var address = '112 E Pecan St, San Antonio, TX, 78205';

  // Init geocoder object
  var geocoder = new google.maps.Geocoder();

  // Geocode our address
  geocoder.geocode( { 'address': address}, function(results, status) {
    console.log(status);
    // Check for a successful result
    if (status == google.maps.GeocoderStatus.OK) {
      // Set our map options
      var mapOptions = {
        // Set the zoom level
        zoom: 18,
        // This sets the center of the map at our location
        center: results[0].geometry.location,
          // Show this map in satellite view
          mapTypeId: google.maps.MapTypeId.SATELLITE
      }
      // Render the map
      var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    } else {
      // Show an error message with the status if our request fails
      alert("Geocoding was not successful - STATUS: " + status);
    }
  });
  </script>
</body>
