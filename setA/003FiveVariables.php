<?php
$arr = array_map('intval', explode(' ', fgets(STDIN)));
echo array_search(0, $arr) + 1;
