<?php /* Template Name: Materiali */
  
  get_header();

  $video = get_field('video');
  $cover = get_field('cover_video');
  $gallery = get_field('galleria');
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <section class="container page-title">
    <div class="row text-center">
      <div class="col">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </section>

  <?php if ($video): ?>
  <section class="container-fluid px-0">
    <video
      id="my-video"
      class="video-js video-cover vjs-big-play-centered"
      controls
      muted="false"
      preload="auto"
      width="640"
      height="264"
      poster="<?php echo $cover; ?>"
      data-setup="{}"
    >
      <source src="<?php echo $video; ?>" type="video/mp4" />
      <!-- <source src="https://www.dropbox.com/s/td7t1rkirm2n3iy/demo.webm?raw=1" type="video/webm" /> -->
      <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to
        a web browser that
        <a href="https://videojs.com/html5-video-support/" target="_blank"
          >supports HTML5 video</a
        >
      </p>
    </video>
  </section>
  <?php endif; ?>

  <?php if( have_rows('galleria') ): ?>
    <section class="container">
      <div class="row justify-content-center">
        <?php 
          while( have_rows('galleria') ) : the_row(); 
          $image = get_sub_field('immagine');
          $title = get_sub_field('titolo');
          $text = get_sub_field('text');
        ?>
          <div class="card-image">
            <div class="img-container">
              <img src="<?php echo $image; ?>" alt="">
              <div class="overlay">
                <p><?php echo $text; ?></p>
              </div>
            </div>
            <div class="side-title">
                <?php echo $title; ?>
              </div>
          </div>
        <?php endwhile; ?>
      </div>

    </section>
  <?php /*
  <section class="container slider-container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-11" style="position: relative">
        <div class="swiper">
          <div class="swiper-navigation d-none d-lg-block">
            <div class="swiper-button swiper-button-prev"></div>
            <div class="swiper-button swiper-button-next"></div>
          </div>

          <!-- Additional required wrapper -->
          <div class="slider-nav d-flex justify-content-around">
            <?php 
              while( have_rows('galleria') ) : the_row(); 
              $image = get_sub_field('immagine');
              $title = get_sub_field('titolo');
            ?>
              <a href="" class="slider-title" data-slide="<?php echo get_row_index() - 1; ?>"><?php echo $title; ?></a>
            <?php endwhile; ?>
          </div>
          <div class="side-title">
            Side Title
          </div>
          <div class="swiper-wrapper">
            <!-- Slides -->
            <?php 
              while( have_rows('galleria') ) : the_row(); 
              $image = get_sub_field('immagine');
              $title = get_sub_field('titolo');
            ?>
              <div class="swiper-slide">
                <img src="<?php echo $image; ?>" alt="">
              </div>
            <?php endwhile; ?>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <!-- Slider main container -->
  <?php */ ?>
  </section>
  <?php endif; ?>
<?php endwhile; endif; ?>

<?php
  get_footer();
?>
