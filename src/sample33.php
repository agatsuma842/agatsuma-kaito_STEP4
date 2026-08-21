<?php

//多次元配列
$products = array(
    "vegetables" => array(
        array("name" => "キャベツ", "price" => 90),
        array("name" => "トマト", "price" => 70),
        array("name" => "にんじん", "price" => 60)
    ),
);

//2番目の商品名を出力
echo $products["vegetables"][1]["name"];

?>