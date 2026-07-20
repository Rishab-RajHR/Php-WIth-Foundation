<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Captcha Creation And Validation</title>
</head>
<body>
   <form method="POST">
     <img src="captcha.php">
     <br>
    Enter Text <input type="text" name="captchaText">
    <input type="submit" value="Verify" name="abc">
   </form>
</body>
</html>
<?php 
session_start();
if(isset($_POST['abc']))
{
   if($_POST['captchaText']==$_SESSION['captchaCode'])
    {
        echo "Valid";
    }
    else
    {
        echo "Invalid";
    }
}
?>