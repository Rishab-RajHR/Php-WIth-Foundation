<body bgcolor="orange">

</body>

<?php
if(isset($_GET['abc']))
{
  $a = $_GET['fnum'];
  $b = $_GET['snum'];
  $c = $a + $b;
  echo "<br>Addition is $c";
}
?>