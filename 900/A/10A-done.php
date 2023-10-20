<?php
list($n, $p1, $p2, $p3, $t1, $t2) = explode(' ', trim(fgets(STDIN)));
$arrays = [];
$power = 0;
for ($i = 0; $i < $n; $i++) {
    $arrays[] = explode(' ', trim(fgets(STDIN)));
}
foreach ($arrays as $key => $value) {
    if ($key != 0) {
        $timeRest = $value[0] - $arrays[$key - 1][1];

        if ($timeRest > $t1) {
            calculateMode($t1, $p1, $power);
            $timeRest -= $t1;
        } else {
            calculateMode($timeRest, $p1, $power);
            $timeRest = 0;
        }

        if ($timeRest > $t2) {
            calculateMode($t2, $p2, $power);
            $timeRest -= $t2;
        } else {
            calculateMode($timeRest, $p2, $power);
            $timeRest = 0;
        }

        if ($timeRest > 0) {
            calculateMode($timeRest, $p3, $power);
        }
    }
    calculateMode($value[1] - $value[0], $p1, $power);
}

echo $power;

function calculateMode($time, $p, &$power): float|int
{
    $power += $p * $time;
    return $power;
}