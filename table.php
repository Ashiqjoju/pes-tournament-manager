<?php include_once("config.php"); 
$result = mysqli_query($mysqli, "SELECT * FROM players ORDER BY team ASC"); 
?>



<style>
th, td {
  padding: 25px;
  text-align: left;
}
</style>
<?php

   
   if(isset($_POST['ASC']))
{
    $asc_query = "SELECT * FROM players ORDER BY id ASC";
    $result = executeQuery($asc_query);
}

// Descending Order
elseif (isset ($_POST['DESC'])) 
    {
          $desc_query = "SELECT * FROM players where team= 'unsold'";
          $result = executeQuery($desc_query);
    }
    
    elseif (isset ($_POST['CF'])) 
    {
          $cf_query = "SELECT * FROM players where position= 'CENTER FORWARD' OR position='LEFT WINGER' OR position= 'RIGHT WINGER'";
          $result = executeQuery($cf_query);
    }
    
    elseif (isset ($_POST['CMF'])) 
    {
          $cmf_query = "SELECT * FROM players where position= 'CENTER MIDFIELDER' OR position='CENTRAL MIDFIELDER' OR position= 'ATTACKING MIDFIELDER' OR position='DEFENSIVE MIDFIELDER' ORDER BY position ASC";
          $result = executeQuery($cmf_query);
    }
    elseif (isset ($_POST['CB'])) 
    {
          $cb_query = "SELECT * FROM players where position='CENTER-BACK' OR position='CENTER BACK' ORDER BY position ASC";
          $result = executeQuery($cb_query);
    }
    
    elseif (isset ($_POST['GK'])) 
    {
          $gk_query = "SELECT * FROM players where position='GOALKEEPER'";
          $result = executeQuery($gk_query);
    }
   /* elseif (isset ($_POST['USER'])) 
    {
          $user_query = "SELECT * FROM users ";
          $result = executeQuery($user_query);
    }*/
    
    // Default Order
 else {
        $default_query = "SELECT * FROM players  ORDER BY team ASC ";
        $result = executeQuery($default_query);
}


function executeQuery($query)
{
    $connect = mysqli_connect("fdb27.biz.nf", "3616710_booking", "ashikjoju8055", "3616710_booking");
    $result = mysqli_query($connect, $query);
    return $result;
}

   
   

   ?>
   

<html> <head>	 	<title>Display data in table with edit button </title> </head>
<body bgcolor=#fff > <br><br>

<br><br> 
<br><br>

<form action="table.php" method="post">
         
    
            <style>
            
            
            table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}


#asq {
 
 Border:none;
 background:#f2f2f2;
 Color:blue;
 Width:80%;
 font-size:20px;
 
}
#asq1 {
 Background:#fff;
 Border:none;
 Width:80%;
 Font-size:20px;
 Color: blue;
}

</style>

<body>

<center>
				

<table border="1" width="60%"><tr >
				<td><center><input id="asq1" type="submit" name="DESC" value="FREE AGENTS"></td>
				<td><center><input id="asq1"type="submit" name="ASC" value="ALL PLAYERS"></td></tr>
                                <tr>
				<td><center><input id="asq" type="submit" name="CF" value="CENTER FORWARDS"></td>
                                
				<td><center><input id="asq"type="submit" name="CMF" value="CENTRAL MIDFIELDERS"></td></tr>
                                <tr>
				<td><center><input id="asq1" type="submit" name="CB" value="CENTER BACKS"></td>
                                
				<td><center><input id="asq1"type="submit" name="GK" value="GOALKEEPERS"></td></tr>
                                
                                <tr>
                                <td><center><a href="manager.php" >CLICK TO EDIT TEAM BALANCE</a></td>
                                
                                <td><center><a href="add.html" > CLICK TO ADD NEW PLAYER</a></td></tr>
                                <tr>
                                <td><center><a href="rumours.php">CLICK TO EDIT RUMOURS</a></td>
                              <td><center><a href="index.php">GO TO MAIN PAGE</a></tr>
                                </table>
  </center>
  <br>
  <br>
  
  
  

<table style="color:black" width='100%'height='50%' border='1'>
<tr style="color:black" bgcolor='yellow'> 
<td><center>Code</td>
<td><center>Player Name</td> 	
<td><center>Team Name</td> 	
<td><center>Auction value</td>	<td><center>Update</td>	 	</tr> 

<?php 	 	
while($res = mysqli_fetch_array($result))
{ 		 		
echo "<tr>"; 	
echo "<td><center>MMLS02".$res['id']."</td>";
echo "<td bgcolor=''><center>".$res['player']."</center></td>"; 	
echo "<td> <center>".$res['team']."</td>"; 
echo "<td><center>".$res['av']."</td>";
echo "<td bgcolor='green'><center><a href='edit.php?id=$res[id]&player=$res[player]&team=$res[team]&av=$res[av]'><font color='white'>Edit</a>"; 	} 	
echo "<tr>";




?> 	
</table> 


<br><br>
<center>
<a style="color:white" href=index.html>  INDEX PAGE </a></center>
</body> </html>
