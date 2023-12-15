<?php

include_once("config.php");
if(isset($_GET['update']))
{	

$id = mysqli_real_escape_string($mysqli, $_GET['id']); 

$old = mysqli_real_escape_string($mysqli, $_GET['old']);
$player = mysqli_real_escape_string($mysqli, $_GET['player']);
 $team = mysqli_real_escape_string($mysqli, $_GET['team']); 
 $av = mysqli_real_escape_string($mysqli, $_GET['av']);

 $result = mysqli_query($mysqli, "UPDATE players SET team='$team', av='$av' WHERE id='$id'"); 
 $updates = mysqli_query($mysqli, "INSERT INTO updates (player,old, current) VALUES ('$player', '$old', '$team')");
 
 header("Location: table.php"); 
 }
 
 elseif(isset($_GET['update1']))
{	

$idm = mysqli_real_escape_string($mysqli, $_GET['idm']); 


$manager = mysqli_real_escape_string($mysqli, $_GET['manager']);
 $teamname = mysqli_real_escape_string($mysqli, $_GET['teamname']); 
 $cash = mysqli_real_escape_string($mysqli, $_GET['cash']);

 $result = mysqli_query($mysqli, "UPDATE users SET cash='$cash' WHERE idm='$idm'"); 
 
 header("Location: manager.php"); 
 }
 
 elseif(isset($_GET['update2']))
{	

$idr = mysqli_real_escape_string($mysqli, $_GET['idr']); 

 $rumours = mysqli_real_escape_string($mysqli, $_GET['rumours']); 
 

 $result = mysqli_query($mysqli, "UPDATE players SET rumours='$rumours' WHERE id='$idr'"); 
  
  
header("Location: rumours.php"); 
 }
 
 

 ?>


<html>
<center>

</center>

</html>
