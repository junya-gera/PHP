<?php

// namespace 別の開発者とクラス名が被らないよう名前空間を使う
// ベンダー名\プロジェクト名で書くことが多い
namespace Dotinstall\MyPHPApp;

class Post extends BasePost implements likeInterface
{
  use LikeTrait;

  // final これをつけると子クラスでこのメソッドをオーバーライドできなくなる
  // final public function show()
  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }

}