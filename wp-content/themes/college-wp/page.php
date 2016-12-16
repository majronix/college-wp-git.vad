<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон обычной страницы
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
?> 
     
<?php get_header();?> 
<body onload="initialize()" class="page_def loaded"> 
	<div class="global_bg"></div>
	
	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->
		<div class="content">
			
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
			
			<div class="wrapper">
				<div class="page_def_content">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?>
					<h1><?php the_title(); // Заголовок ?></h1>
					<?php the_content(); // Содержимое страницы ?>
					<?php endwhile; // Конец цикла ?>
				</div>
				<!--page_def_content-->
			</div>
			<!--wrapper-->
			
		</div>		
		<!-- CONTENT EOF   -->

		<?php get_footer(); // Подключаем футер ?>

	</div>		
	<!--main wrapper-->

	<div class="icon-load"></div>		

</body>
</html>