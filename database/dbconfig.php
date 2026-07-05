<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpwd = "";
$dbname = "mydb2";

function my_iud($query) // insert, update, delete
{
  global $dbserver, $dbuser, $dbpwd, $dbname;
$cid = mysqli_connect($dbserver, $dbuser, $dbpwd, $dbname) or die("Connection Failed");

mysqli_select_db($cid, $dbname);
mysqli_query($cid, $query);
$n = mysqli_affected_rows($cid);
return $n;
}

function my_select($query) // search
{
  global $dbserver, $dbuser, $dbpwd, $dbname;
$cid = mysqli_connect($dbserver, $dbuser, $dbpwd, $dbname) or die("Connection Failed");

mysqli_select_db($cid, $dbname);
$rs = mysqli_query( $cid, $query);
return $rs;
}

?>