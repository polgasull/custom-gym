<?php

function custom_location_shortcode(){
  $location = get_field('location');
  
  ?>
    <div id="map"></div>
    <div class="location">
      <input type="hidden" id="lat" value="<?php echo $location['lat']; ?>">
      <input type="hidden" id="lng" value="<?php echo $location['lng']; ?>">
      <input type="hidden" id="address" value="<?php echo $location['address']; ?>">
    </div>
  <?php
  
}
add_shortcode( 'map', 'custom_location_shortcode' );