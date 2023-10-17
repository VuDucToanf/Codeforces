<?php
// Find the minimum value in 2 arrays
//
// Read the number of test cases
$numberOfTestCases = intval(trim(fgets(STDIN)));

// Return values
$value = [];

// Iterate through each test case
for ($i = 0; $i < $numberOfTestCases; $i++) {
    // Read the first line of each test case
    $n = intval(trim(fgets(STDIN)));
    // Read 1 line with n integers each for a & b (array) value
    $a = explode(' ', trim(fgets(STDIN)));
    $b = explode(' ', trim(fgets(STDIN)));

    $sumA = array_sum($a);
    $sumB = array_sum($b);
    $valWithAMin = min($a) * $n + $sumB;
    $valWithBMin = min($b) * $n + $sumA;
    $value[] = min([$valWithAMin, $valWithBMin]);
}

foreach ($value as $item) {
    echo $item . PHP_EOL;
}