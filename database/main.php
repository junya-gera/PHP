<?php
// PDO のインスタンスを作成
// PDO PHP Data Objects の略。
// どのデータベースでも同じ書き方で使用できるようにしたもの
$pdo = new PDO(
  // DSN(Database Source Name の略)
  'mysql:host=db;dbname=myapp;charset=utf8mb4',
  // user
  'dbuser',
  // password
  'dbpass',
  [
    // $fetch_style カラム名で添え字をつけた配列を返す
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]
);

// SQL を実行してみる
// アロー演算子で $pdo の query メソッドを使う
// query メソッドの結果は PDO ステートメントというオブジェクトで返ってくる
$stmt = $pdo->query("SELECT 5 + 3");

// fetch() PDOStatement の結果から行を取得する。 $fetch_style を指定してどのように返すか決める
$result = $stmt->fetch();

var_damp($result);