'use strict';

window.onload = function() {
  const formCourse = document.getElementById('formCourseSelect');
  const formTanpin = document.getElementById('formTanpinSelect');
  
  var checkOption = document.getElementsByName('lists');

  checkOption.forEach(function(e) {
    e.addEventListener('click', function() {
      if(document.querySelector("input:checked[name=lists]").value === 'ご自宅葬（コース）お申し込み') {
        formCourse.classList.add('-show');
        if(formTanpin.classList.contains('-show')) {
          formTanpin.classList.remove('-show');
        }
      } else if(document.querySelector("input:checked[name=lists]").value === 'ご⾃宅葬(単品)お申し込み') {
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
