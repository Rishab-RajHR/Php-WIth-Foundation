<!--  gd info is for graphics-->
<?php  
// php uses gd library for implementting graphics

// to check its availability

$x = gd_info();

print_r($x);

foreach($x as $k=>$v)
{
   echo "<br>$k is $v";
}
?>