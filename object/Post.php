<?php

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