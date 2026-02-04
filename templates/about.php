<?php
/**
 * Template Name: About
 */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
<main class="main">

  <?php $big_text = get_field('big_text'); if ($big_text) : ?>
  <section class="a-big-text">
    <div class="container">
      <div class="a-big-text__content">
        <?php echo $big_text ?>
      </div>
    </div>
  </section>
  <?php endif; ?>


  <?php $text = get_field('text'); ?>
  <?php $image = get_field('image'); ?>
  <?php if ($text && $image) : ?>
  <section class="a-twi">
    <div class="container">
      <?php echo wp_get_attachment_image($image, 'medium', false, array('class' => 'a-twi__image')); ?>

      <article class="a-twi__content">
        <?php echo $text ?>
      </article>
    </div>
  </section>
  <?php endif; ?>

</main>
<?php endwhile; ?>

<?php get_footer(); ?>