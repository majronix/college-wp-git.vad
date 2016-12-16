<?php
/**
 * Чистый Шаблон для разработки
 * Функции шаблона
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
register_nav_menus( array( // Регистрируем 2 меню
	'top' => 'Верхнее меню',
	'top_bottom' => 'Верхнее меню - дополнительное'
) );
add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр

if ( function_exists('register_sidebar') )
register_sidebar(); // Регистрируем сайдбар

add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($len) { return 16000; }

//хлебные крошки
function the_breadcrumb() {
    echo '<div id="breadcrumb"><ul><li><a href="/">Головна</a></li><li>-</li>';

    if ( is_category() || is_single() ) {
        $cats = get_the_category();
        $cat = $cats[0];
        echo '<li><a href="'.get_category_link($cat->term_id).'"-'.$cat->name.'</a></li><li></li>';
    }

    if(is_single()){
        echo '<li>';
        the_title();
        echo '</li>';
    }

    if(is_page()){
        echo '<li>';
        the_title();
        echo '</li>';
    }

    echo '</ul><div class="clear"></div></div>';
}

//количество просмотров статтей блога 
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 переглядів";
    }
    return $count.' переглядів';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

?>