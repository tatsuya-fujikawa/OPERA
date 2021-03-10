'use strict';

$(function() {
  var navFlg = false;
  $('.p-humberger__menu').on('click',function(){
    $('.p-humberger__menu-line').toggleClass('active');
    $('.p-humberger__gnav').fadeToggle();
    // if(!navFlg) {
    //   $('.p-humberger__gnav-menu-item').each(function(i) {
    //     $(this).delay(i*300).animate({
    //       'margin-left' : 0,
    //       'opacity' : 1,
    //     }, 500,'swing');
    //   });
    //   navFlg = true;
    // } else {
    //   $('.p-humberger__gnav-menu-item').css({
    //     'margin-left' : 50,
    //     'opacity' : 0,
    //   });
    //   navFlg = false;
    // }
  });

  $('.p-humberger__close-button').on('click', function(){
    $('.p-humberger__menu-line').toggleClass('active');
    $('.p-humberger__gnav').fadeToggle();
    // navFlg = false;
  });

})