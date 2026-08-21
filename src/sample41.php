<?php
//配列
$cities = array("tokyo", "osaka", "nagoya", "kyoto");

//インデックスが2から1つの要素を削除
array_splice($cities, 2, 1);

//出力
print_r($cities);
?>