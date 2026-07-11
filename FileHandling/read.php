<?php
$f = fopen("myfile1.txt","r"); // r = read mode

$filedata = file("myfile1.txt");

print_r($filedata);

echo '<table border="5" bgcolor="orange" align="center" >';
foreach($filedata as $fname)
{
      echo "<tr><td>$fname</td></tr>";
}

echo "</table>";

fclose($f);
?>