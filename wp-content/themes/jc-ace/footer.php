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
      <div class="footer-navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
      </div>

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
      <div class="contact-information">
        <span>JC(ACE) Concept Store</span> <!-- Decide what heading to use later -->
        <ul>
          <li>Arenastaden 22</li>
          <li>187 23 Stockholm</li>
          <li>08-21 24 229</li>
          <li><a href="mailto:info@jc.se">info@jc.se</a></li>
        </ul>
      </div>
      <div class="copyright-information">
        <span>© JC(ACE) 2015. All rights reserved</span>
      </div>
    </div>

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
