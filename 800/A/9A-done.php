<?php
list($y, $w) = explode(' ', trim(fgets(STDIN)));
$maxYW = max($y, $w);
$dieMeet = 7 - $maxYW;
$denominator = 6;
$simplifiedFraction = simplifyFraction($dieMeet, $denominator);
echo $simplifiedFraction;

function simplifyFraction($numerator, $denominator)
{
    // Find the GCD of the numerator and denominator
    $gcd = 1;
    for ($i = 1; $i <= $numerator && $i <= $denominator; $i++) {
        if ($numerator % $i == 0 && $denominator % $i == 0) {
            $gcd = $i;
        }
    }

    // Simplify the fraction
    $numerator /= $gcd;
    $denominator /= $gcd;

    return $numerator . '/' . $denominator;
}