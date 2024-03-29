<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gabana-template
 */

$fields = get_fields('option');
$phone = $fields["telefono"];
$fax = $fields["fax"];
$sito = $fields["sito"];
$facebook = $fields["facebook"];
$linkedin = $fields["linkedin"];
$instagram = $fields["instagram"];
?>

<footer class="container-fluid">
  <div class="row socials">
    <div class="col text-center">
      <a class="icon" href="<?php echo $facebook; ?>">
        <i class="fa-brands fa-facebook-f"></i>
      </a>
      <a class="icon" href="<?php echo $instagram; ?>">
        <i class="fa-brands fa-instagram"></i>
      </a>
      <a class="icon" href="<?php echo $linkedin; ?>">
        <i class="fa-brands fa-linkedin-in"></i>
      </a>
    </div>
  </div>
      <div class="row">
        <div class="col text-center">
          <p class="title"><?php echo $fields["titolo"]; ?></p>
          <p>
            <a href="https://goo.gl/maps/1pQDkif2FTqe8vwp9" target="_blank">
              <?php echo $fields["indirizzo"] ?>
            </a>
          </p>
          <p>
            tel. <a href="tel:<?php echo $phone; ?>"><?php echo $phone;?></a> \ fax <?php echo $fax; ?> \ <?php echo $sito; ?>
          </p>
          <div class="privacy-container">
            <a href="#">Privacy Policy</a>
            <a href="#">Cookie policy</a>
          </div>
        </div>
      </div>

    </footer>
<?php wp_footer(); ?>

</body>
</html>
