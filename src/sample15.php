<?php

//例1:負の数

$numerator = 10;
$denominator = -3;

//出力:-3
echo intdiv($numerator, $denominator);

//例2:割り切れる場合

$numerator = 20;
$denominator = 4;

//出力:5
echo intdiv($numerator, $denominator);

//例3:分母が大きい場合

$numerator = 5;
$denominator = 10;

//出力:0
echo intdiv($numerator, $denominator);

?>
