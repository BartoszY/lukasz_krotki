<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
<main class="main">

  <section class="contact">
    <div class="container">
      <article>
        <?php the_content(); ?>
      </article>
    </div>
  </section>


</main>
<?php endwhile; ?>

<?php get_footer(); ?>