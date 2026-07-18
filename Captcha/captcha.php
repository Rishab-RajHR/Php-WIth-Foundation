<?php
header('Content-type:image/png');
session_start();
// echo md5("Hello");
// echo md5(microtime());
// echo substr(md5(microtime()),0,5);


$c = substr(md5(microtime()),0,5);

$_SESSION['captchaCode'] = $c;

$im = imagecreate(150,100);
imagecolorallocate($im,255,255,0);
$red = imagecolorallocate($im,255,0,0);
// imagettftext($im,35,0,10,45,$red,$c);
imagepng($im);
imagedestroy($im);
?>