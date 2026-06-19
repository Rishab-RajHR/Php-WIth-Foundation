<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Part-3</title>
</head>
<body>
<?php 
$a = array('black', 29.65, true, 'permanent');

foreach($a as $x)
{
    echo "<br>Value is $x and its datatype is" .gettype($x);
}
?>
</body>
</html>