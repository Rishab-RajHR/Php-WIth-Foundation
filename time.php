<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Time Method in PHP</title>
</head>
<body>
<?php 
$s = time();
// Smallest unit of time, that can measured in php is seconds
echo "<br>Time since 1st Jan 1970 00:00:00 am";
// Base Date of a system, in php base date is 1st Jan 1970
echo "<br>Second=$s";
$m = $s/60;
echo "<br>Minutes=$m";
$h = $m/60;
echo "<br>Hours=$h";
$d = $h/60;
echo "<br>Day=$d";
?>
</body>
</html>