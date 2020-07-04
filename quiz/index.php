<?php

require_once(__DIR__ . '/config.php');

$quizSet = [];

$quizset[] = [
'q' => 'What is A?',
'a' => ['A0','A1','A2','A3']
];
$quizset[] = [
'q' => 'What is B?',
'a' => ['B0','B1','B2','B3']
];
$quizset[] = [
'q' => 'What is C?',
'a' => ['C0','C1','C2','C3']
];

$current_num = 0; // 現在何問目の問題を解いているか
$data = $quizSet[$current_num]; // 表示する問題
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