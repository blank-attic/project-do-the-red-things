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
	<title>wordpress c'est de la merde</title>
</head>

<header>
	<div id="custom-bootstrap-menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><img class="logo" src="wp-content/themes/twentysixteen/DOTHEREDTHING_banner_black.png" alt=""></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-menubuilder">
				<ul class="nav navbar-nav navbar-right">
					<li><a id="fontnav" href="index.html">Actualités</a></li>
					<li><a id="fontnav" href="galerie.html">Galerie</a></li>
					<li><a id="fontnav" href="event.html">Évènements</a></li>
					<!-- <li><a id="fontnav" href="#">Shop ?</a></li> -->
					<li><a id="fontnav" href="qui.html">Qui Sommes Nous ?</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
