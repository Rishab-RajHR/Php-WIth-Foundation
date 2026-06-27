<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Explode and Checkout in PHP</title>
 
</head>
<body>
<?php 
$date = "31-10-2025";
$a = explode("-",$date);
// explode function break a string into array

$d = $a[0];
$m = $a[1];
$y = $a[2];

if(checkdate($m,$d,$y))
//checkdate function is used to validate date
{
   echo "<br> A Valid Date";
}
else
{
    echo "<br> A Invalid Date";
}
?>
</body>
</html>