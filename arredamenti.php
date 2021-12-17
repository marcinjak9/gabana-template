<?php /* Template Name: Arredamenti */
  
  get_header();

  $galleryItems = array(
    array(
      "image" => "/images/arredamenti.png",
      "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique iusto dolore iure! Rem consequatur obcaecati ratione vero voluptates aliquid nulla, consequuntur id! Tempore tempora, molestias facere incidunt quasi exercitationem expedita?",
      "size" => "h-full",
      "col" => "col-md-12"
    ),
    array(
      "image" => "/images/arredamenti_2.png",
      "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique iusto dolore iure! Rem consequatur obcaecati ratione vero voluptates aliquid nulla, consequuntur id! Tempore tempora, molestias facere incidunt quasi exercitationem expedita?",
      "size" => "h-half",
      "col" => "col-md-12"
    ),
    array(
      "image" => "/images/arredamenti_3.png",
      "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique iusto dolore iure! Rem consequatur obcaecati ratione vero voluptates aliquid nulla, consequuntur id! Tempore tempora, molestias facere incidunt quasi exercitationem expedita?",
      "size" => "h-full",
      "col" => "col-md-6"
    ),
    array(
      "image" => "/images/arredamenti_4.png",
      "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique iusto dolore iure! Rem consequatur obcaecati ratione vero voluptates aliquid nulla, consequuntur id! Tempore tempora, molestias facere incidunt quasi exercitationem expedita?",
      "size" => "h-full",
      "col" => "col-md-6"
    ),
    array(
      "image" => "/images/arredamenti_5.png",
      "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique iusto dolore iure! Rem consequatur obcaecati ratione vero voluptates aliquid nulla, consequuntur id! Tempore tempora, molestias facere incidunt quasi exercitationem expedita?",
      "size" => "h-full",
      "col" => "col-md-12"
    ),
  );
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section class="container page-title">
    <div class="row text-center">
      <div class="col">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </section>

  <section class="container gallery">
    <div class="row">
      <?php foreach ($galleryItems as $g): ?>
        <div class="col-12 <?php echo $g["col"] ?>">
          <div class="gallery-item <?php echo $g["size"]; ?>" style="background-image: url('<?php echo get_template_directory_uri(). $g["image"]; ?>')">
            <a href="#"  class="info-box d-flex justify-content-center align-items-center">
              <span class="closed">INFO</span>
              <!-- <span class="open-box">
                <img src="/images/plus.png" alt="">
              </span> -->
              <?php get_template_part('template-parts/plus-icon'); ?>
              <?php get_template_part('template-parts/minus-icon'); ?>
              <span class="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique iusto dolore iure! Rem consequatur obcaecati ratione vero voluptates aliquid nulla, consequuntur id! Tempore tempora, molestias facere incidunt quasi exercitationem expedita?</span>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="container quote">
    <div class="row justify-content-center">
      <div class="col-7 d-flex flex-column justify-content-center align-items-center">
        <img src="<?php echo get_template_directory_uri(). '/images/decoration-up@2x.png'; ?>" alt="">
        <p class="text-center text-white">Ogni arredamento è una storia, ogni storia ha i suoi protagonisti, Gabana unterpreta mettendo “il cuore” in ogni idea, ogni progetto, trasformandolo in realtà</p>
        <img src="<?php echo get_template_directory_uri(). '/images/decoration-down@2x.png'; ?>" alt="">
      </div>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php
  get_footer();
?>
