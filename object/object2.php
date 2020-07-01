<?php

// これがなければ5もstringと判断してしまう
declare(strict_types=1);

class Post
{
  private string $text; // 型宣言 string型しか受け付けない
  private static $count; // クラスプロパティ
  public const VERSION = 0.1; // オブジェクト定数

  public function __construct(string $text)
  {
    $this->text = $text;
    self::$count++;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }

  public static function showInfo() // クラスメソッド
  {
    printf('Count: %d' . PHP_EOL, self::$count);
    printf('Version: %.1f' . PHP_EOL, self::VERSION);
  }
}

$posts = [];

$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

$posts[0]->show();
$posts[1]->show();

Post::showInfo(); // クラスから直接クラスメソッドを呼び出す
echo Post::VERSION . PHP_EOL;