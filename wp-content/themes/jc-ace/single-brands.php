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

        <?php
          $image = get_field('brand-top-image');
          $thumb = $image['sizes'][ 'brand_top' ];
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header min-height-100" style="background-image: url('<?php echo $thumb ?>')">
            <div class="container">
              <div class="valign-wrapper min-height-100">
                <div class="valign height-100">         
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

            <div class="single-brand-content container">

              <div class="brand-text">
                <?php the_content(); ?>
                <?php
                  wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jc-ace' ),
                    'after'  => '</div>',
                  ) );
                ?>
              </div>

              <div class="image-container">

                <!-- First brand image -->
                <?php 

                  $first_image = get_field('brand_image_1');

                if( !empty($first_image) ): ?>

                  <div class="image-column">
                    <img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>" />
                  </div>

                <?php endif; ?>

                <!-- second brand image -->
                <?php 

                  $second_image = get_field('brand_image_2');

                if( !empty($second_image) ): ?>

                  <div class="image-column">
                    <img src="<?php echo $second_image['url']; ?>" alt="<?php echo $second_image['alt']; ?>" />
                  </div>

                <?php endif; ?>

                <!-- Product grid -->
                <?php
                  $third_image = get_field('brand_image_3');

                  if( !empty($third_image) ): ?>

                  <div class="image-full-width">
                    <img src="<?php echo $third_image['url']; ?>" alt="<?php echo $third_image['alt']; ?>" />
                  </div>

                <?php endif; ?>

              </div>

            </div>

          </div><!-- .entry-content -->

        </article><!-- #post-## -->


      <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
