<?php

//変数
$factor = 10;

//匿名関数の定義
$multiplier = function($number) use ($factor) {
    return $number * $factor;
};

//匿名関数の呼び出し
echo $multiplier(5);

?>
