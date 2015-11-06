<?php
/* Template Name: Home */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="intro min-height-100">
        <div class="container">
          <div class="valign-wrapper height-100">
            <div class="valign">
              <h1>JC launches JC(ACE)</h1>
              <span>The no.1 denim destination for a fashionforward lifestyle with the best brands first</span>
            </div>
          </div>
        </div>
        <div class="scroll" id="scroll-navigation"><a href="#profile"></a></div>
			</div>

      <section id="profile">
        <div class="profile min-height-100 container">
    			<?php while ( have_posts() ) : the_post(); ?>

    				<?php get_template_part( 'template-parts/content', 'page' ); ?>

    			<?php endwhile; // End of the loop. ?>
        </div>
      </section>

      <section class="brands container" id="brands">
        <h2>Explore our brands</h2>
          <div class="grid-wrap">
      			<?php
      				$args = array( 'post_type' => 'Brands', 'posts_per_page' => 10 );
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
            <strong>JC(ACE) Concept Store</strong>
            <ul>
              <li>Arenastaden 22</li>
              <li>187 23 Stockholm</li>
              <li>08-21 24 229</li>
              <li><a href="mailto:arenastaden@jc.se">arenastaden@jc.se</a></li>
            </ul>
            <strong>Opening hours</strong>
            <ul>
              <li>M-F: 10.00-20.00</li>
              <li>SA: 10.00-18.00</li>
              <li>SU: 11.00-16.00</li>
            </ul>
          </div>
          <div class="store-info">
            <strong>Get to the store by public transport</strong>
            <p>Subway station Solna Centrum or bus station Friends Arena</p>
            <p>
              <strong>Get to the store by car</strong><br>
              There are lots of parkings slots in connection to Friends Arena. Space can be limited on sport and show events at Friends Arena.
            </p>
          </div>
        </div>

      </section>

      <section id="map" class="map"></section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
