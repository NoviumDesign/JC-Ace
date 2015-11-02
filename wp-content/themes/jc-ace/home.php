<?php
/* Template Name: Home */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="intro min-height-100">
        <div class="valign-wrapper height-100">
          <div class="valign">
            <h1>JC launches JC(ACE)</h1>
          </div>
        </div>
			</div>

      <div class="profile min-height-100 container" id="profile">
        <div class="valign-wrapper min-height-100">
          <div class="valign">
      			<?php while ( have_posts() ) : the_post(); ?>

      				<?php get_template_part( 'template-parts/content', 'page' ); ?>

      			<?php endwhile; // End of the loop. ?>
          </div>
        </div>
      </div>

      <section class="brands container" id="brands">
        <h2>Explore our brands</h2>
          <div class="grid-wrap">
      			<?php
      				$args = array( 'post_type' => 'Brands', 'posts_per_page' => 10 );
      				$loop = new WP_Query( $args );
      				while ( $loop->have_posts() ) : $loop->the_post();
      			?>
      				<div class="brand" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>')">
                <a href="<?php the_permalink( $post->ID ); ?>">
                </a>
      				</div>

      			<?php endwhile; ?>
          </div>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
