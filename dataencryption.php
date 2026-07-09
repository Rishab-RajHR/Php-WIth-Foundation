<!-- Data Encryption in PHP Generating the hash value -->

<?php
$string = "Alex Pandian";

// md5 will encrypt the string
$string_hash = md5($string);

echo "Hash of $string is $string_hash";
?>