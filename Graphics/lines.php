<?php
$im = imagecreate(200, 200) or die("Cannot Initialize new GD image stream");

imagecolorallocate($im,255,255,0);
$red = imagecolorallocate($im,255,0,0); // red
$blue = imagecolorallocate($im,0,0,255); // blue
imageline($im, 5, 5, 195, 5, $red);
imageline($im, 5, 5, 195, 5, $blue);
imagepng($im, "image1.png");
imagedestroy($im);

echo "<img src = image2.png>";
?>