<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TypeCasting</title>
</head>
<body>
<?php 

// What is TypeCasting?
// It changes datatype of a value

$a = 242.55;

echo "<br> Before Typecasting";
echo "<br> Value of \$a is $a and its datatype is  ".gettype($a);

// TypeCasting

$b = (int)$a;
echo "<br> After Typecasting";
echo "<br> Value of \$b is $b and its datatype is ".gettype($a);

?>
</body>
</html>