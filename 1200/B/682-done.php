<?php
$n = intval(trim(fgets(STDIN)));
$list = explode(' ', trim(fgets(STDIN)));
sort($list);
$retVal = 0;

$checkAscendingArray = checkAscendingArray($list);
if ($checkAscendingArray && $list[0] == 1) {
    $retVal = (int) $list[count($list) - 1] + 1;
} else {
    $arr= [];
    $i = 0;
    while (count($list) != count($arr) && $i < count($list)) {
        // handle $var
        $var = $list[$i];
        if ($var == 1 || empty($arr)) {
            $arr[] = 1;
        } else {
            if ($arr[count($arr) - 1] + 1 <= $var) {
                $arr[] = $arr[count($arr) - 1] + 1;
            }
        }
        $i++;
    }
    $retVal = end($arr) + 1;
}

echo $retVal; die;

function checkAscendingArray($list)
{
    for ($i = 0; $i < count($list) - 1; $i++) {
        if (!empty($list[$i]) && $list[$i] + 1 < $list[$i + 1]) {
            return false;
        }
    }
    return true;
}