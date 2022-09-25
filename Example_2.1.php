<?php
//Ниже представлена реализация Алгоритма Манакера, который считается наилучшим решением данной задачи

function search($str){
    $n=strlen($str);
    $h= array_fill(0,$n,0);
    //центр и радиус или крайний правый палиндром
    $c = $r = 0;
    //центр и радиус самого длинного палиндрома
    $besti = $bestj = 0;
    for($i = 0; $i < $n; $i++){
    	//если было найдено пересечение
        if($i < ($c+$r)){
            $j = $h[$c - ($i - $c)];
            if($j < ($c +$r -$i)){
                $h[$i] = $j;
                $continue;
            }
            elseif($j > ($c +$r -$i)){
                $h[$i] = $c + $r - $i;
                $continue;
            }
        }
        //Если нет пересечений
        else{
            $j = 0;
            while((($i - $j) > 0) && (($i + $j) < ($n - 1)) && ($str[$i - $j - 1] == $str[$i + $j +1])){
                $j+=1;
            }
            $h[$i] = $j;
            if($j > $bestj){
                $besti = $i;
                $bestj = $j;
            }
            if($i + $j > $c + $r){
                $c = $i;
                $r = $j;
            }
        }
    }

    $resultString = '';

    for($index = ($besti-$bestj); $index < ($besti+$bestj+1); $index++){
    	$resultString.= $str[$index];
    }

    return $resultString;
    

}

function getLongestPalindrome($string){
	return str_replace('|', '', search('|' .implode("|", str_split($string)). '|'));
}

print_r(getLongestPalindrome('after  noon nbj'));