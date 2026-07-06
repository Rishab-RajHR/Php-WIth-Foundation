<html>
  <head>
      <title>Database Example by Alex Pandian</title>
  </head>
  <body>
     <form method="post">
        Enter Team ID <input type="text" name="tid">
        <br>
        Enter Team Name <input type="text" name="tname">
        <br>
        <input type="submit" value="Save" name="save">
        <input type="submit" value="Modify" name="modify">
        <input type="submit" value="Remove" name="remove">
        <input type="submit" value="Search" name="search">
     </form>
  </body>
</html>

<?php
include "dbconfig.php";
if(isset($_POST['save']))
{
   $tid = $_POST['tid'];
   $tname = $_POST['tname'];
   $query = "INSERT INTO team VALUES('$tid', '$tname')";
   $n = my_iud($query);
   echo "$n Record Saved";
}

if(isset($_POST['modify']))
{
   $tid = $_POST['tid'];
   $tname = $_POST['tname'];
   $query = "UPDATE team set teamname='$tname' WHERE teamid=$tid";
   $n = my_iud($query);
   echo "$n Record Modified";
}

if(isset($_POST['remove']))
{
    $tid = $_POST['tid'];
    $tname = $_POST['tname'];
    $query = "Delete from team where teamid=$tid";
    $n = my_iud($query);
    echo "$n Record Removed";
}

if(isset($_POST['search']))
{
    $tid = $_POST['tid'];
    $tname = $_POST['tname'];
    $query = "SELECT * FROM team";   // * means all
    $rs = my_select($query);
    $n = mysqli_num_rows($rs);
    echo "$n Record Found";
}
?>