<?php
// input numbers of test case and a positive integer (d)
// input first in sequence
// input next numbers, if these number < right above number, this number += d until > right above number
list($n, $d) = explode(' ', trim(fgets(STDIN)));
$arrays = explode(' ', trim(fgets(STDIN)));
$move = 0;
foreach ($arrays as $key => $item) {
    if ($key != 0 && $item <= $arrays[$key - 1]) {
        $x = floor(($arrays[$key - 1] - $item) / $d) + 1;
        $move += $x;
        $arrays[$key] = $item + $x * $d;

    }
}
echo $move;