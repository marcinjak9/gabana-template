<?php /* Template Name: I Gabana */
  
  get_header();
  $header_image = get_field('header_image');
  $mosaic = get_field('mosaic');
  $video_right = get_field('video_right');
  $text = get_field('text');
  $video_bottom = get_field('video_bottom');
  $timeline_title = get_field('timeline_title');
  $timeline = get_field('timeline');
  $certificati = get_field('certificati');
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<section class="container page-title">
    <div class="row text-center">
      <div class="col">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <div class="col">
        <img src="<?php echo $header_image; ?>" alt="" class="img-fluid" style="min-height: 200px;">
      </div>
    </div>
  </div>
  


  <div class="container about c-margin">
    <div class="row c-margin">
      <div class="col-12 col-md-6 image-container">
        <img class="gabana-image" src="<?php echo $mosaic; ?>" alt="">
      </div>
      <div class="col-12 col-md-6">
        <video
          id="my-video"
          class="video-js video-cover vjs-big-play-centered"
          controls
          muted="false"
          preload="auto"
          width="640"
          height="264"
          poster="http://157.230.115.37/wp-content/uploads/2021/12/Rettangolo-15@2x.png"
          data-setup="{}"
        >
          <source src="<?php echo $video_right; ?>" type="video/mp4" />
          <!-- <source src="https://www.dropbox.com/s/td7t1rkirm2n3iy/demo.webm?raw=1" type="video/webm" /> -->
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to
            a web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank"
              >supports HTML5 video</a
            >
          </p>
        </video>

        <p>
          <?php echo $text; ?>
        </p>
      </div>
    </div>

    <!-- <div class="row c-margin">
      <div class="col-12 col-md-6 mb-3 w-full">
        <img src="http://placehold.it/600x600" alt="" style="width: 100%">
      </div>
      <div class="col-12 col-md-6 mb-3 w-full">
        <img src="http://placehold.it/600x600" alt="" style="width: 100%">
      </div>
    </div> -->
  </div>

  <!-- <div class="container-fluid">
    <img src="http://placehold.it/1920x650" alt="">
  </div> -->

  <div class="container c-margin">
    <div class="row">
      <div class="col">
        <video
          id="my-video"
          class="video-js video-cover vjs-big-play-centered wide-video"
          controls
          muted="false"
          preload="auto"
          width="640"
          height="700px"
          poster="http://157.230.115.37/wp-content/uploads/2021/12/Rettangolo-15@2x.png"
          data-setup="{}"
        >
          <source src="<?php echo $video_bottom; ?>" type="video/mp4" />
          <!-- <source src="https://www.dropbox.com/s/td7t1rkirm2n3iy/demo.webm?raw=1" type="video/webm" /> -->
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to
            a web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank"
              >supports HTML5 video</a
            >
          </p>
        </video>
      </div>
    </div>
  </div>

  <section class="container page-title">
    <div class="row text-center">
      <div class="col">
        <h2><?php echo $timeline_title; ?></h2>
      </div>
    </div>
  </section>
  
  <section class="container timeline">
    <div class="row">
      <?php foreach($timeline as $t): ?>
        <div class="col-4 col-md-6 timeline-item item-left"><?php echo $t["date"]; ?></div>
        <div class="col-6 col-md-4 timeline-item border-timeline"><?php echo $t["text"]; ?></div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="container page-title">
    <div class="row text-center">
      <div class="col">
        <h2>Certificazioni</h2>
      </div>
    </div>
    </section>

    <section class="container certificati-container">
    <div class="row justify-content-center">
      <?php foreach ($certificati as $c): ?>
        <div class="col-12 col-md-4">
          <div class="doc-overlay">
            <a class="popup-link" href="<?php echo $c['image']; ?>">
              <img src="<?php echo $c['image']; ?>" alt="">
              <span class="zoom">+</span>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

<?php endwhile; endif; ?>

<?php
  get_footer();
?>
