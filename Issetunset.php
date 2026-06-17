<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Isset and Unset function</title>
 
</head>
<body>
<?php 


// Isset and Unset function
// isset function checks existence of a variable 
// isset function remove variable

$a = 15;

if(isset($a))
{
   echo "Variable \$a  exists and its Value is $a";
}
else
{
    echo "<br>Variable \$a does not exist";
}

unset($a);

if(isset($a))
{
   echo "Variable \$a  exists and its Value is $a";
}
else
{
    echo "<br>Variable \$a does not exist";
}

?>
</body>
</html>