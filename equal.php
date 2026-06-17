<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>== and === </title>
 
</head>
<body>
<?php 
/*
== and === 
1) == compares value only
2) === compares both value and datatype
*/

$a = 15;
$b = "15";

if($a===$b)
{
    echo "<br>Same";
}
else{
  echo "<br>Different";
}

?>
</body>
</html>