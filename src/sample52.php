<?php

$numbers = [1, 2, "3", 4];

if (in_array(3, $numbers, true)) {
    echo "3（整数）が見つかりました。";
} else {
    echo "3（整数）は見つかりませんでした。";
}

?>
