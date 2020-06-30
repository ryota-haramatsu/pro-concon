<!-- https://atcoder.jp/contests/abc086/tasks/abc086_a -->
<?php 
// $values = array_map('intval', explode(' ', fgets(STDIN)));
// $num1 = $values[0];
// $num2 = $values[1];
// $pd = $num1*$num2;
// if ($pd % 2 === 0) {
//     echo 'Even';
// } 
// if ($pd % 2 !== 0) {
//     echo 'Odd'
// }

// 模範解答
echo array_product(explode(' ', fgets(STDIN))) % 2 ? 'Odd' : 'Even';
