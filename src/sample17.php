<?php
// 数値の比較
$number1 = 10;
$number2 = 5;

// 等しいかどうか
var_dump($number1 == $number2); // false
var_dump($number1 != $number2); // true

// 大小比較
var_dump($number1 > $number2); // true
var_dump($number1 < $number2); // false

// 文字列の比較
$string1 = "Hello";
$string2 = "hello";

var_dump($string1 == $string2); // false
var_dump($string1 === $string2); // false

// 配列の比較
$array1 = [1, 2, 3];
$array2 = ["1", "2", "3"];

var_dump($array1 == $array2); // true
var_dump($array1 === $array2); // false
?>