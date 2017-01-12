<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.6700, -73.9400), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{"elementType":"labels","stylers":[{"visibility":"off"},{"color":"#f49f53"}]},{"featureType":"landscape","stylers":[{"color":"#f9ddc5"},{"lightness":-7}]},{"featureType":"road","stylers":[{"color":"#813033"},{"lightness":43}]},{"featureType":"poi.business","stylers":[{"color":"#645c20"},{"lightness":38}]},{"featureType":"water","stylers":[{"color":"#1994bf"},{"saturation":-69},{"gamma":0.99},{"lightness":43}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#f19f53"},{"weight":1.3},{"visibility":"on"},{"lightness":16}]},{"featureType":"poi.business"},{"featureType":"poi.park","stylers":[{"color":"#645c20"},{"lightness":39}]},{"featureType":"poi.school","stylers":[{"color":"#a95521"},{"lightness":35}]},{},{"featureType":"poi.medical","elementType":"geometry.fill","stylers":[{"color":"#813033"},{"lightness":38},{"visibility":"off"}]},{},{},{},{},{},{},{},{},{},{},{},{"elementType":"labels"},{"featureType":"poi.sports_complex","stylers":[{"color":"#9e5916"},{"lightness":32}]},{},{"featureType":"poi.government","stylers":[{"color":"#9e5916"},{"lightness":46}]},{"featureType":"transit.station","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","stylers":[{"color":"#813033"},{"lightness":22}]},{"featureType":"transit","stylers":[{"lightness":38}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#f19f53"},{"lightness":-10}]},{},{},{}]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
            title: 'Snazzy!'
        });
    }
</script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6RBGsMwfPAurrtxE5tER8-wnNodYj67Q&callback=initMap"></script>
<div class="contact">
  <h2 id="con-h2">Contact Us</h2>

<div class="cont-main">
  <div class="cont-txt">
    <p>
      Website : <a href="https://www.ecocampersia.com" target="_blank">www.ecocampershia.com</a>

    </p>
    <p>
      Address : every where

    </p>

    <p>
      <img src="img/envelope.svg" class="x-logo"/>

        <a href="mailto: Info@ecocampersia.com"> Info@ecocampersia.com</a>

    </p>
    <p>
      <img src="img/phone.svg" class='x-logo' />

        <a href="tel:+982126150992">+982126150992</a>

    </p>
    <p>
      <img src="img/telegram.svg" class="x-logo">
      <a href="http://telegram.me/ArshiaMassoudi">Telegram us!</a>
    </p>
    <p>
      <a href="https://www.instagram.com/ecocampersia/" target="_blank"><img src="img/instagram.svg" class="x-logo" id="insta-logo"/></a><a href="https://www.instagram.com/ecocampersia/"> @ecocampersia</a>

    </p>
  </div>
  <div class="location">
    <div id="map"></div>

  </div>
</div>
<div class="dokmeh">

  <p>
    © Copyright 2015. All Rights Reserved.  Another Creation by<img src="img/dokmeh-logo.svg" id="dokmeh-logo"/>
  </p>

</div>

  </div>
