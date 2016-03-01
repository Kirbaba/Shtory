<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
	<!-- open .home-screen -->
	<div class="home-screen">
		<!-- open .header -->
		<header class="header">
			<!-- open .container -->
			<div class="container">
				<!-- open .row -->
				<div class="row">
					<!-- open .col-lg-4 col-md-4 col-sm-4 col-xs-12 -->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<!-- open .header__adress -->
						<div class="header__adress">
							<h4>ПРАКТИКА КОМФОРТА</h4>
							<p>г. Москва м. Румянцево, <br />Бизнес-парк "Румянцево»</p>
						</div>
						<!-- close .header__adress -->
					</div>
					<!-- close .col-lg-4 col-md-4 col-sm-4 col-xs-12 -->
					<!-- open .col-lg-4 col-md-4 col-sm-4 col-xs-12 -->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="" />
					</div>
					<!-- close .col-lg-4 col-md-4 col-sm-4 col-xs-12 -->
					<!-- open .col-lg-4 col-md-4 col-sm-4 col-xs-12 -->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<!-- open .header__phone -->
						<div class="header__phone">
							<h3><small>Бесплатная и быстрая консультация</small>
							+7 903 722 63 49</h3>
							<a href="#">ЗАКАЗАТЬ ЗВОНОК</a>
						</div>
						<!-- close .header__phone -->
					</div>
					<!-- close .col-lg-4 col-md-4 col-sm-4 col-xs-12 -->
				</div>
				<!-- close .row -->
			</div>
			<!-- close .container -->
		</header>
		<!-- close .header -->
		<home-slider></home-slider>
	</div>
	<!-- close .home-screen -->
    
<?php wp_footer(); ?>
</body>
</html>