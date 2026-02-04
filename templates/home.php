<?php
/**
 * Template Name: Home
 */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
<main class="main">

  <?php 
    $portfolio = get_field('portfolio');
    if ( $portfolio ) :
  ?>
  <section class="h-projects" id="projects">
    <div class="container">
      <?php foreach( $portfolio as $item ) : $img = get_field('home_image', $item['post']); ?>

      <div class="portfolio-teaser <?= $item['cols'] === 'two' ? 'portfolio-teaser--two-column' : '' ?>">
        <?php if ($img || has_post_thumbnail($item['post'])) : ?>
        <a href="<?php the_permalink($item['post']); ?>" class="portfolio-teaser__image">
          <?php echo wp_get_attachment_image( $img ? $img : get_post_thumbnail_id($item['post']), 'hd', false ); ?>
        </a>
        <?php endif; ?>

        <h3 class="portfolio-teaser__title">
          <a href="<?php the_permalink($item['post']); ?>"><?php echo get_the_title($item['post']); ?></a>
        </h3>
      </div>

      <?php endforeach; ?>
    </div>
  </section>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>


  <div class="container">
    <div class="portfolio-nav">
      <div>
      </div>
      <div>
        <a href="#top" class="icon-button icon-button--top">Top</a>
      </div>
      <div>
      </div>
    </div>
  </div>

  
</main>
<?php endwhile; ?>

<?php get_footer(); ?>