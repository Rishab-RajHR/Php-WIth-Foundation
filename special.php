<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Special Program in PHP</title>
</head>
<body>
<?php
header("Content-Type: image/png");

$image = imagecreatetruecolor(400, 300);

$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

imagefill($image, 0, 0, $white);

imageline($image, 50, 50, 350, 250, $black);

imagepng($image);
imagedestroy($image);
?>
</body>
</html>