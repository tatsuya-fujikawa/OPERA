'use strict';

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


    const w = window.innerWidth;
    const target = document.getElementById('js-deleteTarget');
    if(w < 767) {
      target.remove();
    }
