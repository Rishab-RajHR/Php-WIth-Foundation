<html>
    <head>
         <title>Append Operation</title>
    </head>
    <body>
        <form method="post">
            Enter Name <input type="text" name="fname">
            <br>
            <input type="submit" value="Submit" name="abc">
        </form>
    </body>
</html>

<?php
if(isset($_POST['abc']))
{
     $name = $_POST['fname'];
     if(!empty($name))
     {
         $f = fopen("myfile1.txt","a");  // a = append mode

         fwrite($f, $name."\n");

         fclose($f);
     }
     else
     {
      echo "<br>Please Type Your Name";
     }
}

?>