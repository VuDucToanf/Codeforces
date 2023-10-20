<?php
$arrays = explode(' ', trim(fgets(STDIN)));
rsort($arrays);
if ($arrays[1] + $arrays[2] < $arrays[0]) {
    array_splice($arrays, 0, 1);
} elseif ($arrays[1] + $arrays[2] == $arrays[0] && $arrays[1] < $arrays[2] + $arrays[3]) {
    array_splice($arrays, 0, 1);
} else {
    unset($arrays[3]);
}
if ($arrays[0] + $arrays[1] > $arrays[2] && $arrays[0] + $arrays[2] > $arrays[1] && $arrays[1] + $arrays[2] > $arrays[0]) {
    echo 'TRIANGLE';
} elseif ($arrays[0] + $arrays[1] >= $arrays[2] && $arrays[0] + $arrays[2] >= $arrays[1] && $arrays[1] + $arrays[2] >= $arrays[0]) {
    echo 'SEGMENT';
} else {
    echo 'IMPOSSIBLE';
}