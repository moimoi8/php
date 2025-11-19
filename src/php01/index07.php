<?php
function triangle_area($a,$b) {
    return $a * $b / 2;
}

$ans = triangle_area(4, 4);
echo $ans . "<br />";

function square_area($a,$b) {
    return $a * $b;
}

$ans = square_area(4,4);
echo $ans . "<br />";

function trapezoid_area($a,$b,$c) {
    return (float)((($a + $b) * $c) / 2);
}

$ans = trapezoid_area(2, 4, 4);
echo $ans;