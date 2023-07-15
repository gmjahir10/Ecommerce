<?php 
  include "header.php";
?>
    <style type="text/css">
      #map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}

    </style>
<section style="width:100%;">
  <div style="width:100%;margin: 0 auto;height: 170px;background: cadetblue;position: relative;">
    <div style="width: 100%;position:absolute;top: 20%;text-align: center;">
      <h2>Aboout Us</h2>
    </div>
  </div>
</section>
<section style="width:100%;">
  <div style="width:100%;margin: 0 auto;height: 170px;">
    <div style="width: 100%;text-align: center;">
      <h2>About Our Goals</h2>
      <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
    </div>
  </div>
</section>
<hr>
  <section>
    <h3 align="center">Our Location in Google Maps </h3>
    <!--The div element for the map -->
    <div id="map"></div>
  </section>
    
<footer style="text-align: center;background: antiquewhite;padding: 10px;width: 100%;">
  <p> Developed by : Jahir</p>
</footer>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL9obXAtsqCn-vykZShXB4uv348WQ0BD0&callback=initMap&libraries=&v=weekly"
      async defer
    ></script>
    <script type="text/javascript">
      // Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: 23.8103, lng:  90.4125 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: uluru,
  });
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}
    </script>
  </body>
</html>