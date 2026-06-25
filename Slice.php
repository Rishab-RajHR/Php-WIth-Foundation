<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slice Method</title>
</head>
<body>
<?php 

$a = array('Jan', 'Feb', 'Mar', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');

$summer = array_slice($a,2,4);
// $a = array
// 2 starting index
// 4 no. of elements

echo "<br> Summer is <br>";
print_r($summer);
?>
</body>
</html>