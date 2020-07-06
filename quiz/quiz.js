$(function(){
  'use strict';

  $('.answer').on('click',function(){
    var $selected = $(this);  // クリックされた答えを$selectedに入れる
    var answer = $selected.text(); // 答えのテキストをanswerとして保持

    $.post('/_answer.php',{ // ajax処理 answer.phpに投げる

    // 終わった後の処理はdoneに続けて書く
    }).done(function(res){ // 返ってくるデータをresにする
      alert(res.correct_answer);
      if (answer === res.correct_answer){
        // correct!
      } else {
        // wrong!
      }
    })
  })
})