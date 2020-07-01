<?php
$k = trim(fgets(STDIN));
$s = str_split(trim(fgets(STDIN)));
if (count($s) <= $k) {
    echo trim(implode($s));
} else {
    $arr = [];
    $arr = array_slice($s, 0, $k);
    array_push($arr, "...");
    echo trim(implode($arr));
}

// とりあえずtrimしとかないと

// 模範解答
// $a=trim(fgets(STDIN));
// $b=trim(fgets(STDIN));
// if($a>=strlen($b)){
//   echo $b;
// }else{
//   echo substr($b,0,$a)."...";
// }