<?php 
$values = array_map('intval', explode(' ', fgets(STDIN)));
$n = $values[0];
$min = $values[1];
$max = $values[2];

// 1 <= x <= N  
// 1. 各行の和をどのように出力するか
// 0埋めして、array_sumで合計を求めて、min max間であればOK？
// 2. それらの総和を求める
$arry = [];
$result = 0;
for ($i=1; $i <= $n; $i++) {
    if ($i < 10) {
        // 01 02のように0埋めする
        $i = str_pad($i, 2, 0, STR_PAD_LEFT);
    }
    // 文字列にして、１文字ずつに変換し、array_sumで配列の合計を求める
    $sum = array_sum(str_split(strval($i)));    
    // str_split(strval($i));
    if ($min <= $sum && $sum <= $max) {
        $result += (int)$i;
    }
}
echo $result;