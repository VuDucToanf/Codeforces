<?php
$numberOfTestCases = intval(trim(fgets(STDIN)));

$values = [];
for ($i = 0; $i < $numberOfTestCases; $i++) {
    $n = intval(trim(fgets(STDIN)));
    $arr = [];
    for ($j = 0; $j < $n; $j++) {
        $list = explode(' ', trim(fgets(STDIN)));
        $element = array_merge($list, ['total' => array_sum($list)]);
        $arr[] = $element;
    }
    usort($arr, function ($a, $b) {
        return $a['total'] <=> $b['total'];
    });
    $value = [];
    for ($k = 0; $k < count($arr); $k++) {
        $value[] = $arr[$k][0];
        $value[] = $arr[$k][1];
    }
    $values[] = implode(' ', $value);
}

foreach ($values as $value) {
    echo $value . PHP_EOL;
}
die;