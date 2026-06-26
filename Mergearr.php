<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Merge Arrays</title>
 
</head>
<body>
<?php 

$a = array('Jan','Feb','March','Apr','May','June'); // 2 4 6 8
$b = array('July','Aug','Sep','Oct','Nov','Dec');  // 1 3 5 7

echo "<br> Odd Sem is  <br>";
print_r($b);

echo "<br> Even Sem is <br>";
print_r($a);

$year = array_merge($b,$a);

echo "<br>A Year is <br>";


print_r($year);

?>
</body>
</html>