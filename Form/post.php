<html>
   <head>
      <title>Multiplication Table Via POST Method</title>
   </head>
   <body>
       <form method="post">
           Enter Any Number <input type="text" name="fnum">
           <br>
           <input type="submit" value="Print Multiplication Table" name="abc">
       </form>
   </body>
</html>
<?php
// $REQUEST for both $POST and $GET
if(isset($_POST['abc']))
{
     $num = $_POST['fnum'];
     for($i=1; $i<=10; $i++)
     {
        $res = $num * $i;
        echo "<br>$num * $i  =  $res";
     }
}
?>