<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shift And Unshift</title>
</head>
<body>
<?php 

$a = array('C','C++','Java');

echo "<br>Original Array is <br>";

print_r($a);

array_unshift($a, 'PHP');

echo "<br>After Unshift Array is <br>";

print_r($a);

?>
</body>
</html>