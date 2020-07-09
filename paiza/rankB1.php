<?php


// B034 ロボットの歩行実験 
$input = trim(fgets(STDIN)); // 複数行を配列に
    while ($input){
	    $array[] = $input;
	    $input = trim(fgets(STDIN));
    }
    
    $initial = explode(" ", $array[0]);
    $X = $initial[0];
    $Y = $initial[1];
    
    $frames = explode(" ", $array[1]);
    $F = $frames[0];
    $R = $frames[1];
    $B = $frames[2];
    $L = $frames[3];
    
    array_splice($array, 0, 3);
    
    $direction = "forward";
    
    foreach($array as $order){
        $unit = explode(" ", $order);
        
        switch ($direction) {
            case 'forward':
                if ($unit[0] == 'm'){
                    switch($unit[1]){
                        case 'F':
                            $Y += $F;
                            break;
                        case 'R':
                            $X += $R;
                            break;
                        case 'B':
                            $Y -= $B;
                            break;
                        case 'L':
                            $X -= $L;
                            break;
                    }
                } else {
                    switch($unit[1]){
                        case 'R':
                            $direction = "right";
                            break;
                        case 'B':
                            $direction = "back";
                            break;
                        case 'L':
                            $direction = "left";
                            break;
                    }
                }
                break;
                
             case 'right':
                if ($unit[0] == 'm'){
                   switch($unit[1]){
                        case 'F':
                            $X += $F;
                            break;
                        case 'R':
                            $Y -= $R;
                            break;
                        case 'B':
                            $X -= $B;
                            break;
                        case 'L':
                            $Y += $L;
                            break;
                    }
                } else {
                    switch($unit[1]){
                        case 'R':
                            $direction = "back";
                            break;
                        case 'B':
                            $direction = "left";
                            break;
                        case 'L':
                            $direction = "forward";
                            break;
                    }
                }
                break;
                
             case 'back':
                if ($unit[0] == 'm'){
                    switch($unit[1]){
                        case 'F':
                            $Y -= $F;
                            break;
                        case 'R':
                            $X -= $R;
                            break;
                        case 'B':
                            $Y += $B;
                            break;
                        case 'L':
                            $X += $L;
                            break;
                    }
                } else {
                    switch($unit[1]){
                        case 'R':
                            $direction = "left";
                            break;
                        case 'B':
                            $direction = "forward";
                            break;
                        case 'L':
                            $direction = "right";
                            break;
                    }
                }
                break;
                
             case 'left':
                if ($unit[0] == 'm'){
                    switch($unit[1]){
                        case 'F':
                            $X -= $F;
                            break;
                        case 'R':
                            $Y += $R;
                            break;
                        case 'B':
                            $X += $B;
                            break;
                        case 'L':
                            $Y -= $L;
                            break;
                    }
                } else {
                    switch($unit[1]){
                        case 'R':
                            $direction = "forward";
                            break;
                        case 'B':
                            $direction = "right";
                            break;
                        case 'L':
                            $direction = "back";
                            break;
                    }
                }
                break;
            }
        
    }
    
    echo $X . " " . $Y;
    