'use strict';

//DOMツリーが出来上がったら実行※画像読み込み前
document.addEventListener('DOMContentLoaded', function () {

    const checkbox = document.getElementById('checkbox');
    const formBtn  = document.querySelector('.button__confirm');
  formBtn.disabled = true;
// checkboxクリック時に発火
  checkbox.addEventListener('click', function () {
          if (formBtn.disabled === true){
        // disabled属性を削除
        formBtn.removeAttribute("disabled");
      }else{
        // disabled属性を設定
        formBtn.setAttribute("disabled", true);
    };
  });
});

window.onload = function () {
  checkbox.checked = false;
};
