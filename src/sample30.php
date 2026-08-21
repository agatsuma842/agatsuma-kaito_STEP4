<?php

//①
$fruits = ["りんご", "バナナ", "オレンジ"];
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

//②
$prices = ["りんご" => 100, "バナナ" => 50, "オレンジ" => 70];
foreach ($prices as $fruit => $price) {
    echo "$fruit の値段は $price 円です。\n";
}

?>