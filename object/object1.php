<?php

// クラス
class Post
{
  // プロパティ
  public $text;
  public $likes;

  // メソッド
  public function show()
  {
    printf('%s (%s)' . PHP_EOL, $this->text, $this->likes);
  }
}
