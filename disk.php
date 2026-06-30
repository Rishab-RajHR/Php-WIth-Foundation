<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disk Free Space and Total Space</title>
 
</head>
<body>
<?php 
/* The disk_free_space() function returns the free space, in bytes , of the specified directory . */

echo disk_free_space("C:");
$size = disk_free_space("C:");
echo "<br> " . $size/1073741824;

/*
1 Byte = 8 bits
1 KiloByte(kb) = 1024 Bytes
1 megaBytes(mb) = 1024 kb = 1048576 Bytes
1 gigaBytes(Gb) = 1024 Mb = 1073741824 Bytes

*/

/* The disk_total_space() function returns the total space, in bytes, of the specified directory*/

echo "<br>". disk_total_space("C:");
$size = disk_total_space("C:");
echo "<br> " . $size/1073741824;

?>
</body>
</html>