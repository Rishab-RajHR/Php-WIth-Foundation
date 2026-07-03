<html>
  <head>
       <title>Uploading Section</title>
  </head>
  <body>
     <form method="post" enctype="multipart/form-data">
       Select File For Uploading <input type="file" name="myfile">
       <br>
       <input type="submit" name="abc" value="Upload">
     </form>
  </body>
</html>
<?php
if(isset($_POST['abc']))
{
  $name = $_FILES['myfile']['name'];
  $size = $_FILES['myfile']['size'];
  $type = $_FILES['myfile']['type'];
  $tmp_name = $_FILES['myfile']['tmp_name'];

  if(!empty($name))
  {
     $loc = "uploads/";
     if(move_uploaded_file($tmp_name , $loc.$name)){
         echo "<br>File Uploaded Successfully<br>Type is $type <br>Size is $size";
         $fileloc = $loc.$name;
         echo "<br><img src='fileloc' width='200' height='200' >";
     }
     else{
       echo "There was an error!";
     }
  }
  else{
     echo "<br> Please Choose a File to Upload";
  }
}
?>