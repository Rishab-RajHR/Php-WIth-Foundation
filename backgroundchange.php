<!-- Change background color on page refresh -->

<?php 
$color = array("red","blue","green","orange","black","pink","brown","purple");

shuffle($color);

print_r($color);

echo "<br>Your Lucky Color is $color[0]";

?>

<html>
  <head>
      <title>Background Color</title>
  </head>
  <body bgcolor="<?php echo $color[0]; ?>">
       
  </body>
</html>