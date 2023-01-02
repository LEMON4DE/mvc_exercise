<?php
    $title = 'View Map';
    ob_start();
?>
<ul>
    <li><a href="index.php?action=home">Home</a></li>
    <li><a href="index.php?action=save">Save Places</a></li>
    <li><a href="index.php?action=list">List of Places</a></li>
</ul>
  <div id="map"></div>

  <!-- 
    The `defer` attribute causes the callback to execute after the full HTML
    document has been parsed. For non-blocking uses, avoiding race conditions,
    and consistent behavior across browsers, consider loading using Promises
    with https://www.npmjs.com/package/@googlemaps/js-api-loader.
  -->
  <script
    async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkkQ7ppb6I76nMzr73Ee1heLnglIO9Fs0&callback=initMap&v=weekly"
  ></script>
  <script src="./public/map.js" defer></script>
<?php
  $html = ob_get_clean();
  include_once 'template.php';
?>
