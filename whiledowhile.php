<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While & Do-while Loop</title>
 
</head>
<body>
<?php 

// While Loop
$i = 1;
while($i<=10)
{
    echo "<br>$i";
    $i++;
}

// Do-While Loop
$i = 1;
do
{
    echo "<br>$i";
    $i = $i+2;
}while($i<=10);
?>
</body>
</html>