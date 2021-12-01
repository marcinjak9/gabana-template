<?php /* Template Name: Home */
  
  get_header();
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <h2>hello</h2>
<?php endwhile; endif; ?>

<?php
  get_footer();
?>
