<html>
   <head>
      <title>File Functions in PHP(File Handling)</title>
   </head>
   <body>
       <form>
           <input type="submit" value="Create File" name="create">
           <input type="submit" value="Remove File" name="remove">
           <input type="submit" value="Check  File Existence" name="exist">
       </form>
   </body>
</html>
<?php
if(isset($_POST['create']))
{
   touch("abc.txt");
}
if(isset($_POST['remove']))
{
    unlink("abc.txt");
}
if(isset($_POST['exist']))
{
    if(file_exists("abc.txt"))
    {
        echo "File Exists";
    }
    else
    {
        echo "File doesnot Exists";
    }
}

?>