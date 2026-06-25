<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>
</head>
<body>
<?php

$a = array(
    'a','b','c','d','e','f','g','h','i','j','k','l','m',
    'n','o','p','q','r','s','t','u','v','w','x','y','z',
    'A','B','C','D','E','F','G','H','I','J','K','L','M',
    'N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0');

$length = array(5,6,7,8,9,10);    // Range of Password
shuffle($length);
$n=$length[0];

echo "<br> n is $n";
$str = "";

for($i=0; $i<$n; $i++)
{
    shuffle($a);
    $str.=$a[0];  // $str = $str.$a[0]
    echo "<br>Your Password is $str";
}
echo"<br>Your final Password is $str";

?>
</body>
</html>