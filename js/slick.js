jQuery(function($) {
    function sliderSetting() {
        var width = $(window).width();

        if(width <= 767) {
            $('.js-slick').not('.slick-initialized').slick({
                dots: true,
                arrows: true,
                dotsClass: 'slide-dots',
                prevArrow: '<img src="http://opera-pet.com/wp-content/themes/OPERA/img/sp/arrow_before.png" class="slide-arrow prev-arrow">',
                nextArrow: '<img src="http://opera-pet.com/wp-content/themes/OPERA/img/sp/arrow_after.png" class="slide-arrow next-arrow">',
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
