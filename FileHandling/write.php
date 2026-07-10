<?php
$f = fopen("myfile.txt","w");  // w = write mode

fwrite($f, "Alex Academy");

fclose($f);

?>