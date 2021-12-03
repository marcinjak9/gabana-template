<?php /* Template Name: I Gabana */
  
  get_header();
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <h2>I Gabana</h2>
<?php endwhile; endif; ?>

<?php
  get_footer();
?>
