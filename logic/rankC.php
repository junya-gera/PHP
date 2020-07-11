<?php

//  X文字ごとに改行を入れる

$input = trim(fgets(STDIN)); // 複数行を配列に
while ($input){
  $array[] = $input;
  $input = trim(fgets(STDIN));
}
$int = explode(" ", $array[0]); // 6 8 6

array_shift($array); // 6 8 6を削除して文字列だけにする
$str = implode($array); // implode() 配列の文字列を全て繋げる
// $a = wordwrap($str,$X,"\n",true);
// echo $a;
echo chunk_split($str, $int[2]) ."\n"; // $int[2] = 6文字ごとに改行を入れる

// 最初、何文字で改行を入れるかのところを$array[0]の最後の文字にしていた。
// こうすると、2桁で改行を入れる場合におかしくなることに気づいた。


// ★C048 タダ飲みコーヒー 割引率をかけていって何円でタダになるか
$input_line = fgets(STDIN);
$array = explode(" ", $input_line);
$X = $array[0];
$P = $array[1];

$pay = 0;
while($X != 0){
    $pay = $pay + $X; // 支払ったお金の総額
    $X = $X - ceil($X * $P / 100);
}

echo $pay;



//  128以上なら1,127以下なら0
// 3 2
// 128 127
// 127 128
// 128 127

$input = trim(fgets(STDIN)); // 複数行を配列に
while ($input){
$array[] = $input;
$input = trim(fgets(STDIN));
}
$a = explode(" ", $array[0]);

array_shift($array);

$answer_unit = "";

foreach($array as $line){ // 行を1列ずつにする
    $units = explode(" ", $line); // 数字を1つずつ配列にする
    
    foreach($units as $unit){ // 1つずつ128以上か調べる
        if ($unit >= 128){
            $str = 1;
            $answer_unit = $answer_unit . " " . $str; // 1なら$answer_unitに結合
        } else {
            $str = 0;
            $answer_unit = $answer_unit . " " . $str; // 0なら$answer_unitに結合
        }
    }
    $answer[] = $answer_unit; // 1と0の入った列を$answerという配列に入れていく
    $answer_unit = ""; // 1と0の入った列をリセット
    
}

if ($array[0] == 0){
    echo 0;
} else {
    foreach ($answer as $key => $value) {
    echo trim($value) .PHP_EOL; // 配列のバリューだけを空白を削除して1行ずつ表示
    }
}



//  2つの単語のスペルがあってるか1文字ずつ照合
$input = trim(fgets(STDIN)); // 複数行を配列に
    while ($input){
	$array[] = $input;
	$input = trim(fgets(STDIN));
    }
    
	array_shift($array);
	
	$point = 0;
	$wrong = 0;
	
	foreach($array as $line){
	    $spells = explode(" ", $line);
	   
	    if ($spells[0] == $spells[1]){ // 全く同じなら2点
	        $point += 2;
	    } elseif (mb_strlen($spells[0]) == mb_strlen($spells[1])) { // 文字数が同じ
	        $a = str_split($spells[0]); // 1文字ずつ配列にする
	        $b = str_split($spells[1]);
	        
	        for ($i = 0; $i <= count($a); $i++) { // 文字の数だけループ
	            if ($a[$i] != $b[$i]){  // 文字を順番に照合、間違ってたらwrong++
	                $wrong++;
	            }
	        }
	        if ($wrong == 1){
              $point++; // 間違いが一箇所だけなら1点
	        }
	    }
	    $wrong = 0;
	}
	
  echo $point;
  


//  文字の1文字目を後ろに移動、何回で同じ文字列になるか
  $input_line = fgets(STDIN);
    $array = explode(" ", $input_line);
    
    $count = 0;
    $a = trim($array[2]);

    if ($array[1] == $a){ // 同じ文字列なら0
        echo 0;
    } else {
        while ($array[1] != $a){ // 文字が違う間ループ
            $move = substr($a, 0, 1); // $moveに1文字目を入れる
            $a = $a . $move; // 後ろに$moveをつける
            $a = substr($a, 1); // 1文字目を削除
            $count++; // 1回移動した
        }
    echo $count;
    }



    //  3,5のつく日はポイントアップ
  $input = trim(fgets(STDIN)); // 複数行を配列に
  while ($input){
	$array[] = $input;
	$input = trim(fgets(STDIN));
  }
    
  array_shift($array);
  
  $point = 0;
  
  foreach($array as $days){
      $line = explode(" ", $days);
      $day = $line[0];
      $price = $line[1];
      
      if(strpos($day, '5') !== false){ // $dayに5が含まれる場合
          $point += floor($price * 0.05);
      } elseif (strpos($day, '3') !== false){
          $point += floor($price * 0.03);
      } else {
          $point += floor($price * 0.01);
      }
  }
  
  echo $point;
  


//  特定の文字の数を数える
  $input_line = fgets(STDIN);
  $array = explode("+", $input_line);
  
  $sum = 0;
  foreach($array as $int){
      $ten = substr_count($int, '<');
      $one = substr_count($int, '/');
      $sum = $sum + $ten * 10 + $one; 
  }
  
  echo $sum;