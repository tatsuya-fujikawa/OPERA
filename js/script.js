'use strict';
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