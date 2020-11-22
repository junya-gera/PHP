<?php
// PDO のインスタンスを作成
// PDO PHP Data Objects の略。
// どのデータベースでも同じ書き方で使用できるようにしたもの

try {
  $pdo = new PDO(
    // DSN(Database Source Name の略)
    'mysql:host=db;dbname=myapp;charset=utf8mb4',
    // user
    'dbuser',
    // password
    'dbpass',
    [
      // エラーが出たときに PDOException クラス形式で例外を投げてくれるオプション
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      // $fetch_style カラム名で添え字をつけた配列を返す
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      // int で指定した id や likes が文字列で表示されてしまっている
      // これは PDO で MYSQL を使った場合、デフォルトでエミュレートモードという設定がオンになっているから
      // それをオフにするオプション
      PDO::ATTR_EMULATE_PREPARES => false,
    ]
  );

  // すでに posts テーブルがある場合は削除する
  $pdo->query("DROP TABLE IF EXISTS posts");
  // posts テーブルを作成
  $pdo->query(
    "CREATE TABLE posts (
      id INT NOT NULL AUTO_INCREMENT,
      message VARCHAR(140),
      likes INT,
      PRIMARY KEY (id)
    )"
  );
  // レコードを挿入
$pdo->query(
  "INSERT INTO posts (message, likes) VALUES
    ('Thanks', 12),
    ('thanks', 4),
    ('arigato', 15)"
);

  // ユーザーが入力した数値より likes が少ないものは削除する
  // このとき悪意のあるユーザーから OR 1=1 のように SQL インジェクションを受ける可能性がある
  // これでは 1=1 が必ず true となるので全てのレコードが削除されてしまう
  // $n = '10 OR 1=1';
  $n = 10;

  // likes が 10 以上のレコードの頭に label をつける
  // プレースホルダにはコロンを使って名前をつけることができる
  $label = '[Good!]';
  $stmt = $pdo->prepare(
    "UPDATE
      posts
    SET
      message = CONCAT(:label, message)
    WHERE
      likes > :n"
  );

  // 名前つきプレースホルダで値を埋め込む
  $stmt->execute(['label' => $label, 'n' => $n]);
  echo $stmt->rowCount() . 'records updated' . PHP_EOL;
  // $pdo->query("DELETE FROM posts WHERE likes < $n");
  // 値を埋め込んでもきちんと処理をしてくれるプリペアードステートメントを作る
  // 値を埋め込みたい箇所は ? にする。ここをプレースホルダという
  // PDOStatement はここのようにプリペアードステートメントだったり結果テストだったりするので注意が必要
  // $stmt = $pdo->prepare("DELETE FROM posts WHERE likes < ?");
  // 値を埋め込むには execute() の引数にプレースホルダと紐づける値を配列で渡す
  // ここで埋め込まれる値は SQL のコマンドではなく文字列として解釈される。SQL では int に対して string
  // を指定した場合、数字として解釈できるところまでは使ってそれ以降は無視するので 10 になる
  // $stmt->execute([$n]);

  // DELETE FROM posts WHERE likes < "10 OR 1=1"
  // → DELETE FROM posts WHERE likes < 10

  // SQL を実行してみる
  // アロー演算子で $pdo の query メソッドを使う
  // query メソッドの結果は PDO ステートメントというオブジェクトで返ってくる
  $stmt = $pdo->query("SELECT * FROM posts");

  // fetch() PDOStatement の結果から行を取得する。 $fetch_style を指定してどのように返すか決める
  // 複数取得する場合は fetchAll()
  $posts = $stmt->fetchAll();
  foreach ($posts as $post) {
    printf(
      '%s (%d)' . PHP_EOL,
      $post['message'],
      $post['likes']
    );
  }
  // エラーの情報が入ったオブジェクトを $e で取得することができる
} catch (PDOException $e) {
  // $e には getMessage() というメソッドが定義されている
  echo $e->getMessage() . PHP_EOL;
  exit;
}