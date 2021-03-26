'use strict';

const formCourse = document.getElementById('formCourseSelect');
const formTanpin = document.getElementById('formTanpinSelect');

const formTitle = document.querySelectorAll('input[value ^= "ご自宅葬"]');
const formConfirm = document.querySelector('.mw_wp_form_confirm');

var checkOption = document.getElementsByName('lists');

window.onload = function() {

  checkOption.forEach(function(e) {
    e.addEventListener('click', function() {
      if(document.querySelector("input:checked[name=lists]").value === 'ご自宅葬（コース）お申し込み') {
        formCourse.classList.add('-show');
        if(formTanpin.classList.contains('-show')) {
          formTanpin.classList.remove('-show');
        }
      } else if(document.querySelector("input:checked[name=lists]").value === 'ご自宅葬（単品）お申し込み') {
        formTanpin.classList.add('-show');
        if(formCourse.classList.contains('-show')) {
          formCourse.classList.remove('-show');
        }
      } else {
        formCourse.classList.remove('-show');
        formTanpin.classList.remove('-show');
      }
    });
  });
};


// 確認画面用　条件分岐
let checkInputConfirm = function () {
  for (let i = 0; i < formTitle.length; i++) {

    let test = formTitle[i].getAttribute('value');
    console.log(test);
    if (test.includes('コース')) {
      formCourse.classList.add('-show');
    } else if (test.includes('単品')) {
      formTanpin.classList.add('-show');
    };
  };
};

// エラー用　条件分岐
let checkInputValue = function () {
  for (let i = 0; i < formTitle.length; i++) {
    let testItem = document.querySelector('input[checked]');
    let test = testItem.getAttribute('value');
    console.log(test);
    if (test.includes('コース')) {
      formCourse.classList.add('-show');
    } else if (test.includes('単品')) {
      formTanpin.classList.add('-show');
    } else {
      formCourse.classList.remove('-show');
      formTanpin.classList.remove('-show');
    };
  };
};

// チェックされているかどうか
let checkInputChecked = function () {
  for (let i = 0; i < formTitle.length; i++) {
    if (formTitle[i].checked) {
      console.log('チェック！')
      checkInputValue();
    };
  };
};

//DOMツリーが出来上がったら実行※画像読み込み前
document.addEventListener('DOMContentLoaded', function () {

  checkInputChecked();
  if (formConfirm != null) {
    checkInputConfirm();
  }
});

checkInputChecked();
