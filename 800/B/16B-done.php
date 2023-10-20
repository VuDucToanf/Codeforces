<?php
list($n, $m) = explode(' ', trim(fgets(STDIN)));
$arrays = [];
$maxMatches = 0;
for($i = 0; $i < $m; $i++) {
    list($a, $b) = explode(' ', trim(fgets(STDIN)));
    $arrays[$b] = !empty($arrays[$b]) ? $arrays[$b] + $a : $a;
}
krsort($arrays);
foreach ($arrays as $key => $value) {
    if ($n <= 0) {
        break;
    }
    $numberOfBoxes = min($n, $value);
    $n -= $value;
    $maxMatches += $key * $numberOfBoxes;
}
echo $maxMatches;