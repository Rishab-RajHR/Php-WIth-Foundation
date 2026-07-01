<?php
$im = imagecreate(200, 200) or die("Cannot Initialize new GD image stream");

imagecolorallocate($im,255,0,0); // red
imagepng($im, "image1.png");
imagedestroy($im);
?>