<?php
//((a + b) / 2 - min(a, b)) / c
// Read the number of test cases
$numberOfTestCases = intval(trim(fgets(STDIN)));

// Return values
$value = [];

// Iterate through each test case
for ($i = 0; $i < $numberOfTestCases; $i++) {
    list($a, $b, $c) = explode(' ', trim(fgets(STDIN)));
    $value[$i] = ceil((($a + $b) / 2 - min($a, $b)) / $c);
}

foreach ($value as $item) {
    echo $item . PHP_EOL;
}