<?php
// Read the number of test cases
$numberOfTestCases = intval(trim(fgets(STDIN)));
$inputs = [];

// Return values
$value = [];

// Read the first character of the first line
// If it is not as same as the case, swap the another characters with the first character, if it is equal => return YES

// If it is same, swap the first character of the current line with another

// Iterate through each test case
for ($i = 0; $i < $numberOfTestCases; $i++) {
    // Read the first line of each test case
    $inputs[$i] = trim(fgets(STDIN));
    if ($inputs[$i] != 'abc') {
        $value[$i] = 'NO';
        if ($inputs[$i][0] != 'a') {
            $temp = $inputs[$i];
            [$temp[0], $temp[1]] = [$inputs[$i][1], $inputs[$i][0]];
            if ($temp == 'abc') {
                $value[$i] = 'YES';
                goto c;
            }
            $temp = $inputs[$i];
            [$temp[0], $temp[2]] = [$inputs[$i][2], $inputs[$i][0]];
            if ($temp == 'abc') {
                $value[$i] = 'YES';
                goto c;
            }
        } else {
            [$inputs[$i][1], $inputs[$i][2]] = [$inputs[$i][2], $inputs[$i][1]];
            $value[$i] = $inputs[$i] == 'abc' ? 'YES' : 'NO';
        }
    } else {
        $value[$i] = 'YES';
    }
    c:
}
foreach ($value as $item) {
    echo $item . PHP_EOL;
}