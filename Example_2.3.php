<?
//Вот пример замыкания 
function power($arr, $exp) {
    // переменная $func будет хранить ссылку на объект класса Closure, который описывает наше замыкание
    $func = function ($el) use ($exp) {
        return $el ** $exp;
    };
    
    return array_map($func, $arr);
}

$list = [1, 3, 4];

var_dump(power($list, 2)); // Выведет: array(3) {[0]=>int(1) [1]=>int(9) [2]=>int(16)}
var_dump(power($list, 3)); // Выведет: array(3) {[0]=>int(1) [1]=>int(27) [2]=>int(64)}