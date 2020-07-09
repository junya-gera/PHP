<?php


// C032 お得なお買い物 switch文 100以下で切り捨て
$input = trim(fgets(STDIN)); // 複数行を配列に
    while ($input){
	$array[] = $input;
	$input = trim(fgets(STDIN));
    }
    
    array_shift($array);
    $point = 0;
    $foods = 0;
    $books = 0;
    $clothes = 0;
    $others = 0;
    
    foreach($array as $line){
        $units = explode(" ", $line);
        switch ($units[0]) {
            case '0':
                $foods += $units[1];
                break;
                
            case '1':
                $books += $units[1];
                break;
                
            case '2':
                $clothes += $units[1];
                break;
                
            case '3':
                $others += $units[1];
                break;
        }
    }
    
    $foods = floor($foods / 100) * 100; // 320を100で割って3,それに100かけて300
    $books = floor($books / 100) * 100;
    $clothes = floor($clothes / 100) * 100;
    $others = floor($others / 100) * 100;
    
    $point += floor($foods / 100 * 5);
    $point += floor($books / 100 * 3);
    $point += floor($clothes / 100 * 2);
    $point += floor($others / 100 * 1);
    
    echo $point;