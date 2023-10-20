<?php
//input test cases
list($n, $d) = explode(' ', trim(fgets(STDIN)));
$dimensionalArrays = [];
for ($i = 0; $i < $n; $i++) {
    $dimensionalArrays[$i] = trim(fgets(STDIN));
}
$startX = $startY = $endX = $endY = -1;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $d; $j++) {
        if ($dimensionalArrays[$i][$j] == '*') {
            if ($startX > $i || $startX == -1) {
                $startX = $i;
            }
            if ($startY > $j || $startY == -1) {
                $startY = $j;
            }
            $endX = max($endX, $i);
            $endY = max($endY, $j);
        }
    }
}

for ($i = $startX; $i <= $endX; $i++) {
    for ($j = $startY; $j <= $endY; $j++) {
        echo $dimensionalArrays[$i][$j];
    }
    echo PHP_EOL;
}