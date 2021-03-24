'use strict';


  $(function(){
    var ua = navigator.userAgent;
    if((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)){
    $('head').prepend('<meta name="viewport" content="width=device-width,initial-scale=1">');
    } else {
    $('head').prepend('<meta name="viewport" content="width=1050">');
    }
    });

  //トップへスクロール
const pagetopBtn = document.getElementById('js-scroll');
pagetopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});


$(function(){
  $(document).on('focus', 'input',function(){
    $('.p-bottom').hide();
  });
  $(document).on('blur', 'input', function(){
    $('.p-bottom').show();
  });
});