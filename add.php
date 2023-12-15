

<?php include_once("config.php");
 if(isset($_POST['Submit']))
  {	 
  $player = mysqli_real_escape_string($mysqli,$_POST['player']);
  
   $player_img = mysqli_real_escape_string($mysqli, $_POST['player_img']); 
   
    $position = mysqli_real_escape_string($mysqli, $_POST['position']); 
    
     $team = mysqli_real_escape_string($mysqli, $_POST['team']); 
     
      $av = mysqli_real_escape_string($mysqli, $_POST['av']); 
     
     $player1= strtoupper($player);
     
     
   if(empty($player1) || empty($team))
 { 				 
 if(empty($player1)) 
 { echo '<font color="red">Player field is empty.</font><br>';
  } 
 		 if(empty($team)) 
 		 { echo '<font color="red">Team field is empty.</font><br>'; }
 		 echo '<br>
 		 <a href="table.php">Go Back</a>'; } 
 		 else 
 		 { $result = mysqli_query($mysqli, "INSERT INTO players(player,player_img, position,team,av) VALUES('$player1','$player_img','$position','$team','$av')"); echo '<font color="green">Data added successfully.</font>'; echo '<br><a href="table.php">View Result</a>'; } } ?> 


