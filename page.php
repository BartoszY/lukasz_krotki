<?php get_header(); ?>

<main class="main">
<?php while ( have_posts() ) : the_post(); ?>

  <?php $title = get_the_title(); ?>

  <section class="page-content">
    <div class="container">
      <article class="page-content__text">
        <h1><?php echo esc_html($title); ?></h1>

        <?php the_content() ?>
      </article>
    </div>
  </section>

<?php endwhile; ?>
</main>

<?php get_footer(); ?>