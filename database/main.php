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
  'dbpass'
);