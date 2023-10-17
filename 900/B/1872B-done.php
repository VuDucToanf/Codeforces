<?php
// Read the number of test cases
$numberOfTestCases = intval(trim(fgets(STDIN)));

// Return values
$value = [];

// Iterate through each test case
for ($i = 0; $i < $numberOfTestCases; $i++) {
    // Read the first line of each test case
    $n = intval(trim(fgets(STDIN)));
    $returnValueArray = [];
    for ($j = 0; $j < $n; $j++) {
        list($a, $b) = explode(' ', trim(fgets(STDIN)));
        $returnValueArray[] = $a - 1 + ceil($b / 2);
    }
    $value[] = min($returnValueArray);
}

foreach ($value as $item) {
    echo $item . PHP_EOL;
}