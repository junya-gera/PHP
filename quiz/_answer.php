<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Quiz.php');

$quiz = new MyApp\Quiz();
// $correctAnswerを引っ張ってくるための処理をcheckAnswerとする
$correctAnswer = $quiz->checkAnswer();

header('Content-Type: application/json; charset=UTF-8');
echo json_encode([ // 値をjson形式にして返す
  'correct_answer' => $correctAnswer
]);