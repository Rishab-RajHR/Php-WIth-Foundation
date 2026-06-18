<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>
</head>
<body>
<?php 


$a = array();
// Jsut Declare the array
// indexes are autoincremented when not specified

$a[] = 'PHP';
$a[] = 'HTML';
$a[] = 'Java';
$a[] = 'C';

print_r($a);

// count and sizeof are same for getting the length

$n = count($a);
$m = sizeof($a);

echo "<br>Count is $n and sizeof is $m";

// Explicity value given

$a[0] = 'asp.net';
$a[10] = 'Golang';

echo "<br> Now Array is <br>";
print_r($a);

?>
</body>
</html>