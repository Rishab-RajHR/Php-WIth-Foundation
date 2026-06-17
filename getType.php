<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gettype Function</title>
 
</head>
<body>
<?php 
/*
gettype function reveals datatype of variable
*/

$a = 15;

echo "<br>Value of Variable \$a is $a and its Datatype is ". gettype($a);

$a = 15.59;

echo "<br>Value of Variable \$a is $a and its Datatype is ". gettype($a);


$a = 'Tillu Singh';

echo "<br>Value of Variable \$a is $a and its Datatype is ". gettype($a);


$a = true;

echo "<br>Value of Variable \$a is $a and its Datatype is ". gettype($a);

// . is a concatenation operator in php

?>
</body>
</html>