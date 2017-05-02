<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li></ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="wp-content/img/carousel/dtrt-petitemaison_13.jpg" alt="First slide">
							<div class="carousel-caption">
								<h3>First slide</h3>
								<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
							</div>
						</div>
						<div class="item">
							<img src="wp-content/img/carousel/dtrt-petitemaison_67.jpg" alt="Second slide">
							<div class="carousel-caption">
								<h3>Second slide</h3>
								<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
							</div>
						</div>
						<div class="item">
							<img src="wp-content/img/carousel/dtrt-petitemaison_06.jpg" alt="Third slide">
							<div class="carousel-caption">
								<h3>Third slide</h3>
								<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
						href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
					<div class="main-text hidden-xs">
						<div class="col-md-12 text-center">
							<h1 class="titleBig shadowTitre" style="text-shadow: 4px 2px 2px #000000">DO THE RED THINGS MOCK->UP</h1>
							<h3 class="shadowTitre">Il marche à peine et veut des bottes de sept lieues.</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="push"></div>

<h1>
<title>LE HEADDDDDD</title>
</h1>

		<div class="container">
			<div class="span8">
				<?php
				$lastposts = get_posts( array(
				    'posts_per_page' => 3
				) );

				if ( $lastposts ) {
				    foreach ( $lastposts as $post ) :
				        setup_postdata( $post ); ?>
				        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<?php the_excerpt(); ?>
				    <?php
				    endforeach;
				    wp_reset_postdata();
				} ?>

				<hr>
			</div>
		</div>

		<div class="container">
			<div class="span8">
				<?php
				$lastposts = get_posts( array(
						'posts_per_page' => 3
				) );

				if ( $lastposts ) {
						foreach ( $lastposts as $post ) :
								setup_postdata( $post ); ?>
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<?php the_excerpt(); ?>
						<?php
						endforeach;
						wp_reset_postdata();
				} ?>

				<hr>
			</div>
		</div>

		<div class="container">
			<div class="span8">
				<?php
				$lastposts = get_posts( array(
				    'posts_per_page' => 3
				) );

				if ( $lastposts ) {
				    foreach ( $lastposts as $post ) :
				        setup_postdata( $post ); ?>
				        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<?php the_excerpt(); ?>
				    <?php
				    endforeach;
				    wp_reset_postdata();
				} ?>

				<hr>
			</div>
		</div>

		<?php get_footer(); ?>
