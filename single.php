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
		<header class="header" >
			<!-- open .container -->
			<div class="container">
				<!-- open .row -->
				<div class="row">
					<!-- open .col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 -->
					<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<!-- open .row -->
						<div class="row">
							<!-- open .col-lg-4 col-md-4 col-sm-4 col-xs-12 -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<!-- open .header__adress -->
								<div class="header__adress">
									<h4>ПРАКТИКА КОМФОРТА</h4>
									<p><?php echo get_theme_mod('address_textbox'); ?></p>
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
										<?php echo get_theme_mod('phone_textbox'); ?></h3>
									<a href="#nowhere" class="js-modal" data-toggle="modal" data-target="#myModal" data-type="callback">ЗАКАЗАТЬ ЗВОНОК</a>
								</div>
								<!-- close .header__phone -->
							</div>
							<!-- close .col-lg-4 col-md-4 col-sm-4 col-xs-12 -->
						</div>
						<!-- close .row -->
					</div>
					<!-- close .col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 -->
					
				</div>
				<!-- close .row -->
			</div>
			<!-- close .container -->
		</header>
		<!-- close .header -->
		<div class="home-slider">

		</div>
	</div>
	<section class="advantages">
		<div class="container">
			<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2 class="block_title"><?php the_title(); ?><span class="title-separator"></span></h2>
					<p><?php the_content(); ?></p>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- open .contacts -->
	<section class="contacts">
		<!-- open .container -->
		<div class="container">
			<!-- open .row -->
			<div class="row">
				<!-- open .block_title -->
				<h2 class="block_title">СХЕМА ПРОЕЗДА<span class="title-separator"></span></h2>
				<!-- close .block_title -->
				<!-- open .col-lg-5 col-md-5 col-sm-12 col-xs-12 -->
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<!-- open .contacts__form -->
					<div class="contacts__form">
						<h3>Форма обратной связи</h3>
						<input type="text" name="contacts__form--name" class="contacts__form--inp" placeholder="Имя"/>
						<input type="email" name="contacts__form--email" class="contacts__form--inp" placeholder="Email"/>
						<input type="tel" name="contacts__form--tel" class="contacts__form--inp" placeholder="Телефон"/>
						<textarea name="contacts__form--text" class="contacts__form--text" placeholder="Ваше сообщение"></textarea>
						<input type="submit" class="contacts__form--sub js-send" value="ОТПРАВИТЬ"/>
					</div>
					<!-- close .contacts__form -->
				</div>
				<!-- close .col-lg-5 col-md-5 col-sm-12 col-xs-12 -->
				<!-- open .col-lg-5 col-md-5 col-sm-12 col-xs-12 -->
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<h3>Форма обратной связи</h3>
					<!-- open .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<a href="#" class="contacts__photo">
							<img src="<?php bloginfo('template_directory'); ?>/img/foto-11.jpg" alt="" />
							<span class="contacts__photo--open">Увеличить </span>
						</a>
						<p>Фото 1</p>
					</div>
					<!-- close .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
					<!-- open .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<a href="#" class="contacts__photo">
							<img src="<?php bloginfo('template_directory'); ?>/img/foto-10.jpg" alt="" />
							<span class="contacts__photo--open">Увеличить </span>
						</a>
						<p>Фото 1</p>
					</div>
					<!-- close .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
				</div>
				<!-- close .col-lg-5 col-md-5 col-sm-12 col-xs-12 -->
			</div>
			<!-- close .row -->
		</div>
		<!-- close .container -->
		
	</section>
	<!-- close .contacts -->

	<!-- open .map -->
	<section class="map">
		<!-- open #map -->
		<div id="map"></div>
		<!-- close #map -->
		<!-- open .map__contacts -->
		<div class="map__contacts">
			<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="" />
			<p class="map__contacts--adress"><?php echo get_theme_mod('address_textbox'); ?></p>
			<p class="map__contacts--phone"><?php echo get_theme_mod('phone_textbox'); ?></p>
			<p class="map__contacts--mail"><?php echo get_theme_mod('mail_textbox'); ?></p>
		</div>
		<!-- close .map__contacts -->			
	</section>
	<!-- close .map -->

	<!-- open .footer container -->
	<footer class="footer">
		<!-- open .container -->
		<div class="container">
			<!-- open .row -->
			<div class="row">
				<!-- open .col-lg-5 col-md-5 col-sm-12 col-xs-12 -->
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<h4>COPYRIGHT © 2016. SHTORI RIGHTS RESERVED  </h4>
				</div>
				<!-- close .col-lg-5 col-md-5 col-sm-12 col-xs-12 -->
				<!-- open .col-lg-5 col-md-5 col-sm-12 col-xs-12 -->
				<div class="col-lg-5 col-md-5 col-lg-offset-2 col-md-offset-2 col-sm-12 col-xs-12">
					<div class="footer__soc">
						<a href="<?php echo get_theme_mod('fb_textbox'); ?>"><i class="fa fa-facebook"></i>FACEBOOK</a>
						<a href="<?php echo get_theme_mod('vk_textbox'); ?>"><i class="fa fa-vk"></i>VKONTAKTE</a>
						<a href="<?php echo get_theme_mod('inst_textbox'); ?>"><i class="fa fa-instagram"></i>INSTAGRAM</a>
					</div>
					
				</div>
				<!-- close .col-lg-5 col-md-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 -->
			</div>
			<!-- close .row -->
		</div>
		<!-- close .container -->
		
	</footer>
	<!-- close .footer container -->

	 <!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-body">
		    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			     <!-- open .contacts__form -->
				<div class="contacts__form">
					<h3>Оставте информацию о себе</h3>
					<input type="text" name="modal--name" class="contacts__form--inp" placeholder="Имя"/>					
					<input type="tel" name="modal--tel" class="contacts__form--inp" placeholder="Телефон"/>
					<input type="hidden" name="modal--type" class="contacts__form--inp"/>
					<textarea name="modal--text"class="contacts__form--text" placeholder="Ваше сообщение"></textarea>
					<input type="submit" class="contacts__form--sub js-modal-send" value="ОТПРАВИТЬ"/>
				</div>
				<!-- close .contacts__form -->
	        
	      </div>	     
	    </div>
	  </div>
	</div>
    
<?php wp_footer(); ?>
</body>
</html>