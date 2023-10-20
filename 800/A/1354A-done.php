<?php
// Read the number of test cases
$numberOfTestCases = intval(trim(fgets(STDIN)));

// Return values
$value = [];

// Iterate through each test case
for ($i = 0; $i < $numberOfTestCases; $i++) {
    list($a, $b, $c, $d) = explode(' ', trim(fgets(STDIN)));
    (double) $totalMinutes = 0;
    (double) $nestMinutes = $a;
    if ($a <= $b) {
        $totalMinutes = $b;
    } else {
        $nestMinutes -= $b;
        if ($c <= $d) {
            $value[] = -1;
            continue;
        } else {
            $times = ceil($nestMinutes / ($c - $d));
            $lackMinutes = (int)$times * (int)$c;
            $totalMinutes = $b + $lackMinutes;
        }
    }
    $value[] = $totalMinutes;
}

foreach ($value as $item) {
    echo $item . PHP_EOL;
}
//29 + 999999962 * 999999980