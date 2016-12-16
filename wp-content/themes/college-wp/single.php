<?php get_header();?> 
<body onload="initialize()" class="main-page loaded"> 
	<div class="global_bg"></div>
	
	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->
		<div class="content">
			<?php setPostViews(get_the_ID()); ?><!--подсчитываем количество просмотров статьи-->
			<div class="page_def_head">
				<div class="wrapper">
					<div class="page_def_head_info">
						<div class="page_def_head_info_min__title">Title eng</div>
						<h1 class="page_def_head_info__title"><?php wp_title("", true); ?></h1>
						<div class="breadcrumb">
							<?php the_breadcrumb(); ?>
						</div>
					</div>
					<!-- page_def_head_info	-->
				</div>
				<!--wrapper-->
			</div>
			<!--page_def_head-->
			
			<div class="page_def_content">
				<div class="wrapper clearfix">
					<div class="blog_column _left">
						<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?>
							<div class="main_news_item news_item _one">
								<div class="main_news_item_inner news_item_inner">
									<div class="main_news_item_media news_item_media">
										<?php the_post_thumbnail( $size, $attr );?>
									</div>
									<div class="main_news_item_info news_item_info">
										<div class="main_news_item_info_inner news_item_info_inner">
											<div class="main_news_item__date"><?php the_time('j F, Y'); ?></div>
											<div class="main_news_item__name"><?php the_title(); ?></div>
											<div class="main_news_item__desc"><?php the_excerpt(); ?></div>
										</div>
									</div>
								</div>
								<?php //echo 'Рубрики: '; the_category( ' | ' ); // Выводим категории поста ?>
								<?php //the_tags( 'Тэги: ', ' | ', '' ); // Выводим тэги(метки) поста ?>
							</div>
						<?php endwhile; ?>
						<?php //previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); // Ссылка на предидущий пост?>
						<?php// next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); // Ссылка на следующий пост?> 
						<?php// comments_template( '', true ); // Комментарии ?>
					</div>
					<!--column _left-->
					
					<div class="blog_column _right">
					
						<div class="blog_inner">
						
							<div class="articles-right">

								<div class="articles-right-delivery">
									<div class="articles-right-delivery-head clearfix">
										<i class="articles-right-delivery__icon"></i>
										<div class="articles-right-delivery__desc">
											Укажіть адресу електронної скрині та отримуйте новини Коледжу з перших вуст
										</div>
									</div>
									<!-- head -->
									<div class="articles-right-delivery-form">
										<form action="">
											<div class="form-item"><input type="text" value="" placeholder="E-mail" class="form__field field_effect"></div>
											<div class="form-item"><button type="submit" class="button _full _min">Підписатися</button></div>
										</form>
									</div>
									<!-- form -->
								</div>
								<!-- delivery -->

								<div class="articles-right-item">
									<div class="articles-right__title">Популярні новини</div>
									<div class="articles-right-content">
										
										<?php $populargb = new WP_Query('showposts=5&meta_key=post_views_count&orderby=meta_value_num' );
												while ( $populargb->have_posts() ) {
    											$populargb->the_post(); 
										?>
										
										<a href="<?php the_permalink() ?>" class="articles-right-popular-item clearfix">
											<div class="articles-right-popular-item__media"><?php the_post_thumbnail( $size, $attr );?></div>
											<div class="articles-right-popular-item-info">
												<div class="articles-right-popular-item__name"><?php the_title(); ?></div>
												<div class="articles-right-popular-item__look">
													<?php echo getPostViews(get_the_ID()); ?>
												</div>
											</div>
										</a>
										<!-- articles-right-popular-item -->
										<?php } ?>
									</div>
								</div>
								<!-- articles-right-item -->

								<div class="articles-right-item">
									<div class="articles-right__title">Історія новин</div>
									<div class="articles-right-content">
										<a href="" class="articles-right-cat-item">Жовтень 2016</a>
										<a href="" class="articles-right-cat-item">Вересень 2016</a>
									</div>
								</div>
								<!-- articles-right-item -->

								<div class="articles-right-item">
									<div class="footer_shared__desc _blog">
										Долучайтеся до наших <br>
										соціальних мереж:
									</div> 
									<ul class="social _blog">
										<li class="fb"><a href="#"></a></li>
										<li class="vk"><a href="#"></a></li>
										<li class="gl"><a href="#"></a></li>
									</ul>
								</div>
								<!-- articles-right-item -->

							</div>
							<!--articles-right-->
							
						</div>
						<!--blog_column_inner-->
						
					</div>
					<!--blog_column _right-->
					
				</div>
				<!--wrapper-->
				
			</div>
			<!--page_def_content-->

		</div>		
		<!-- CONTENT EOF   -->

		<?php get_footer(); ?>

	</div>		
	<!--main wrapper-->

	<div class="icon-load"></div>		

</body>
</html>
