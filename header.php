<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gabana-template
 */

$logo = get_template_directory_uri(). '/images/logo@2x.png';
// if ()
if (get_page_template_slug() == 'home.php') {
	$logo = get_template_directory_uri(). '/images/logo-negative@2x.png';
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-blue'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gabana-template' ); ?></a>
<?php /*
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$gabana_template_description = get_bloginfo( 'description', 'display' );
			if ( $gabana_template_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $gabana_template_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'gabana-template' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
*/ ?>
<nav
	class="
		navbar navbar-expand-lg navbar-light
		bg-transparent
		justify-content-center
		nav-bg
		container
	"
>
	<div class="row">
		<?php /* echo str_replace('/', '', str_replace( home_url(), '', get_permalink($post->ID))); */ ?>
		<div class="d-flex flex-column align-items-center">
			<a class="navbar-brand" href="#">
				<img src="<?php echo $logo; ?>" alt="">
			</a>
			<button
				class="navbar-toggler"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#navbarNav"
				aria-controls="navbarNav"
				aria-expanded="false"
				aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav justify-content-between">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/">HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/materiali">MATERIALI</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/arredamenti">ARREDAMENTI</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/hotel">HOTEL</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/i-gabana">I GABANA</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/certificazioni">CERTIFICAZIONI</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/contatti">CONTATTTI</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>