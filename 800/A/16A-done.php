<?php
//input test cases
list($n, $d) = explode(' ', trim(fgets(STDIN)));
$arrays = [];
$value = "YES";
for ($i = 0; $i < $n; $i++) {
    $arrays[$i] = trim(fgets(STDIN));
    $stringCompare = str_repeat($arrays[$i][0], $d);
    if ($arrays[$i] != $stringCompare) {
        $value = "NO";
    } elseif ($i != 0 && $arrays[$i] == $arrays[$i - 1]) {
        $value = "NO";
    }
}
echo $value;