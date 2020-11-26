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
// date メソッドは第一引数に format,第二引数にタイムスタンプをとる
// タイムスタンプ = 1970/01/01 からの秒数
// time() + 60 * 60 * 24 を第二引数にとることで次の日になる
print(date('n/j(D)', time() + 60 * 60 * 24));

// strtotime() 引数の日付をタイムスタンプにする
// 具体的な日付や '+2day' でも変えてくれる
for ($i=1; $i<=30; $i++):
    $date = strtotime('+' . $i . 'day');
    print(date('n/j(D)', $date));
    print("\n");
endfor;

?>
</pre>
</main>
</body>    
</html>