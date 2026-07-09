<!-- Header function := Used to redirectn the user from one page to another forcefully -->

<form method="post">
   <input type="submit" value="Click Me" name="abc">
</form>
<?php
// header function

if(isset($_POST['abc']))
{
    header("Location:../Math/mathfunction.php");
}  

?>