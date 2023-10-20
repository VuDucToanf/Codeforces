<?php
$inputs = '';
$value = 'YES';
for ($i = 0; $i < 3; $i++) {
    $inputs .= trim(fgets(STDIN));
}
$inputs = str_split($inputs);
for ($i = 0; $i < 4; $i++) {
    $iCentralSymmetry = 8 - $i;
    if ($inputs[$i] != $inputs[$iCentralSymmetry]) {
        $value = "NO";
        break;
    }
}
echo $value;