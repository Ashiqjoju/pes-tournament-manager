<?php 

include 'config.php';

$phone=$_GET['phone'];
$pt=$_GET['point'];
$p=$pt*3;
$cp=10-$pt;
$point=$p-$cp;

$sql = "UPDATE users SET point='$point' WHERE phone='$phone'";
if ($mysqli->query($sql) === TRUE)
{
  header ("location: teamlogin.php?phone=$phone");
} 


?>