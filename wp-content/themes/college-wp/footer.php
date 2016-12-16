<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон футера
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */

	wp_footer(); // Необходимо для нормальной работы плагинов
?>
<!-- BEGIN HEADER -->
<header class="header">
	<div class="wrapper clearfix">

		<div class="header_left">
			<div class="menu__burger"></div>
			<a href="/" class="header__logo"></a>
			<div class="header__slogan">фiнансово-правовий коледж</div>
		</div>
		<!-- header_left -->
		
		<div class="header_right">

			<div class="header_search">
				<?php get_search_form(); ?>
			</div>
			<!-- header_search -->

			<div class="header_menu clearfix">

				<div class="top_menu">
					<?php
						$args = array( 

						'menu_id'=>'top_menu',
						'theme_location'=>'top',
						'container'=>''

						);
						wp_nav_menu($args);
					?>
					<?php
//						$args = array( 
//
//						'menu_id'=>'top_menu_sub',
//						'theme_location'=>'top_bottom',
//						'container'=>''
//
//						);
//						wp_nav_menu($args);
					?>
				</div>
				<!-- top-menu -->

			</div>
			<!-- header_menu -->

		</div>
		<!-- header_right -->
		
	</div>
	<!-- wrapper -->
</header>
<!-- HEADER EOF   -->	

<!-- BEGIN FOOTER -->	
<footer class="footer">
	
	<div class="wrapper clearfix">
		
		<div class="footer_partners clearfix">
			<div class="footer_partners__title">Партнери:</div>
			<div class="footer_partners_items clearfix">
				<div class="footer_partners_item">
					<a href="" class="footer_partners_item_inner">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners_1.jpg" alt="">
					</a>
				</div>
				<div class="footer_partners_item">
					<a href="" class="footer_partners_item_inner">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners_2.jpg" alt="">
					</a>
				</div>
				<div class="footer_partners_item">
					<a href="" class="footer_partners_item_inner">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners_3.jpg" alt="">
					</a>
				</div>
				<div class="footer_partners_item">
					<a href="" class="footer_partners_item_inner">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners_4.jpg" alt="">
					</a>
				</div>
				<div class="footer_partners_item">
					<a href="" class="footer_partners_item_inner">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners_5.jpg" alt="">
					</a>
				</div>
				<div class="footer_partners_item">
					<a href="" class="footer_partners_item_inner">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners_6.jpg" alt="">
					</a>
				</div>
				<div class="footer_partners_item">
					<a href="" class="footer_partners_item_inner">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners_7.jpg" alt="">
					</a>
				</div>
				<div class="footer_partners_item">
					<a href="" class="footer_partners_item_inner">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners_8.jpg" alt="">
					</a>
				</div>
				<div class="footer_partners_item">
					<a href="" class="footer_partners_item_inner">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners_9.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
		<!-- footer_partners -->

		<div class="footer_left clearfix">
			<div class="footer_left_col _menu">
				<div class="footer_left__title">Головні розділи сайту:</div>
				<div class="footer_left_col_inner clearfix">
					<div class="footer_menu">
						<ul>
							<li><a href="">Головна</a></li>
							<li><a href="">Про коледж</a></li>
							<li><a href="">Новини</a></li>
							<li><a href="">Студенту</a></li>
							<li><a href="">Абітурієнту</a></li>
							<li><a href="">Публічна інформація</a></li>
						</ul>
					</div>
					<div class="footer_menu">
						<ul>
							<li><a href="">Розклад</a></li>
							<li><a href="">Бібліотека</a></li>
							<li><a href="">Правила прийому</a></li>
							<li><a href="">Фотогалерея</a></li>
							<li><a href="">Контакти</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- footer_left_col -->
			<div class="footer_left_col _contact">
				<div class="footer_contact_menu">
					<ul class="footer_contact_menu_list">
						<li class="_title">Адреса коледжу: </li>
						<li>Київ, вул. Пітерська, 5-а</li>
					</ul>
					<ul class="footer_contact_menu_list">
						<li class="_title">E-mail адміністрації: </li>
						<li><a href="mailto:f_p_college@meta.ua">f_p_college@meta.ua</a></li>
					</ul>
				</div>
				<!-- footer_contact_menu -->
				<div class="footer_shared">
					<div class="footer_shared__desc">
						Долучайтеся до наших 
						соціальних мереж:
					</div> 
					<ul class="social">
						<li class="fb"><a href="#"></a></li>
						<li class="vk"><a href="#"></a></li>
						<li class="gl"><a href="#"></a></li>
					</ul>
				</div>
			</div>
			<!-- footer_left_col -->
			
		</div>
		<!-- footer_left -->
	
	</div>	
	<!-- wrapper -->

</footer>
<!-- FOOTER EOF   -->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.min.js"></script>		
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.min.js" ></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js" ></script>

