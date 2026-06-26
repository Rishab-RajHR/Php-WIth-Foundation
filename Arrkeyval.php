<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array keys and array value methods</title>
 
</head>
<body>
<?php

// Associative and key paired array

$a = array('color' => 'black', 'price' => 29.65, 'refil' => true, 'type' => 'permanent');

echo "<br>Unformatted output of array is  <br>";

print_r($a);

foreach($a as $k=>$v)
{
    echo "<br> $k is $v";
}

// For Keys 

$k = array_keys($a);

echo "<br> Array of keys is <br>";

print_r($k);

// For Values

$v = array_values($a);

echo "<br> Array of value is <br>";

print_r($v);

?>
</body>
</html>