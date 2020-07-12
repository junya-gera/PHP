<?php
// php -S localhost:8000 でビルトインwebサーバーを使用
require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Quiz.php');

// Quizクラスのインスタンスを作成 名前空間はMyApp
$quiz = new MyApp\Quiz();

// isFinishedではない場合、データを引っ張ってくる
if (!$quiz->isFinished()){
  $data = $quiz->getCurrentQuiz(); // 表示する問題をQuizクラスのメソッドで取得
  shuffle($data['a']); // shuffle 配列の要素をシャッフル
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>quizPHP</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- もしisFinishedなら終了画面 -->
  <?php if ($quiz->isFinished()) : ?>
    <div id="container">
      <div id="result">
        Your score ...
        <div><?= h($quiz->getScore()); ?></div>
      </div>
      <a href=""><div id="btn">Replay?</div></a>
    </div>
    <?php $quiz->reset(); ?>
    <?php else : ?>
      <div id="container">
        <h1>Q. <?= h($data['q']); ?></h1>
        <ul>
          <?php foreach ($data['a'] as $a) : ?>
            <li class="answer"><?= h($a); ?></li>
            <?php endforeach; ?>
          </ul>
          
          <div id="btn" class="disabled"><?= $quiz->isLast() ? 'Show Result' : 'Next Question'; ?></div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="quiz.js"></script>
        <?php endif; ?>
  </body>
</html>