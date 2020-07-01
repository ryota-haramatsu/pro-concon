<?php
// 文字列S,T S->T 操作回数の最小値
// Sの１文字を選んで別の文字に書き換える
$s = str_split(trim(fgets(STDIN)));
$t = str_split(trim(fgets(STDIN)));
$counter = 0;
for ($i = 0; $i < count($s); $i++) {
    if ($s[$i] != $t[$i]) {
        $counter++;
    }
}
echo $counter;