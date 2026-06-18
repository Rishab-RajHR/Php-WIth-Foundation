<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settype</title>
</head>
<body>
<?php 

// What i settype ?
// It changes datatype of a variable

$a = 242.55;

echo "<br> Before settype";
echo "<br> Value of \$a is $a and its datatype is " .gettype($a);

// Settype

settype($a, 'int');
echo "<br> After settype";
echo "<br> Value of \$a is $a and its datatype is " .gettype($a);

?>
</body>
</html>