<?php
//変数の定義
$value = 5;

//前置インクリメント
//出力: 6
echo ++$value;
echo "\n";

//後置インクリメント
//出力: 6（出力後に $value は 7 になる）
echo $value++;
echo "\n";

//前置デクリメント
echo --$value; // 出力: 6
echo "\n";

//後置デクリメント
//出力: 6（出力後に $value は 5 になる）
echo $value--;
echo "\n";
?>
