<?php
/*
Template Name: Главная
*/
?>
<?php get_header();?> 
<body onload="initialize()" class="main-page loaded"> 
	<div class="global_bg"></div>
	
	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->
		<div class="content">

			<div class="main_slider">
				<?php echo do_shortcode("[rev_slider test_psevdonim]"); ?>
			</div>
			<!-- main_slider -->

			<div class="main_news">

				<div class="wrapper">
						
					<h2 class="c-title">Новини</h2>

					<div class="main_news_inner clearfix">

						<div class="main_news_posts">
							<div class="main_news_items clearfix">
								
								<?php
								$n=3;
								$recent = new WP_Query("cat=$id&showposts=$n");
								while($recent->have_posts()) : $recent->the_post(); ?>
								<div class="main_news_item <?php echo (get_post_meta($post->ID, 'Важная новость! Вставьте слово - active', true)); ?>">
									<a href="<?php the_permalink() ?>" class="main_news_item_inner">
										<div class="main_news_item_media">
											<?php the_post_thumbnail( $size, $attr );?>
										</div>
										<div class="main_news_item_info">
											<div class="main_news_item_info_inner">
												<div class="main_news_item__date"><?php the_time('j F, Y'); ?></div>
												<div class="main_news_item__name"><?php the_title(); ?></div>
												<div class="main_news_item__desc"><?php the_excerpt(); ?></div>
												<div class="button _center _min">Докладніше</div>
											</div>
										</div>
									</a>
								</div>
								<?php endwhile; ?>
							</div>
							<!-- main_news_items -->

						</div>
						<!-- main_news_posts -->
						<div class="main_news_subsride">
							<div class="main_news_subsride_inner">
								<div class="main_news_subsride__name">Отримуйте новини першими</div>
								<div class="main_news_subsride__desc">
									укажіть адресу електронної скрині та отримуйте новини Коледжу з перших вуст
								</div>
								<input type="text" value="" placeholder="Ваш  e-mail" class="main_news_subsride__field">
								<div class="button _center _min">Підписатись</div>
							</div>
						</div>
						<!-- main_news_subsride -->

					</div>
					<!-- main_news_inner -->
					<a href="" class="navigation _left"></a>
					<a href="" class="navigation _right"></a>
				</div>
				<!-- wrapper -->

			</div>
			<!-- main_news -->

			<div class="doing">

				<div class="doing__line"></div>

				<div class="wrapper">

					<div class="doing_inner clearfix">

						<div class="doing_left">

							<div class="c-title _lite">Події коледжу</div>

							<?php include"templates/calendar.php"; ?>

						</div>
						<!-- doing_left -->

						<div class="doing_right">

							<div class="doing_right__title">1 подiя</div>
							
							<div class="doing_right_inner clearfix">
								
								<div class="doing_right_media">
									<img src="<?php echo get_template_directory_uri(); ?>/img/doing_img.jpg" alt="">
								</div>

								<div class="doing_right_info">

									<div class="doing_right__date">09 лис 2016 - 25 лис 2016</div>

									<div class="doing_right__desc">
										Всеукраїнська науково-практична конференція
										«Тенденції розвитку науки трудового права та права соціального забезпечення»
									</div>

									<a href="" class="button _left _min">Докладніше</a>

								</div>
								<!-- doing_right_info -->
								<a href="" class="navigation _min _left"></a>
								<a href="" class="navigation _min _right"></a>
							</div>
							<!-- doing_right_inner -->

						</div>
						<!-- doing_right -->

					</div>
					<!-- doing_inner -->

				</div>
				<!-- wrapper -->

			</div>
			<!-- doing -->

			<div class="photogallery">
				<div class="wrapper">
					<h2 class="c-title">Фотогалерея</h2>

					<div class="photogallery_inner">
						<?php echo do_shortcode('[UGML id=60]'); ?>
					</div>
					<!-- photogallery_inner -->

					<a href="" class="button _center _min">Всі світлини</a>
				</div>
				

			</div>
			<!-- photogallery -->

		</div>		
		<!-- CONTENT EOF   -->

		<?php get_footer(); // Подключаем футер ?>

	</div>		
	<!--main wrapper-->

	<div class="icon-load"></div>		

</body>
</html>

