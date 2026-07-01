<html>
   <head>
       <title>Restart And ShutDown</title>
   </head>
   <body>
      <form method="post">
          <input type="submit" name="restart" value="Restart">
          <input type="submit" name="shutdown" value="ShutDown">
      </form>
   </body>
</html>
<?php
if(isset($_POST['restart']))
{
    system('shutdown -r -t  0');
}
if(isset($_POST['shutdown']))
{
    // system('shutdown -r -t  0');
    exec('shutdown -r -t 0 ');
}
?>