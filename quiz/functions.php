<?php

// 長いので、hという関数でエスケープできるようにする
function h($s){
  // エスケープ処置をするための関数
  // htmlspecialchars(エスケープする文字列,エスケープの種類,文字コード)
  // エスケープの種類は基本的にENT_QUOTES
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}