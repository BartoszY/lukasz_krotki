<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<main class="main" id="top">

  <section class="portfolio-wrapper">
    <div class="container">
      <div class="portfolio-header">
        <h1 class="portfolio-title"><?php the_title() ?></h1>

        <button class="icon-button icon-button--top show-portfolio-description">Projekt info</button>
      </div>


      <article class="portfolio-description">
        <?php the_content() ?>
      </article>


      <?php $grid_items = get_field('grid_items'); if ($grid_items) : ?>
      <div class="portfolio-grid">
        <?php foreach ($grid_items as $item) : ?>

        <div class="portfolio-grid__item portfolio-grid__item--<?= $item['type'] ?> <?= $item['cols'] === 'two' ? 'portfolio-grid__item--two-column' : '' ?>">
          <?php if ($item['type'] === 'image') : ?>

            <img src="<?= $item['image']['sizes']['hd'] ?>" alt="<?= $item['image']['alt'] ?>">

          <?php elseif ($item['type'] === 'video') : ?>

            <video muted autoplay loop playsinline>
              <source src="<?= $item['video']['url'] ?>" type="<?= $item['video']['mime_type'] ?>">
              Your browser does not support the video tag.
            </video>

          <?php elseif ($item['type'] === 'text') : ?>

            <article><?= $item['text'] ?></article>

          <?php endif; ?>
        </div>

        <?php endforeach; ?>
      </div>
      <?php endif; ?>


      <?php
      $prev_post = get_previous_post();
      $next_post = get_next_post();
      ?>
      <div class="portfolio-nav">
        <div>
          <?php if ($prev_post): ?>
            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="icon-button icon-button--left">Previous</a>
          <?php endif; ?>
        </div>
        <div>
          <a href="#top" class="icon-button icon-button--top">Top</a>
        </div>
        <div>
          <?php if ($next_post): ?>
            <a href="<?php echo get_permalink($next_post->ID); ?>" class="icon-button icon-button--right">Next</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php endwhile; ?>

<?php get_footer(); ?>

