<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
`	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
`	<![endif]-->
	<?php wp_head(); ?>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.0.min.js" integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700,800" rel="stylesheet">
	<title>Do The Red Things</title>
</head>

<header>
	<div id="custom-bootstrap-menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="<?php bloginfo( 'url' ); ?>"><img class="img-responsive" src="wp-content/themes/twentysixteen/DOTHEREDTHING_1F211E ORIGINALE.png" alt=""></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-menubuilder">
				<ul class="nav navbar-nav navbar-right">
					<li><a id="fontnav" href="index.html">Actualités</a></li>
					<li><a id="fontnav" href="http://localhost/project-do-the-red-things/ressources/wordpress/index.php/galerie/">Galerie</a></li>
					<li><a id="fontnav" href="http://localhost/project-do-the-red-things/ressources/wordpress/index.php/calendar/calendrier/">Évènements</a></li>
					<li><a id="fontnav" href="#">Shop </a></li>
					<li><a id="fontnav" href="http://localhost/project-do-the-red-things/ressources/wordpress/index.php/qui-sommes-nous/">Qui Sommes Nous ?</a></li>
				</ul>
			</div>
		</div>
	</div>

	<?php
	/**
	 * The template for displaying pages
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages and that
	 * other "pages" on your WordPress site will use a different template.
	 *
	 * @package WordPress
	 * @subpackage Twenty_Sixteen
	 * @since Twenty Sixteen 1.0
	 */

	get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// End of the loop.
			endwhile;
			?>

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>


</header>
