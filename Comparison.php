<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>== and ===</title>
</head>
<body>
<?php 
// == compares value only
// == compares valuea nd datatype both

$a = 1;
$b = "1";

if($a === $b)
{
    echo "<br>Same";
}
else
{
    echo "<br> Not Same";
}

?>
</body>
</html>