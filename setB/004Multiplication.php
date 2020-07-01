<?php
$n = fgets(STDIN);
$nums = array_map('intval', explode(' ',fgets(STDIN)));
$sum = true;
for ($i = 0; $i < $n; $i++) {
    (int)$sum *= $nums[$i];
}
var_dump($sum);
if($sum>pow(10,18)) {
    echo -1;
} else {
    echo (int)$sum;
}