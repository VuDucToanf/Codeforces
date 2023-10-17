<?php
// Read the number of test cases
$numberOfTestCases = intval(trim(fgets(STDIN)));

// Return values
$value = [];

// Iterate through each test case
for ($i = 0; $i < $numberOfTestCases; $i++) {
    $arrays = [];
    $point = 0;
    for ($j = 0; $j < 10; $j++) {
        $arrays[] = trim(fgets(STDIN));
    }
    for ($j = 0; $j < 10; $j++) {
        for ($k = 0; $k < 10; $k++) {
            if (($j == 0 || $k == 0 || $j == 9 || $k == 9) && $arrays[$j][$k] == 'X') {
                $point++;
            } elseif (($j == 1 || $k == 1 || $j == 8 || $k == 8) && $arrays[$j][$k] == 'X') {
                $point += 2;
            } elseif (($j == 2 || $k == 2 || $j == 7 || $k == 7) && $arrays[$j][$k] == 'X') {
                $point += 3;
            } elseif (($j == 3 || $k == 3 || $j == 6 || $k == 6) && $arrays[$j][$k] == 'X') {
                $point += 4;
            } elseif (($j == 4 || $k == 4 || $j == 5 || $k == 5) && $arrays[$j][$k] == 'X') {
                $point += 5;
            }
        }
    }
    $value[] = $point;
}

foreach ($value as $item) {
    echo $item . PHP_EOL;
}