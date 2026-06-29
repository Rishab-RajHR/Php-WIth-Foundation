<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Defined Function</title>
</head>
<body>
<?php 

$a = 35;
$b = 44;
$c = add($a,$b);  // actual parameters
echo "<br> Answer is $c";

// Parameters in function declaration are called formal parameters
function add($x,$y)
{
    return $x + $y;
}

?>
</body>
</html>