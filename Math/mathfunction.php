<?php
$a = 10;
$b = 20;

// Maximum Function
$c = max($a, $b);
echo "<br>Max of $a and $b is $c";

// Minimum Function
$c = min($a, $b);
echo "<br>Min of $a and $b is $c";

// Power Function
$c = pow(2,3);
echo "<br> Here 2^3 is $c";

// Square Root
echo "<br> Square root of 49 is " . sqrt(49);

// Ceil Function round up
echo "<br> Ceil of 1.24 is " . ceil(1.24);

// Floor Function round down
echo "<br> Floor of 1.24 is " . floor(1.24);

// Random Number Generation between specified range
echo "<br>Random Number is " . rand(1,10);

// Trignometric Function

// echo "<br>sin(90) " . sin(90);

$x = 90;
$y = (3.14*$x)/180;
echo "<br>sin of $x is " . sin($y);
?>