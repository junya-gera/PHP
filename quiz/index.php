<?php
// php -S localhost:8000 でビルトインwebサーバーを使用
require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Quiz.php');

// Quizクラスのインスタンスを作成 名前空間はMyApp
$quiz = new MyApp\Quiz();
$data = $quiz->getCurrentQuiz(); // 表示する問題をQuizクラスのメソッドで取得
shuffle($data['a']); // shuffle 配列の要素をシャッフル
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>quizPHP</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="container">
    <h1>Q. <?= h($data['q']); ?></h1>
    <ul>
      <?php foreach ($data['a'] as $a) : ?>
        <li class="answer"><?= h($a); ?></li>
      <?php endforeach; ?>
    </ul>

    <div id="btn" class="disabled">Next Question</div>
  </div>
</body>
</html>