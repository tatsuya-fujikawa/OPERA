$(function() {
    function sliderSetting() {
        var width = $(window).width();

        if(width <= 767) {
            $('.js-slick').not('.slick-initialized').slick({
                dots: true,
                arrows: true,
            });
        } else {
            $('.js-slick.slick-initialized').slick('unslick');
        }
    }
    sliderSetting();
    $(window).resize( function() {
        sliderSetting();
    });

});
