<?php /* Template Name: Home */
  
  get_header();
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section class="container-fluid hero-bg home-hero" style="background-image: url(<?php echo get_template_directory_uri() . '/images/home.png'; ?>);">

  </section>
<?php endwhile; endif; ?>

<?php
  get_footer();
?>
