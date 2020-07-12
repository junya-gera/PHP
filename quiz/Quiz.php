<?php

namespace MyApp;

class Quiz {
  private $_quizSet = [];

  public function __construct() {

    $this->_setup();

    if (!isset($_SESSION['current_num'])){
      $_SESSION['current_num'] = 0;
      $_SESSION['correct_count'] = 0;
    }
  }

  public function checkAnswer(){
    $correctAnswer = $this->_quizSet[$_SESSION['current_num']]['a'][0];
    if($correctAnswer === $_POST['answer']){
      $_SESSION['correct_count']++;
    }
    $_SESSION['current_num']++;
    return $correctAnswer;
  }

  // 最後の問題まで行ったら違う画面を表示させるメソッド
  public function isFinished() {
    return count($this->_quizSet) === $_SESSION['current_num'];
  }

  public function getScore() {
    return round($_SESSION['correct_count'] / count($this->_quizSet) * 100);
  }

  public function isLast() {
    return count($this->_quizSet) === $_SESSION['current_num'] + 1;
  }

  // $current_numをリセット
  public function reset() {
    $_SESSION['current_num'] = 0;
    $_SESSION['correct_count'] = 0;
  }

  public function getCurrentQuiz() {
    return $this->_quizSet[$_SESSION['current_num']];
  }

  private function _setup(){
    $this->_quizSet[] = [
      'q' => 'What is A?',
      'a' => ['A0','A1','A2','A3']
      ];
      $this->_quizSet[] = [
      'q' => 'What is B?',
      'a' => ['B0','B1','B2','B3']
      ];
      $this->_quizSet[] = [
      'q' => 'What is C?',
      'a' => ['C0','C1','C2','C3']
      ];  
  }

}