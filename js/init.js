$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 450) $('a#move_up').fadeIn();
        else                           $('a#move_up').fadeOut(400);
    });
    $('a#move_up').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
//    jQuery(window).resize(function(){
//        var win_width = jQuery(window).width();
//        if (win_width>1135){
//            if (jQuery('#sideRight').size()>0){
//                var conteiner_width = win_width - (480);
//                jQuery('#middle').css('margin-right','280px');
//            }   else{
//                var conteiner_width = win_width - (240);
//                jQuery('#middle').css('margin-right','40px');
//            }
//
//            jQuery('#container').css("width",conteiner_width+'px');
//            jQuery('#YMapsID').css("width",(conteiner_width-30)+'px');
//        }else{
//            if (jQuery('#sideRight').size()>0){
//                if (jQuery('#container').width()!=660){
//                    jQuery('#container').css("width",'660px');
//                    jQuery('#YMapsID').css("width",'630px');
//                }
//            }   else{
//                if (jQuery('#container').width()!=860){
//                    jQuery('#middle').css('margin-right','80px');
//                    jQuery('#container').css("width",'860px');
//                    jQuery('#YMapsID').css("width",'830px');
//                }
//            }
//
//        }
//        var page_width = jQuery(".page").width();
//        var page_v3 = Math.ceil(page_width/3);
////        jQuery('.header_left').css("width", page_v3+'px');
//        jQuery('.header_middle').css("width", (page_width-600)+'px');
////        jQuery('.header_right').css("width", page_v3+'px');
//    });
//    function initResize(){
//        var win_width = jQuery(window).width();
//        if (win_width>1135){
//            if (jQuery('#sideRight').size()>0){
//                var conteiner_width = win_width - (480);
//                jQuery('#middle').css('margin-right','280px');
//            }   else{
//                var conteiner_width = win_width - (240);
//                jQuery('#middle').css('margin-right','40px');
//            }
//
//            jQuery('#container').css("width",conteiner_width+'px');
//            jQuery('#YMapsID').css("width",(conteiner_width-30)+'px');
//        }else{
//
//            if (jQuery('#sideRight').size()>0){
//                if (jQuery('#container').width()!=660){
//                    jQuery('#container').css("width",'660px');
//                    jQuery('#YMapsID').css("width",'630px');
//                }
//            }   else{
//                if (jQuery('#container').width()!=860){
//                    jQuery('#middle').css('margin-right','80px');
//                    jQuery('#container').css("width",'860px');
//                    jQuery('#YMapsID').css("width",'830px');
//                }
//            }
//
//        }
//        var page_width = jQuery(".page").width();
//        var page_v3 = Math.ceil(page_width/3);
////        jQuery('.header_left').css("width", page_v3+'px');
//        jQuery('.header_middle').css("width", (page_width-600)+'px');
////        jQuery('.header_right').css("width", page_v3+'px');
//    }
//    initResize();

});
