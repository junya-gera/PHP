<?php

try {
  $pdo = new PDO(
    'mysql:host=db;dbname=myapp;charset=utf8mb4',
    'dbuser',
    'dbpass',
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
    ]
  );

  $pdo->query("DROP TABLE IF EXISTS posts");
  $pdo->query(
    "CREATE TABLE posts (
      id INT NOT NULL AUTO_INCREMENT,
      message VARCHAR(140), 
      likes INT,
      PRIMARY KEY (id)
    )"
  );
  $pdo->query(
    "INSERT INTO posts (message, likes) VALUES
      ('Thanks', 12), 
      ('thanks', 4),
      ('Arigato', 15)"
  );

  $message = 'Merci';
  $likes = 8;
  // プリペアードステートメントの内容が同じなら一回設定すれば使いまわせる
  $stmt = $pdo->prepare(
    "INSERT INTO 
      posts (message, likes) 
    VALUES 
      (:message, :likes)"
  );
  // bindParam は変数の値ではなく変数そのものをプレースホルダに紐づけることができる
  $stmt->bindParam('message', $message, PDO::PARAM_STR);
  $stmt->bindParam('likes', $likes, PDO::PARAM_INT);
  $stmt->execute();
  // lastInsertId() で最後に挿入されたレコードの ID を表示させる
  echo 'ID: ' . $pdo->lastInsertId() . 'inserted' . PHP_EOL;

  // この時点での変数の値で実行される。変数の値を変えながら SQL を何度も実行したいときは bindParam を使う
  $message = 'Gracias';
  $likes = 5;
  $stmt->execute();
  echo 'ID: ' . $pdo->lastInsertId() . 'inserted' . PHP_EOL;

  $message = 'Danke';
  $likes = 11;
  $stmt->execute();
  echo 'ID: ' . $pdo->lastInsertId() . 'inserted' . PHP_EOL;
  
  $stmt = $pdo->query("SELECT * FROM posts");
  $posts = $stmt->fetchAll();
  foreach ($posts as $post) {
    printf(
     '[%d] %s (%d)' . PHP_EOL, 
      $post["id"],
      $post['message'],
      $post['likes']
    );
  }
} catch (PDOException $e) {
  echo $e->getMessage() . PHP_EOL;
  exit;
}