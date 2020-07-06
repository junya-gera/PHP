$(function(){
  'use strict';

  $('.answer').on('click',function(){
    var $selected = $(this);  // クリックされた答えを$selectedに入れる
    $selected.addClass('selected');
    var answer = $selected.text(); // 答えのテキストをanswerとして保持

    $.post('/_answer.php',{ // ajax処理 answer.phpに投げる

    // 終わった後の処理はdoneに続けて書く
    }).done(function(res){ // 返ってくるデータをresにする
      $('.answer').each(function(){ // どれかが押された時点で全ての答えに適用
        if($(this).text() === res.correct_answer){
          $(this).addClass('correct');
        } else {
          $(this).addClass('wrong');
        }
      })
      if (answer === res.correct_answer){
        $selected.text(answer + '... CORRECT!');
      } else {
        $selected.text(answer + '... WRONG!');
      }
    })
  })
})