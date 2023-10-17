<?php
// Read the number of test cases
$numberOfTestCases = intval(trim(fgets(STDIN)));

// Return values
$value = [];

// Iterate through each test case
for ($i = 0; $i < $numberOfTestCases; $i++) {
    $value[$i] = 1;
    // Read the first line of each test case
    $n = intval(trim(fgets(STDIN)));

    // Read 1 line with n integers each
    $pair = explode(' ', trim(fgets(STDIN)));

    $min = min($pair);
    $key = array_search($min, $pair);
    $pair[$key] += 1;

    foreach ($pair as $item) {
        $value[$i] *= $item;
    }
}

foreach ($value as $item) {
    echo $item . PHP_EOL;
}