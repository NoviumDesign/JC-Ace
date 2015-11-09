<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jc-ace
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="footer-top container">
      <div class="footer-logo">
        <?php if ( get_header_image() ) : ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
          </a>
        <?php else : ?>
          <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php endif; // End header image check. ?>
      </div>
    </div>

    <div class="footer-bottom container">
      <div class="footer-content">
        <div class="contact-information">
          <strong>JC(ACE) Store</strong>
          <ul>
            <li>Mall of Scandinavia</li>
            <li>Stjärntorget 2</li>
            <li>169 79 Solna</li>
            <li>+46 (0) 8-586 230 00</li>
            <li><a href="mailto:mallofscandinavia@jcace.se">mallofscandinavia@jcace.se</a></li>
          </ul>
        </div>
        <div class="footer-navigation" id="footer-navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </div>
        <div class="copyright-information">
          <span>© JC(ACE) 2015. All rights reserved</span>
        </div>
      </div>
    </div>

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<?php if ( is_front_page() ) { ?>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8aEFRNO2XESRykRoVgK6wy1b-ZTP9Sw8&sensor=false"></script>
  <script type="text/javascript">
    (function() {
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
            var isDraggable = w > 580 ? true : false;
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 15,
                scrollwheel: false,
                draggable: isDraggable,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(59.3840636, 17.9653219),

                disableDefaultUI: true,

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(59.3840636, 17.9653219),
                map: map,
                title: 'JC Ace'
            });
        }
    })();
  </script>
<?php } ?>

</body>
</html>
