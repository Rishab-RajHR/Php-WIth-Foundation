<?php
$dbserver = "localhost";
$dbuser="root";
$dbpwd="";
$dbname="student555";

function my_iud($query)  // Insert, Update, Delete
{
  global $dbserver, $dbuser, $dbpwd, $dbname;
  $cid = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname) or die("Connection Failed");
  // mysqli_select_db($dbname,$cid);
  mysqli_query($cid,$query);
  $n=mysqli_affected_rows($cid);
  mysqli_close($cid);
  return $n;
}

?>