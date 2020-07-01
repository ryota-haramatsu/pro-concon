<?php
// // maxより小さければOK
// // max<＝xならNG
// $n = fgets(STDIN);
// $arr = [];
// while ($values = fgets(STDIN)){
//     array_push($arr, (int)$values);   
// }
// // $arr = [10,8,9,6]のような配列
// rsort($arr);
// $counter = 0;
// for ($i = 0; $i < $n; $i++) {
//     if (!empty($arr[$i+1])) {
//         if ($arr[$i] <= $arr[$i+1]) {
//             continue;
//         } 
//     }
//     $counter++;
// }
// echo $counter;

// 模範解答
$n = fgets(STDIN);
$num = [];
for ($i = 0; $i < $n; $i++) {
    $num[] = trim(fgets(STDIN));
}
echo count(array_unique($num));
// array_uniqueで重複を消す