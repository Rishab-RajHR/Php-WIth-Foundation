<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Globals in PHP</title>
</head>
<body>
<?php 

$name = "Alex";
echo "<br> Name is $name";
hello();
// We can call a function even before it is defined in a file.

function hello()
{
    global $name;

    echo "<br> Hello to $name";
}
  echo "<br> Hello to $name";
/* 
  To use a variable declared outside the function, within a function . First line of function must be global $variablename

  This tells php not to create a new variable for a function
*/
?>
</body>
</html>