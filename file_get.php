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
// file_get_contents ファイルを読み込む
$news = file_get_contents('../../news_data/news.txt');
// 読み込んだファイルに追記をする .= で後ろに追加
$news .= "2018-06-03 ニュースを追加しました";
// 前に追加
$news = "2018-06-04 ニュースを追加しました\n" . $news;
print($news);

// readfile ファイルを読み込んで表示させる。加工や編集はできない
// readfile('../../news_data/news.txt');
?>
</pre>
</main>
</body>    
</html>