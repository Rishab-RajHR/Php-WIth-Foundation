<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sort and Reverse of Array</title>
</head>
<body>
<?php 

$a = array('C','C++','Java','PHP',10,100,12,42,42,true, false);

echo "<br> Original Array is <br>";

print_r($a);

// Array is sorted

sort($a);

echo "<br> Sorted Array is <br>";

print_r($a);

?>
</body>
</html>