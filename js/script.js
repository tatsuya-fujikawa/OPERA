'use strict';

{
  $(function(){
    var ua = navigator.userAgent;
    if((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)){
    $('head').prepend('<meta name="viewport" content="width=device-width,initial-scale=1">');
    } else {
    $('head').prepend('<meta name="viewport" content="width=1050">');
    }
    });
}
{
// フローティングバナーフッター時フェイドアウト
const innerHeight = document.body.clientHeight;;
const scroll = window.scrollY;

window.addEventListener('scroll', function() {
  if( innerHeight - 100 < window.scrollY ) {
    document.getElementById('js-floating').classList.add('hidden');
  } else {
    document.getElementById('js-floating').classList.remove('hidden');
  }
});
}

{
  //トップへスクロール
const pagetopBtn = document.getElementById('js-scroll');
pagetopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});

}

{
  const w = window.innerWidth;
  const target = document.getElementById('js-deleteTarget');
  if(w < 767) {
    target.remove();
  }
}
