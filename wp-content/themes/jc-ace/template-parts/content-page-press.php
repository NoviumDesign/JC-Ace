<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jc-ace
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="press-header" style="background-image:url('<?= wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', false )[0] ?>')">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header>
 
  <div class="press-content container">
    <div class="press-text">
      <div class="entry-content">
        <?php the_content(); ?>
        <?php
          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jc-ace' ),
            'after'  => '</div>',
          ) );
        ?>
      </div><!-- .entry-content -->

      <!-- Logotype -->
      <?php 

        $logotype = get_field('logotype');

      if( !empty($logotype) ): ?>

        <a class="press-link" href="<?php echo $logotype['url']; ?>" alt="<?php echo $logotype['alt']; ?>">Logotype</a>

      <?php endif; ?>

      <!-- Brand images -->
      <?php 

        $images = get_field('images');

      if( !empty($images) ): ?>

        <a class="press-link" href="<?php echo $images['url']; ?>" alt="<?php echo $images['alt']; ?>">JC (ACE) Images</a>

      <?php endif; ?>

      <!-- Press release -->
      <?php 

        $release = get_field('press_release');

      if( !empty($release) ): ?>

        <a class="press-link" href="<?php echo $release['url']; ?>" alt="<?php echo $release['alt']; ?>">Press Release</a>

      <?php endif; ?>

      <footer class="entry-footer">
        <?php
          edit_post_link(
            sprintf(
              /* translators: %s: Name of current post */
              esc_html__( 'Edit %s', 'jc-ace' ),
              the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ),
            '<span class="edit-link">',
            '</span>'
          );
        ?>
      </footer><!-- .entry-footer -->
    </div>
  </div>
</article><!-- #post-## -->

