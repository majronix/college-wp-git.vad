$(window).load(function(){
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$('body').addClass('ios');
	};
	$('body').removeClass('loaded'); 
});
function viewport(){
	var e = window, 
		a = 'inner';
	if ( !( 'innerWidth' in window ) )
	{
		a = 'client';
		e = document.documentElement || document.body;
	}
	return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }
};
$(function(){

	$('.button-nav').click(function(){
		$(this).toggleClass('active'), 
		$('.main-nav-list').slideToggle(); 
		return false;
	});
	

});

var handler = function(){
	
	var height_footer = $('footer').height();	
	var height_header = $('header').height();	
	$('.content').css({'padding-bottom':height_footer+40, 'padding-top':height_header+0});
	
	
	var viewport_wid = viewport().width;
	
	if (viewport_wid <= 991) {
		
	}
	
}
$(window).bind('load', handler);
$(window).bind('resize', handler);

//Фиксированное меню при скроллинге
$(document).ready(function(){ 

    var $menu = $("#menu");

    $(window).scroll(function(){
        if ( $(this).scrollTop() > 58 && $menu.hasClass("default") ){
            $menu.removeClass("default").addClass("fixed");
        } else if($(this).scrollTop() <= 58 && $menu.hasClass("fixed")) {
            $menu.removeClass("fixed").addClass("default");
        }
    });//scroll

    //Плавный я корь
    $(".s-ancor").on("click", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),

        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
        
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });
});

/* Открытие меню */
var main = function() { //главная функция
 
    $('.menu__burger').click(function() { /* выбираем класс icon-menu и
               добавляем метод click с функцией, вызываемой при клике */
 
        $('.top-menu').animate({ //выбираем класс menu и метод animate
 
            top: '0px' /* теперь при клике по иконке, меню, скрытое за
               левой границей на 285px, изменит свое положение на 0px и станет видимым */
 
        }, 200); //скорость движения меню в мс
         
        //$('body').animate({ //выбираем тег body и метод animate
 
            //top: '1055px' /* чтобы всё содержимое также сдвигалось вправо
               //при открытии меню, установим ему положение 285px */
 
        //}, 200); //скорость движения меню в мс
    });
 
 
/* Закрытие меню */
 
    $('.top-menu__close').click(function() { //выбираем класс icon-close и метод click
 
        $('.top-menu').animate({ //выбираем класс menu и метод animate
 
            top: '-300px' /* при клике на крестик меню вернется назад в свое
               положение и скроется */
 
        }, 200); //скорость движения меню в мс
         
    $('body').animate({ //выбираем тег body и метод animate
 
            top: '0px' //а содержимое страницы снова вернется в положение 0px
 
        }, 200); //скорость движения меню в мс
    });
};
 
$(document).ready(main); /* как только страница полностью загрузится, будет
               вызвана функция main, отвечающая за работу меню */

//Верхний блок всегда на всю высоту экрана
function sResize(){
    var r = jQuery('body').height(); 
    jQuery('.main_banner').outerHeight(r);
    //jQuery('.Slider').outerHeight(r-65);
};

jQuery(window).ready(function(){
    sResize();
});

jQuery(window).resize(function(){
    sResize();
});



