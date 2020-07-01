<?php
$n = explode(' ', fgets(STDIN));
$k = $n[1];

$p = explode(' ', trim(fgets(STDIN)));
sort($p);
$result = 0;
for ($i = 0; $i < $k;$i++) {
    $result += $p[$i];
}

echo $result;