<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Type</title>
 
</head>
<body>
<?php 
// $a=false;
// $a=24;
// $a=2.4;
$a=true;
// $a="hello";
// $a='p';

// Integer
if(is_integer($a))
{
   echo "<br/> Yes \$a is integer and its value is $a";
}

// Double
if(is_double($a))
{
   echo "<br/> Yes \$a is double and its value is $a";
}

// String
if(is_string($a))
{
   echo "<br/> Yes \$a is string and its value is $a";
}

// Bool
if(is_bool($a))
{
   echo "<br/> Yes \$a is bool and its value is $a";
}
?>
</body>
</html>