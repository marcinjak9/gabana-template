<?php /* Template Name: Certificazioni */
  
  get_header();
  $image = get_template_directory_uri() . '/images/certificato.png';
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section class="container page-title">
    <div class="row text-center">
      <div class="col">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
    </section>

    <section class="container certificati-container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-4">
        <div class="doc-overlay">
          <a class="popup-link" href="<?php echo $image; ?>">
            <img src="<?php echo $image; ?>" alt="">
            <span class="zoom">+</span>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="doc-overlay">
          <a class="popup-link" href="<?php echo $image; ?>">
            <img src="<?php echo $image; ?>" alt="">
            <span class="zoom">+</span>
          </a>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php
  get_footer();
?>
