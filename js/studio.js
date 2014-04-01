$(function () {
    $('.xbxslider').bxSlider({
        minSlides: 1,
    maxSlides: 4,
    moveSlides: 1,
    slideWidth: 140,
    slideMargin: 10,
    pager: false // скрыть точки
    });
    console.log(jQuery('.carousel'));
    jQuery('.carousel').elegantcarousel({
        delay: 50,
        fade: 300,
        slide: 500,
        effect: 'fade',
        orientation: 'horizontal',
        loop: false,
        autoplay: false,
        time: 5000      });


});
