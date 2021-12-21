<?php /* Template Name: I Gabana */
  
  get_header();
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div class="container about c-margin">
    <div class="row c-margin">
      <div class="col-12 col-md-6 image-container">
        <img class="gabana-image" src="<?php echo get_template_directory_uri() .'/images/gabana-temp.png'; ?>" alt="">
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
          poster="/uploads/2021/12/Screenshot-2021-12-15-at-15.59.30.png"
          data-setup="{}"
        >
          <source src="/wp-content/uploads/2021/12/demo.mp4" type="video/mp4" />
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
        I Gabana lavorano con il cuore. Dalla storica Gabana Arredamenti, azienda con grande tradizione italiana di realizzazioni su misura, sentono l'esigenza di far nascere un nuovo soggetto, I Gabana, capace di interfacciarsi con i designar e progettisti più rappresentativi del mondo, utilizzando le mani ed il cuore per rendere unico e riconoscibile il progetto, facendo traspirare la forza, l'idea ed il carattere.
        </p>
      </div>
    </div>

    <div class="row c-margin">
      <div class="col-12 col-md-6 mb-3">
        <img src="http://placehold.it/600x600" alt="">
      </div>
      <div class="col-12 col-md-6 mb-3">
        <img src="http://placehold.it/600x600" alt="">
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <img src="http://placehold.it/1920x650" alt="">
  </div>

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
          poster="/uploads/2021/12/Screenshot-2021-12-15-at-15.59.30.png"
          data-setup="{}"
        >
          <source src="/wp-content/uploads/2021/12/demo.mp4" type="video/mp4" />
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
<?php endwhile; endif; ?>

<?php
  get_footer();
?>
