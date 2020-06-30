<!-- ・Nまいのカード
・Alice Bob 交互に１枚ずつカードをとる
・Aliceが最初にカードをとる
・全てのカードをとると終了
・とったカードの数の合計が得点になる
→AliceはBobより何点多く取るか

・両者とも大きい数のカードを取る max
・カードがなくなるまで行う ループ -->

<?php
// $n = (int)fgets(STDIN);
// $values = array_map('intval', explode(' ', fgets(STDIN)));
// $a = 0;
// $b = 0;
// $arr = [];
// foreach ($values as $key => $value) {
//     $arr[] = $value;
// }
// for ($i = 1; $i <= $n; $i++) {
//     if ($i % 2 !== 0) {
//         $maxNum = max($arr);
//         $a += $maxNum;
//         $after_arr = array_diff($arr, [$maxNum]);
//         $after_arr = array_values($arr);
//         continue;
//     }
    
//     if ($i % 2 === 0) {
//         $maxNum = max($arr);
//         $b += $maxNum;
//         $after_arr = array_diff($arr, [$maxNum]);
//         $after_arr = array_values($arr);
//         continue;
//     }
// }
// $result = $a - $b;


// 模範解答
$n = fgets(STDIN);
$a = explode(' ', fgets(STDIN));
rsort($a);
$p = 0;
for ($i = 0; $i < $n; $i++) {
    if ($i % 2 === 0) {
        $p += $a[$i];
    } else {
        $p -= $a[$i];
    }
}
echo $p;