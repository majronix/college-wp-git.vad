$(document).ready(function(){
    /****** Selects */
    jQuery('.c-form__field_select select').each(function(){
        jQuery(this).siblings('p').text( jQuery(this).children('option:selected').text() );
    });
    jQuery('.c-form__field_select select').change(function(){
        jQuery(this).siblings('p').text( jQuery(this).children('option:selected').text() );
    }); 
    /****** Selects */
    jQuery('.s-select_switch select').each(function(){
        jQuery(this).siblings('p').text( jQuery(this).children('option:selected').text() );
    });
    jQuery('.s-select_switch select').change(function(){
        jQuery(this).siblings('p').text( jQuery(this).children('option:selected').text() );
    });

    /****** Изминение количества в инпуте - стр. колекциии */
    jQuery('.minus').click(function () {
        var jQueryinput = jQuery(this).parent().find('input');
        var count = parseInt(jQueryinput.val()) - 1;
        count = count < 1 ? 1 : count;
        jQueryinput.val(count);
        jQueryinput.change();
        return false;
    });
    jQuery('.plus').click(function () {
        var jQueryinput = jQuery(this).parent().find('input');
        jQueryinput.val(parseInt(jQueryinput.val()) + 1);
        jQueryinput.change();
        return false;
    });

    /****** Скрывает и открывает часть контента на главной */
    $('#c-main-desc__but').click(function(){
        if ($('#c-main-desc__hidden').css('display') == 'inline')
        {
            $('#c-main-desc__hidden').animate({height: 'hide'}, 500);
            $(this).removeClass('c-minus');
        }
        else
        {
            $('#c-main-desc__hidden').animate({height: 'show'}, 500);
            $(this).addClass('c-minus');
        }
    });

    /****** Скрывает и открывает часть контента на главной */
    $('.switch2').click(function(){
        if ($(this).prev().css('display') == 'block')
        {
            $(this).prev().animate({height: 'hide'}, 500);
            $(this).removeClass('_minus');
        }
        else
        {
            $(this).prev().animate({height: 'show'}, 500);
            $(this).addClass('_minus');
        }
    });

    /****** Скрывает и открывает часть контента на главной */
    $('.switch').click(function(){
        if ($(this).next().css('display') == 'block')
        {
            $(this).next().animate({height: 'hide'}, 500);
            $(this).removeClass('_minus');
        }
        else
        {
            $(this).next().animate({height: 'show'}, 500);
            $(this).addClass('_minus');
        }
    });
    $('.switch_hide').click(function(){
        if ($(this).next().css('display') == 'block')
        {
            $(this).next().animate({height: 'hide'}, 500);
            $(this).removeClass('_minus');
        }
        else
        {
            $(this).next().animate({height: 'show'}, 500);
            $(this).addClass('_minus');
        }
    });
    $('.DropContent_switch').click(function(){
        if ($(this).parent().css('display') == 'block')
        {
            $(this).parent().animate({height: 'hide'}, 500);
            $(this).removeClass('_minus');
        }
        else
        {
            $(this).parent().animate({height: 'show'}, 500);
            $(this).addClass('_minus');
        }
    });

    /****** Плавное появление пунктов моб. меню */
    $('.c-menu__burger').click(function(){
        if ($('.c-header-menu').css('display') == 'block')
            {
                $('.c-header-menu').slideUp( "slow", function() {});
            }
        else
            {
                $('.c-header-menu').slideDown( "slow", function() {});
            }
    });

});

/****** Плавное появление пунктов моб. меню МНОГО уровней */
function initMenu() {
  $('#menu ul').hide();
  $('#menu li a').click(
    function() {
        $(this).next().slideToggle('normal');   
        $(this).parent().toggleClass('minus');
        $(this).parent().toggleClass('plus');
      }
    );
  }
$(document).ready(function() {initMenu();});

/****** Кнопка ВВЕРХ */
$(function() {
                 
    $(window).scroll(function() {
     
    if($(this).scrollTop() != 0) {
     
    $('#toTop').fadeIn();
     
    } else {
     
    $('#toTop').fadeOut();
     
    }
     
    });
     
    $('#toTop').click(function() {
     
    $('body,html').animate({scrollTop:0},800);
     
    });
     
});

/******* start paralax */
$(window).bind('scroll',function(e){
    parallaxScroll();
});
function parallaxScroll(){
    var scrolled = $(window).scrollTop();
    $('.main-about-paralax-row__bg_1').css('top',(0+(scrolled*.1))+'px');
    $('.main-about-paralax-row__bg_2').css('top',(0+(scrolled*.3))+'px');
    $('.main-about-paralax-row__bg_3').css('top',(0+(scrolled*.1))+'px');
}
/******* end paralax */

//Скрываем и открываем контент категорий
$(document).ready(function(){
    $('.main-click-hidden-cat').click(function(){
        if ($('.insets-wrap').css('height') == '1620px')
            {
                //$("#my-div").animate({height: "show"}, 1000);
                $('.insets-wrap').animate({height: "927"}, 900);
            }
        else
            {
                $('.insets-wrap').animate({height: "1620"}, 900);
            }
        /*$('.insets-wrap').animate({height: $(this)[927].scrollHeight}, 200);*/
    });
    
});

