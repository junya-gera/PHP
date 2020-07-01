<?php

// これがなければ5もstringと判断してしまう
declare(strict_types=1);

// abstract class 抽象クラス
// それ自体からはインスタンスを作ることができない、継承を前提としたクラス
// 
abstract class BasePost // 親クラスまたはsuperクラス
{
  // protected 自身のクラスと、自身のクラスを継承したクラスまで使える
  protected string $text; // 型宣言 string型しか受け付けない
  private static $count; // クラスプロパティ
  public const VERSION = 0.1; // オブジェクト定数

  public function __construct(string $text)
  {
    $this->text = $text;
    self::$count++;
  }

  public static function showInfo() // クラスメソッド
  {
    printf('Count: %d' . PHP_EOL, self::$count);
    printf('Version: %.1f' . PHP_EOL, self::VERSION);
  }

  
  // show()メソッドは子クラスの方で必ず定義してね(抽象メソッド)
  abstract public function show();
}

class Post extends BasePost
{
  // final これをつけると子クラスでこのメソッドをオーバーライドできなくなる
  // final public function show()
  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }

}

class sponsoredPost extends BasePost // 子クラスまたはsubクラス
{
  private $sponsor;

  public function __construct($text, $sponsor)
  {
    parent::__construct($text); // 親クラスのコンストラクタを使う
    $this->sponsor = $sponsor;
  }

  public function showSponsor()
  {
    printf('%s' . PHP_EOL, $this->sponsor);
  }

  // override 親クラスのメソッドと同名のメソッドを使うこと
  public function show()
  {
    printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
  }
}

class premiumPost extends BasePost // 子クラスまたはsubクラス
{
  private $price;

  public function __construct($text, $price)
  {
    parent::__construct($text); // 親クラスのコンストラクタを使う
    $this->price = $price;
  }

  // override 親クラスのメソッドと同名のメソッドを使うこと
  public function show()
  {
    printf('%s [%d JPY]' . PHP_EOL, $this->text, $this->price);
  }
}


$posts = [];

$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new sponsoredPost('hello hello', 'dotinstall');
$posts[3] = new premiumPost('hello there', 300);

// 引数にPost型の$postのみ受け付けるという意味
function processPost(BasePost $post)
{
  $post->show();
}

// sponsoredPost型のインスタンスはデータ型の継承がされているので、
// Post型のインスタンスとして扱うことができる
foreach($posts as $post)
{
  processPost($post);
}

// $posts[0]->show();
// $posts[1]->show();
// $posts[2]->show();
// $posts[2]->showSponsor();

Post::showInfo(); // クラスから直接クラスメソッドを呼び出す
echo Post::VERSION . PHP_EOL;