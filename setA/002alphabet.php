<?php
$str = fgets(STDIN);
if (ctype_upper($str)) {
    echo 'A';
}
if (ctype_lower($str)) {
    echo 'a';
}