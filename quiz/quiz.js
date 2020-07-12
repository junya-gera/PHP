$(function(){
  'use strict';

  $('.answer').on('click',function(){
    var $selected = $(this);  // クリックされた答えを$selectedに入れる
    // 既にボタンが押されていたらもう押せなくする
    if ($selected.hasClass('correct') || $selected.hasClass('wrong')){
      return;
    }
    $selected.addClass('selected');
    var answer = $selected.text(); // 答えのテキストをanswerとして保持

    $.post('/_answer.php',{ // ajax処理 answer.phpに投げる
      answer: answer
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
      $('#btn').removeClass('disabled'); // ネクストボタンが押せる
    });
  });

  $('#btn').on('click', function(){
    if (!$(this).hasClass('disabled')){ // disabledがなければリロードできる
      location.reload(); // 現在のURLを再読み込みする
    }
  })
});