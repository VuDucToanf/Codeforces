<?php
$numberOfTestCases = intval(trim(fgets(STDIN)));

$values = [];

for ($i = 0; $i < $numberOfTestCases; $i++) {
    $n = intval(trim(fgets(STDIN)));
    $list = explode(' ', trim(fgets(STDIN)));

    $listOdd = [];
    $listEven = [];
    foreach ($list as $item) {
        if ($item % 2 == 0) {
            $listEven[] = $item;
        } else {
            $listOdd[] = $item;
        }
    }

    if (empty($listEven) || empty($listOdd)) {
        echo 0 . PHP_EOL;
        continue;
    }

    $max = max($listOdd);
    sort($listEven);

    $count = count($listEven);
    for ($j = 0; $j < count($listEven); $j++) {
        if ($max > end($listEven)) {
            break;
        } else if ($max < $listEven[$j]) {
            $count++;
            break;
        } else {
            $max += $listEven[$j];
        }
    }
    echo $count . PHP_EOL;
}