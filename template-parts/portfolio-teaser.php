<div class="portfolio-teaser">
  <?php if (has_post_thumbnail()) : ?>
  <a href="<?php the_permalink(); ?>" class="portfolio-teaser__image">
    <?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'medium', false ); ?>
  </a>
  <?php endif; ?>

  <h3 class="portfolio-teaser__title">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h3>
</div>