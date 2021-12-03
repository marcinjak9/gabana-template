<?php /* Template Name: Materiali */
  
  get_header();
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <section class="container page-title">
    <div class="row text-center">
      <div class="col">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </section>

  <section class="container-fluid px-0">
    <video
      id="my-video"
      class="video-js video-cover vjs-big-play-centered"
      controls
      muted="false"
      preload="auto"
      width="640"
      height="264"
      poster="MY_VIDEO_POSTER.jpg"
      data-setup="{}"
    >
      <source src="https://www.dropbox.com/s/a64uwycjs7w3ocp/demo.mp4?raw=1" type="video/mp4" />
      <source src="https://www.dropbox.com/s/td7t1rkirm2n3iy/demo.webm?raw=1" type="video/webm" />
      <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to
        a web browser that
        <a href="https://videojs.com/html5-video-support/" target="_blank"
          >supports HTML5 video</a
        >
      </p>
    </video>
  </section>

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
            <a href="" class="slider-title selected" data-slide="0">I LEGNI</a>
            <a href="" class="slider-title" data-slide="1">GLI OTTONI</a>
            <a href="" class="slider-title" data-slide="2">IL CRISTALLO</a>
            <a href="" class="slider-title" data-slide="3">LA PIETRA</a>
            <a href="" class="slider-title" data-slide="4">LA PELLE</a>
            <a href="" class="slider-title" data-slide="5">IL BRONZO</a>
          </div>
          <!-- <div class="side-title">
            Side Title
          </div> -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <img src="https://source.unsplash.com/collection/1015577/1920x1080?w=1" alt="">
            </div>
            <div class="swiper-slide">
              <img src="https://source.unsplash.com/collection/1015577/1920x1080?w=222" alt="">
            </div>
            <div class="swiper-slide">
              <img src="https://source.unsplash.com/collection/1015577/1920x1080?w=3111" alt="">
            </div>
            <div class="swiper-slide">
              <img src="https://source.unsplash.com/collection/1015577/1920x1080?w=4" alt="">
            </div>
            <div class="swiper-slide">
              <img src="https://source.unsplash.com/collection/1015577/1920x1080?w=5" alt="">
            </div>
            <div class="swiper-slide">
              <img src="https://source.unsplash.com/collection/1015577/1920x1080?w=6" alt="">
            </div>
          </div>

          
          <!-- If we need pagination -->
  
          <!-- If we need navigation buttons -->
  
          <!-- If we need scrollbar -->
          <!-- <div class="swiper-scrollbar"></div> -->
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <!-- Slider main container -->
  </section>
<?php endwhile; endif; ?>

<?php
  get_footer();
?>
