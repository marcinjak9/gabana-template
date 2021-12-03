<?php /* Template Name: Contatti */
  
  get_header();
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section class="container quote">
    <div class="row justify-content-center">
      <div class="col-10 d-flex flex-column justify-content-center align-items-center">
        <img src="<?php echo get_template_directory_uri(). '/images/decoration-up@2x.png'; ?>" alt="">
        <p class="text-center text-white">
          Via Piave n. 4
          <br>
          Frazione Carzago
          <br>
          25080 Calvagese della Riviera - Italia
          <br>
          <br>
          Contatti Tel. 
          <br>
          0039 - 030601208 
          <br>
          Fax. 0039 - 0306800854
          <br>
          Mail: Informazioni / Amministrazione / Ufficio tecnico / Commerciale
        </p>
        <img src="<?php echo get_template_directory_uri(). '/images/decoration-down@2x.png'; ?>" alt="">
      </div>
    </div>
  </section>

  <section class="container contact">
    <div class="row">
      <h3>CONTATTACI</h3>
      <div class="col-12 col-md-6">
        <div class="form-floating mb-4">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">NOME</label>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="form-floating mb-4">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">COGNOME</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating mb-4">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">INDIRIZZO EMAIL</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating mb-4">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          <label for="floatingTextarea2">MESSAGGIO</label>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php
  get_footer();
?>
