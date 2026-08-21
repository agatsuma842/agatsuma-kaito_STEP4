<?php

//ネストされた配列
$nestedArray = [
    "fruits" => ["apple", "banana"],
    "numbers" => [1, 2, 3],
    "nested" => [
        "a",
        "b",
        "c" => ["x", "y", "z"]
    ]
];

//配列の中身を出力
print_r($nestedArray);

//要素数の再帰的カウント
echo count($nestedArray, COUNT_RECURSIVE);

?>
