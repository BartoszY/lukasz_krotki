<?php get_header(); ?>

<main class="main">
  <section class="error404">
    <div class="container text-center">
        <h3 class="heading heading--xl">404</h3>
        <p><?= __('Page not found', 'bosma') ?></p>
        <a href="<?= home_url() ?>" class="button"><?= __('Return to homepage', 'bosma') ?></a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>