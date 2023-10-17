<?php
// Read the number of test cases
$numberOfTestCases = intval(trim(fgets(STDIN)));

// Return values
$value = [];

// Iterate through each test case
for ($i = 0; $i < $numberOfTestCases; $i++) {
    // Read the first line of each test case
    $n = intval(trim(fgets(STDIN)));
    $arrays = explode(' ', trim(fgets(STDIN)));
    $count1 = $count2 = 0;
    for ($j = 0; $j < count($arrays); $j++) {
        if ($arrays[$j] == 1)
            $count1++;
        else
            $count2++;
    }
    if (count($arrays) == 1 || (!empty($count1) && (array_sum($arrays) - $count1 * 2) < $count2))
        $value[] = "NO";
    else
        $value[] = "YES";
}

foreach ($value as $item) {
    echo $item . PHP_EOL;
}
