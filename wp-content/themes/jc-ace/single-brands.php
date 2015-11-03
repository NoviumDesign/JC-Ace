<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jc-ace
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header min-height-100" style="background-image: url('<?php echo get_field( "brand-top-image" ); ?>')">
						<div class="container">
			        <div class="valign-wrapper min-height-100">
			          <div class="valign">					
									<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
									<?php
										edit_post_link(
											sprintf(
												/* translators: %s: Name of current post */
												esc_html__( 'Edit this brand %s', 'jc-ace' ),
												the_title( '<span class="screen-reader-text">"', '"</span>', false )
											),
											'<span class="edit-link">',
											'</span>'
										);
									?>
								</div>
							</div>
			        <div class="brand-intro">
				      	<?php the_excerpt(); ?> 
			        </div>
						</div>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<div class="first-row">
							<div class="first-box">
							</div>
							<div class="second-box">
							</div>
						</div>

						<div class="image-grid">
							<?php the_content(); ?>
						</div>

						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jc-ace' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
