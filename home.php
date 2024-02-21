<?php /* Template Name: Home */
  
  get_header();

  $fields = get_field('hero');
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section class="container-fluid hero-bg home-hero" style="background-image: url(<?php echo $fields['background_image']; ?>); position: relative;">
  <img src="<?php echo $fields["overlay"]; ?>" alt="" class="text-overlay">
  </section>
<?php endwhile; endif; ?>

<?php
  get_footer();
?>
