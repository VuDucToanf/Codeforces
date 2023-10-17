<?php
// Read the number of test cases
$numberOfTestCases = intval(trim(fgets(STDIN)));

$value = [];

// Iterate through each test case
for ($i = 0; $i < $numberOfTestCases; $i++) {
    // Read the first line of each test case
    $n = intval(trim(fgets(STDIN)));

    // Initialize an array to store pairs of integers
    $pairs = [];

    // Read n lines with two integers each
    for ($j = 0; $j < $n; $j++) {
        list($a, $b) = explode(' ', trim(fgets(STDIN)));
        $pairs[] = [$a, $b];
    }

    //value of barbell
    $value[$i] = $pairs[0][0];
    $w = $pairs[0][0];
    for ($ind = 1; $ind < count($pairs); $ind++) {
        if ($pairs[$ind][0] >= $pairs[0][0] && $pairs[$ind][1] >= $pairs[0][1]) {
            $value[$i] = -1;
            goto c;
        }
    }
    c:
}
foreach ($value as $item) {
    echo $item . PHP_EOL;
}