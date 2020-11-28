<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
$week_name = ['日', '月', '火', '水', '木', '金', '土'];
// date('w') で曜日と対応する数字が表示される
print($week_name[date('w')] . PHP_EOL);

$fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも'
];

foreach($fruits as $english => $japanese) {
    print($english . ':' . $japanese  . "\n");
}

// sprintf 指定した数字の桁数分に足りない場合、別の文字で埋める
// この場合は 0 で埋める
$date = sprintf('%04d年 %02d月 %02d日', 2020, 11, 28);
print($date);


?>
</pre>
</main>
</body>    
</html>