<?php /* Template Name: Luxury */
  
  get_header();

  $galleryItems = get_field('gallery');
  $bg_image = get_field('bg_image');
  $quote = get_field('quote');
  // var_dump($galleryItems)

  // $galleryItems = array(
  //   array(
  //     "image" => "/images/arredamenti.png",
  //     "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique iusto dolore iure! Rem consequatur obcaecati ratione vero voluptates aliquid nulla, consequuntur id! Tempore tempora, molestias facere incidunt quasi exercitationem expedita?",
  //     "size" => "h-full",
  //     "col" => "col-md-12"
  //   ),
  //   array(
  //     "image" => "/images/arredamenti_2.png",
  //     "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique iusto dolore iure! Rem consequatur obcaecati ratione vero voluptates aliquid nulla, consequuntur id! Tempore tempora, molestias facere incidunt quasi exercitationem expedita?",
  //     "size" => "h-half",
  //     "col" => "col-md-12"
  //   ),
  //   array(
  //     "image" => "/images/arredamenti_3.png",
  //     "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique iusto dolore iure! Rem consequatur obcaecati ratione vero voluptates aliquid nulla, consequuntur id! Tempore tempora, molestias facere incidunt quasi exercitationem expedita?",
  //     "size" => "h-full",
  //     "col" => "col-md-6"
  //   ),
  //   array(
  //     "image" => "/images/arredamenti_4.png",
  //     "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique iusto dolore iure! Rem consequatur obcaecati ratione vero voluptates aliquid nulla, consequuntur id! Tempore tempora, molestias facere incidunt quasi exercitationem expedita?",
  //     "size" => "h-full",
  //     "col" => "col-md-6"
  //   ),
  //   array(
  //     "image" => "/images/arredamenti_5.png",
  //     "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique iusto dolore iure! Rem consequatur obcaecati ratione vero voluptates aliquid nulla, consequuntur id! Tempore tempora, molestias facere incidunt quasi exercitationem expedita?",
  //     "size" => "h-full",
  //     "col" => "col-md-12"
  //   ),
  // );
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php if ($bg_image): ?>
    <section class="container-fluid hero-bg overlay absolute-bg" style="background-image: url(<?php echo $bg_image; ?>);">
    </section>
  <?php endif; ?>

  <section class="container page-title <?php echo ($bg_image) ? 'contract-page' : ''; ?>">
    <div class="row text-center">
      <div class="col">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </section>

  <section class="container gallery">
    <div class="row">
    <?php foreach ($galleryItems as $g): ?>
        <div class="col-12 <?php echo $g["col"]  ?>">
          <div class="gallery-item <?php echo 'h-'.$g["size"]; ?>" style="background-image: url('<?php echo $g["image"]; ?>')">
            <a href="#"  class="info-box d-flex justify-content-center align-items-center">
              <span class="closed">INFO</span>
              <!-- <span class="open-box">
                <img src="/images/plus.png" alt="">
              </span> -->
              <?php get_template_part('template-parts/plus-icon'); ?>
              <?php get_template_part('template-parts/minus-icon'); ?>
              <span class="content"><?php echo $g['text'] ?></span>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <?php if (get_field("quote")): ?>
    <section class="container quote">
      <div class="row justify-content-center">
        <div class="col-7 d-flex flex-column justify-content-center align-items-center">
          <div class="divider"></div>
          <p class="text-center">
            <?php echo get_field('quote'); ?>
          </p>
          <div class="divider"></div>
        </div>
      </div>
    </section>
<?php endif; endwhile; endif; ?>

<?php
  get_footer();
?>
