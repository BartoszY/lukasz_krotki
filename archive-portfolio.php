<?php get_header(); ?>

<main class="main">
  
  <div class="container">
    <div class="portfolio-grid">
      <?php while ( have_posts() ) : the_post(); ?>

      <div class="portfolio-teaser">
        <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="portfolio-teaser__image">
          <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>">
        </a>
        <?php endif; ?>

        <h3 class="portfolio-teaser__title">
          <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
        </h3>
      </div>

      <?php endwhile; ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>