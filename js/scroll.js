'use strict';

// aタグ要素の参照を取得
const scrollBtn = document.querySelectorAll('a[href^="#"]');


// 各aタグにクリックイベントを設定
for ( let i = 0; i < scrollBtn.length; i++ ) {
  scrollBtn[i].addEventListener('click', (e) => {
    // デフォルトのイベントをキャンセル
    e.preventDefault();

    let href = scrollBtn[i].getAttribute('href');
    const target = document.querySelector(href);

    // 対象（aタグ）のY軸の絶対座標を取得
    const elemY = target.getBoundingClientRect().top;
    // 現在のスクロール量を取得
    const scrollY = window.pageYOffset;

    // bufferをたす
    const buffer = 50;
    // 対象までのスクロール量を算出
    const top = elemY + scrollY - buffer;


    window.scroll({
      top: top, // スクロール量の設定
      behavior: 'smooth' // スクロール動作の設定
    });
  });
}
