<?php
/* Template Name: Home */

get_header(); ?>

<?php
  $intro_image = get_field('home_first_image');
  $intro_thumb = $intro_image['sizes'][ 'fullscreen' ];

  $profile_image = get_field('home_second_image');
  $profile_thumb = $profile_image['sizes'][ 'fullscreen' ];
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="intro min-height-100" style="background-image: url('<?php echo $intro_thumb ?>')">
        <div class="container">
          <div class="valign-wrapper height-100">
            <div class="valign">
              <h1><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></h1>
              <span>Another<br> Contemporary Expression<sup>®</sup></span>
            </div>
          </div>
        </div>
        <div class="scroll" id="scroll-navigation"><a href="#profile"></a></div>
			</div>

      <section id="profile">
        <div class="profile min-height-100 container" style="background-image: url('<?php echo $profile_thumb ?>')">
    			<?php while ( have_posts() ) : the_post(); ?>

    				<?php get_template_part( 'template-parts/content', 'page' ); ?>

    			<?php endwhile; // End of the loop. ?>
        </div>
      </section>

      <section class="brands container" id="brands">
        <h2>Explore our brands</h2>
          <div class="grid-wrap">
      			<?php
      				$args = array( 'post_type' => 'Brands', 'posts_per_page' => 25, 'orderby' => 'menu_order' );
      				$loop = new WP_Query( $args );
      				while ( $loop->have_posts() ) : $loop->the_post();
      			?>
      				<a href="<?php the_permalink( $post->ID ); ?>" class="brand">
                <?php the_post_thumbnail( 'thumbnail' ); ?>
      				</a>

      			<?php endwhile; ?>
          </div>
      </section>

      <section class="stores container" id="stores">
        <h2>Store locator</h2>

        <div class="store-wrap">
          <div class="store-info">
            <strong>JC(ACE) Store</strong>
            <ul>
              <li>Mall of Scandinavia</li>
              <li>Stjärntorget 2</li>
              <li>169 79 Solna</li>
              <li>076 - 000 88 49</li>
              <li><a href="mailto:store110.mos@jc.se">store110.mos@jc.se</a></li>
            </ul>
            <strong>Opening hours</strong>
            <ul>
              <li>Mo-Su: 10am - 8pm</li>
            </ul>
          </div>
          <div class="store-info">
            <strong>Get to the store by public transport</strong>
            <p>Subway station Solna Centrum or light rail (Tvärbanan) Solna Station.</p>
            <p>
              <strong>Get to the store by car</strong><br>
              Find us on <a href="https://www.google.se/maps/place/Mall+of+Scandinavia/@59.370555,18.0012526,17z/data=!4m2!3m1!1s0x465f9dc632e678ff:0x4bb453ffd468743e" style="text-decoration:underline;">Google Maps</a>.<br>
              There are 3.700 parkings slots in connection to Mall Of Scandinavia.
            </p>
          </div>
        </div>

      </section>

      <section id="map" class="map"></section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
