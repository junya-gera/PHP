<?php

// これがなければ5もstringと判断してしまう
declare(strict_types=1);

class Post
{
  private string $text; // 型宣言 string型しか受け付けない

  public function __construct(string $text)
  {
    $this->text = $text;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

$posts = [];

$posts[0] = new Post('5');
$posts[1] = new Post('hello again');

$posts[0]->show();
$posts[1]->show();