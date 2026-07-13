<!-- Basename function => returns the filename from the path -->

<?php 
$path = "myfile2.txt";
// basename() function returns the filename from a path

echo basename($path);
echo "<br>";
echo basename($path,".txt"); // For excluding the txt extension in the output

$path = "readfile() filesize.php";
echo "<br>";
echo basename($path);
echo "<br>";
echo basename($path,".php");  // For excluding the php extension in the output
?>