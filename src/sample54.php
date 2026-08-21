<?php

//ユーザー定義関数を定義「2つの引数アリ」
function name($cytech, $engineer) {
    $result = $cytech + $engineer;
    return $result;
}

//関数を呼び出して結果を表示する
echo name(2, 3);

?>
