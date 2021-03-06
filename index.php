﻿<!DOCTYPE html>
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
		<!-- open .home-slider -->
		<div class="home-slider">
			<!-- open .fotorama -->
			<div class="fotorama" data-width="100%" data-height="500" data-fit="cover" data-autoplay="false" data-loop="true" data-arrows="true">
				<?php echo do_shortcode('[slider]'); ?>
			</div>
			<!-- close .fotorama -->
		</div>
		<!-- close .home-slider -->
	</div>
	<!-- close .home-screen -->

	<!-- open .advantages -->
	<section class="advantages">
		<!-- open .container -->
		<div class="container">
			<!-- open .row -->
			<div class="row">
				<!-- open .block_title -->
				<h2 class="block_title">НАШИ ПРЕИМУЩЕСТВА<span class="title-separator"></span></h2>
				<!-- open .advantages__item -->
				<div class="advantages__item">
					<!-- open .advantages--thumb -->
					<div class="advantages__item--thumb">
						<img src="<?php bloginfo('template_directory'); ?>/img/adv_01.png" alt="" />
					</div>
					<!-- close .advantages--thumb -->
					<!-- open .advantages__desc -->
					<div class="advantages__item--desc">
						<p>Цены ниже, чем в Москве, — 
						производство находится в Подмосковье, 
						ткани закупаем оптом на склад.</p>
					</div>
					<!-- close .advantages__desc -->
				</div>
				<!-- close .advantages__item -->
				<!-- open .advantages__item -->
				<div class="advantages__item">
					<!-- open .advantages--thumb -->
					<div class="advantages__item--thumb">
						<img src="<?php bloginfo('template_directory'); ?>/img/adv_03.png" alt="" />
					</div>
					<!-- close .advantages--thumb -->
					<!-- open .advantages__desc -->
					<div class="advantages__item--desc">
						<p>Заключаем договор, где прописаны 
						материалы, цены, сроки. Вы получите 
						идеальные шторы — вовремя.</p>
					</div>
					<!-- close .advantages__desc -->
				</div>
				<!-- close .advantages__item -->
				<!-- open .advantages__item -->
				<div class="advantages__item">
					<!-- open .advantages--thumb -->
					<div class="advantages__item--thumb">
						<img src="<?php bloginfo('template_directory'); ?>/img/adv_06.png" alt="" />
					</div>
					<!-- close .advantages--thumb -->
					<!-- open .advantages__desc -->
					<div class="advantages__item--desc">
						<p>Большой выбор материалов — ткани 
						из Испании, Италии, Германии, Индии, 
						Турции, карнизы из Дании, Германии, 
						Индии, Турции, России. Нужной ткани 
						нет на складе? Закажем специально 
						для вас у поставщика!</p>
					</div>
					<!-- close .advantages__desc -->
				</div>
				<!-- close .advantages__item -->
				<!-- open .advantages__item -->
				<div class="advantages__item">
					<!-- open .advantages--thumb -->
					<div class="advantages__item--thumb">
						<img src="<?php bloginfo('template_directory'); ?>/img/adv_06.png" alt="" />
					</div>
					<!-- close .advantages--thumb -->
					<!-- open .advantages__desc -->
					<div class="advantages__item--desc">
						<p>“Одеваем” сложные окна — монтируем 
						карнизные системы для больших 
						пролетов и окон сложной формы.</p>
					</div>
					<!-- close .advantages__desc -->
				</div>
				<!-- close .advantages__item -->
				<!-- open .advantages__item -->
				<div class="advantages__item">
					<!-- open .advantages--thumb -->
					<div class="advantages__item--thumb">
						<img src="<?php bloginfo('template_directory'); ?>/img/adv_10.png" alt="" />
					</div>
					<!-- close .advantages--thumb -->
					<!-- open .advantages__desc -->
					<div class="advantages__item--desc">
						<p>Уже 10 лет делаем квартиры уютными, 
						а офисы презентабельными.</p>
					</div>
					<!-- close .advantages__desc -->
				</div>
				<!-- close .advantages__item -->
				<!-- open .advantages__item -->
				<div class="advantages__item">
					<!-- open .advantages--thumb -->
					<div class="advantages__item--thumb">
						<img src="<?php bloginfo('template_directory'); ?>/img/adv_10.png" alt="" />
					</div>
					<!-- close .advantages--thumb -->
					<!-- open .advantages__desc -->
					<div class="advantages__item--desc">
						<p>Срок выполнения 
						заказа - на ваших условиях.</p>
					</div>
					<!-- close .advantages__desc -->
				</div>
				<!-- close .advantages__item -->
				<!-- close .block_title -->
			</div>
			<!-- close .row -->
		</div>
		<!-- close .container -->
	</section>
	<!-- close .advantages -->

	<!-- open .portfolio -->
	<section class="portfolio">
		<!-- open .container -->
		<div class="container">
			<!-- open .row -->
			<div class="row">
				<!-- open .block_title -->
				<h2 class="block_title">ПОРТФОЛИО<span class="title-separator"></span></h2>
				<!-- close .block_title -->
				<!-- open .block_desc -->
				<h4 class="block_desc">Тысячи довольных клиентов по всему миру уже оценили качество и стиль Benone Alta Moda</h4>
				<!-- close .block_desc -->
				<?php echo do_shortcode('[portfolio]'); ?>
				<!-- СЮДА ВСТАВЛЯТЬ ССЫЛКУ НА АЛЬБОМЫ В ВК -->
				<a href="https://vk.com/album" class="portfolio--link" data-paged="1">СМОТРЕТЬ ЕЩЕ РАБОТЫ</a>
			</div>
			<!-- close .row -->
		</div>
		<!-- close .container -->
	</section>
	<!-- close .portfolio -->

	<!-- open .prices -->
	<section class="prices">
		<!-- open .conainer -->
		<div class="container">
			<!-- open .row -->
			<div class="row">
				<!-- open .block_title -->
				<h2 class="block_title">НАШИ ЦЕНЫ<span class="title-separator"></span></h2>
				<!-- close .block_title -->
				<!-- open .prices__wrap -->
				<div class="prices__wrap">
					<!-- open .prices__item -->
					<div class="prices__item">
						<!-- open .prices__item--img -->
						<div class="prices__item--img">
							<img src="<?php bloginfo('template_directory'); ?>/img/foto-5.jpg" alt="" />
							<!-- open .price__marker price__marker--new -->
							<div class="prices__marker">
								<img src="<?php bloginfo('template_directory'); ?>/img/new-marker.png" alt="" />
							</div>
							<!-- close .price__marker price__marker--new -->
						</div>
						<!-- close .prices__item--img -->
						<h4><span>ТКАНИ</span></h4>
						<h3>Цена: 25000 <i class="rub"></i></h3>
					</div>
					<!-- close .prices__item -->
					<!-- open .prices__item -->
					<div class="prices__item">
						<!-- open .prices__item--img -->
						<div class="prices__item--img">
							<img src="<?php bloginfo('template_directory'); ?>/img/foto-6.jpg" alt="" />
							<div class="prices__marker">
								<img src="<?php bloginfo('template_directory'); ?>/img/best.png" alt="" />
							</div>
						</div>
						<!-- close .prices__item--img -->
						<h4><span>ПОШИВ</span></h4>
						<h3>Цена: 25000 <i class="rub"></i></h3>
					</div>
					<!-- close .prices__item -->
					<!-- open .prices__item -->
					<div class="prices__item">
						<!-- open .prices__item--img -->
						<div class="prices__item--img">
							<img src="<?php bloginfo('template_directory'); ?>/img/foto-7.jpg" alt="" />
							<div class="prices__marker">
								<img src="<?php bloginfo('template_directory'); ?>/img/best.png" alt="" />
							</div>

						</div>
						<!-- close .prices__item--img -->
						<h4><span>КАРНИЗЫ</span></h4>
						<h3>Цена: 25000 <i class="rub"></i></h3>
					</div>
					<!-- close .prices__item -->
					<!-- open .prices__item -->
					<div class="prices__item">
						<!-- open .prices__item--img -->
						<div class="prices__item--img">
							<img src="<?php bloginfo('template_directory'); ?>/img/foto-8.jpg" alt="" />
							<div class="prices__marker">
								<img src="<?php bloginfo('template_directory'); ?>/img/best.png" alt="" />
							</div>

						</div>
						<!-- close .prices__item--img -->
						<h4><span>ЖАЛЮЗИ</span></h4>
						<h3>Цена: 25000 <i class="rub"></i></h3>
					</div>
					<!-- close .prices__item -->
					<!-- open .prices__item -->
					<div class="prices__item">
						<!-- open .prices__item--img -->
						<div class="prices__item--img">
							<img src="<?php bloginfo('template_directory'); ?>/img/foto-9.jpg" alt="" />
							<div class="prices__marker">
								<img src="<?php bloginfo('template_directory'); ?>/img/best.png" alt="" />
							</div>

						</div>
						<!-- close .prices__item--img -->
						<h4><span>РУЛОННЫЕ ШТОРЫ</span></h4>
						<h3>Цена: 25000 <i class="rub"></i></h3>
					</div>
					<!-- close .prices__item -->
				</div>
				<!-- close .prices__wrap -->
			</div>
			<!-- close .row -->
		</div>
		<!-- close .conainer -->
	</section>
	<!-- close .prices -->

	<!-- open .cooperation -->
	<section class="cooperation">
		<!-- open .container -->
		<div class="container">
			<!-- open .row -->
			<div class="row">
				<!-- open .block_title -->
				<h2 class="block_title--w">СОТРУДНИЧЕСТВО<span class="title-separator--w"></span></h2>
				<!-- close .block_title -->
				<div class="cooperation--icon">
					<img src="<?php bloginfo('template_directory'); ?>/img/icon.png" alt=""/>
				</div>
				<h3>Для дизайнеров интерьеров<i>Запросить прайс лист</i></h3>
				<a href="#"  data-toggle="modal" data-target="#myModal" class="cooperation--link js-modal" data-type="pricelist">ЗАПРОСИТЬ</a>
			</div>
			<!-- close .row -->
		</div>
		<!-- close .container -->
	</section>
	<!-- close .cooperation -->

	<!-- open .partners -->
	<section class="partners">
		<!-- open .container -->
		<div class="container">
			<!-- open .row -->
			<div class="row">
				<!-- open .block_title -->
				<h2 class="block_title">НАШИ ПАРТНЕРЫ<span class="title-separator"></span></h2>
				<!-- close .block_title -->
				<!-- open .partners__wrap -->
				<div class="partners__wrap">
					<div id="owl-demo" class="owl-carousel owl-theme">
						<?php echo do_shortcode('[partners]'); ?>
		    		</div>
		    		<!-- close #owl-demo -->
		    	</div>
				<!-- close .partners__wrap -->
			</div>
			<!-- close .row -->
		</div>
		<!-- close .container -->
	</section>
	<!-- close .partners -->

	<!-- open .consultation -->
	<section class="consultation">
		<!-- open .container -->
		<div class="container">
			<!-- open .row -->
			<div class="row">
				<div class="cooperation--icon">
					<img src="<?php bloginfo('template_directory'); ?>/img/telka.png" alt=""/>
				</div>
				<!-- open .block_title -->
				<h2 class="block_title">ЗАКАЗАТЬ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ<span class="title-separator"></span></h2>
				<!-- close .block_title -->
				<h3>Подзаголовок пишем текст тут можно в две строчки</h3>
				
			</div>
			<!-- close .row -->
			<!-- open .row -->
			<div class="row">
				<a href="#" data-toggle="modal" data-target="#myModal" class="portfolio--link js-modal" data-type="consultation">ЗАКАЗАТЬ</a>
			</div>
			<!-- close .row -->
		</div>
		<!-- close .container -->
	</section>
	<!-- close .consultation -->

	<!-- open .bonuses -->
	<section class="bonuses">
		<!-- open .container -->
		<div class="container">
			<!-- open .row -->
			<div class="row">
				<!-- open .block_title -->
				<h2 class="block_title">БОНУСЫ<span class="title-separator"></span></h2>
				<!-- close .block_title -->
				<!-- open .block_desc -->
				<h4 class="block_desc">Которые вы всегда получаете</h4>
				<!-- close .block_desc -->
				<!-- open .col-lg-4 col-md-4 col-sm-12 col-xs-12 -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<!-- open .bonuses__item -->
					<div class="bonuses__item">
						<!-- open .bonuses__item--icon -->
						<div class="bonuses__item--icon">
							<img src="<?php bloginfo('template_directory'); ?>/img/adv_01.png" alt="" />
						</div>
						<!-- close .bonuses__item--icon -->
						<!-- open .bonuses__item--desc -->
						<div class="bonuses__item--desc">
							<p>Текст — зафиксированная на каком-либо материальном носителе человеческая мысль; в общем плане связная и полная последовательность 
							символов. (В русском языке текст- несколько 
							предложений, связанных между собой по смыслу.)</p>
						</div>
						<!-- close .bonuses__item--desc -->
					</div>
					<!-- close .bonuses__item -->
				</div>
				<!-- close .col-lg-4 col-md-4 col-sm-12 col-xs-12 -->
				<!-- open .col-lg-4 col-md-4 col-sm-12 col-xs-12 -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<!-- open .bonuses__item -->
					<div class="bonuses__item">
						<!-- open .bonuses__item--icon -->
						<div class="bonuses__item--icon">
							<img src="<?php bloginfo('template_directory'); ?>/img/adv_06.png" alt="" />
						</div>
						<!-- close .bonuses__item--icon -->
						<!-- open .bonuses__item--desc -->
						<div class="bonuses__item--desc">
							<p>Текст — зафиксированная на каком-либо материальном носителе человеческая мысль; в общем плане связная и полная последовательность 
							символов. (В русском языке текст- несколько 
							предложений, связанных между собой по смыслу.)</p>
						</div>
						<!-- close .bonuses__item--desc -->
					</div>
					<!-- close .bonuses__item -->
				</div>
				<!-- close .col-lg-4 col-md-4 col-sm-12 col-xs-12 -->
				<!-- open .col-lg-4 col-md-4 col-sm-12 col-xs-12 -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<!-- open .bonuses__item -->
					<div class="bonuses__item">
						<!-- open .bonuses__item--icon -->
						<div class="bonuses__item--icon">
							<img src="<?php bloginfo('template_directory'); ?>/img/adv_03.png" alt="" />
						</div>
						<!-- close .bonuses__item--icon -->
						<!-- open .bonuses__item--desc -->
						<div class="bonuses__item--desc">
							<p>Текст — зафиксированная на каком-либо материальном носителе человеческая мысль; в общем плане связная и полная последовательность 
							символов. (В русском языке текст- несколько 
							предложений, связанных между собой по смыслу.)</p>
						</div>
						<!-- close .bonuses__item--desc -->
					</div>
					<!-- close .bonuses__item -->
				</div>
				<!-- close .col-lg-4 col-md-4 col-sm-12 col-xs-12 -->
			</div>
			<!-- close .row -->
		</div>
		<!-- close .container -->
	</section>
	<!-- close .bonuses -->

	<!-- open .video -->
	<section class="video">
		<!-- open .container -->
		<div class="container">
			<!-- open .row -->
			<div class="row">
				<!-- open .video__box -->
				<div class="video__box">
					<!-- СЮДА ВСТАВЛЯТЬ ССЫЛКУ НА ВИДЕО ЮТУБА -->
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/lF8byCyRJ2g" frameborder="0" allowfullscreen></iframe>
				</div>
				<!-- close .video__box -->
			</div>
			<!-- close .row -->
		</div>
		<!-- close .container -->
	</section>
	<!-- close .video -->

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
						<a href="<?php bloginfo('template_directory'); ?>/img/foto-11.jpg" class="contacts__photo"  data-lightbox="roadtrip">
							<img src="<?php bloginfo('template_directory'); ?>/img/foto-11.jpg" alt="" />
							<span class="contacts__photo--open">Увеличить </span>
						</a>
						<p>Фото 1</p>
					</div>
					<!-- close .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
					<!-- open .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<a href="<?php bloginfo('template_directory'); ?>/img/foto-10.jpg" class="contacts__photo"  data-lightbox="roadtrip">
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