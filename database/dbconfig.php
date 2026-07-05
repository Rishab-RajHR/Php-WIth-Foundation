<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpwd = "";
$dbname = "mydb2";

function my_iud($query) // insert, update, delete
{
  global $dbserver, $dbuser, $dbpwd, $dbname;
$cid = mysqli_connect($dbserver, $dbuser, $dbpwd, $dbname) or die("Connection Failed");

mysqli_select_db($dbname, $cid);
mysqli_query($query, $cid);
$n = mysqli_affected_rows($cid);
return $n;
}

?>