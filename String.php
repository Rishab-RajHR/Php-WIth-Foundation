<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String</title>
</head>
<body>
<?php 
$a= "Hello Amazon";

echo "<br> Length of $a is ".strlen($a);

echo "<br> Original string is $a";

echo "<br> In UpperCase ".strtoupper($a);


echo "<br> In LowerCase ".strtolower($a);

echo "<br> In Reverse ".strrev($a);

$b = "ll";

echo "<br> Result of strstr ".strstr($a,$b);

// strstr => if $b is part of $a , value is returned from $a , starting with characters in $b till end

$b = "A";
echo "<br> Result of strpos ".strpos($a,$b);

// returns position of $b in $a, index are counted from 0 only

?>
</body>
</html>