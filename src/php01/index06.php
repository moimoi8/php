<?php
for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}

function square_area($a,$b) {
    return $a * $b;
}

$ans = square_area(4,4)
echo $ans;

function trapezoid_area($a,$b,$c) {
    return (float)((($a + $b) * $c) / 2);
}

$ans = trapezoid_area(2, 4, 4);
echo $ans;

