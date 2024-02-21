<?php /* Template Name: Servizi */
  
  $image = get_template_directory_uri();
  get_header();

  $items = get_field('items');
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section class="container page-title">
    <div class="row text-center">
      <div class="col">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
    </section>

  </section>
  <section class="container servizi">
    <?php foreach ($items as $item): ?>
      <img src="<?php echo $item["image"]; ?>" alt="" class="img-fluid">
      <div class="row pt-5">
        <div class="col-12 text-center">
          <h2><?php echo $item["title"]; ?></h2>
          <p><?php echo $item["text"]; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
    
  </section>
<?php endwhile; endif; ?>

<?php
  get_footer();
?>
