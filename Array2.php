<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Part-2</title>
</head>
<body>
<?php 

// Declare and Initialize the array

$a = array('PHP','HTML','ASP.net');

print_r($a);

$n=count($a);

echo "<br> $n";

for($i=0; $i<$n; $i++)
{
   echo "<br>$a[$i]";
  //  $a[$i]='abc';
}
echo "<br>";
print_r($a);

// ReadOnly loop or safe loop 
foreach($a as $x)
{
    echo "<br>$x";
    $x = 'abc';
}
echo "<br>";
print_r($a);
?>
</body>
</html>