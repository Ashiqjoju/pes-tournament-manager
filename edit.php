<?php // including the database connection file include_once("config.php"); ?> <?php //getting id from url $id = $_GET['id']; $teamname = $_GET['player'];//selecting data associated with this particular id $result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id"); while($res = mysqli_fetch_array($result)) { 	$teamname = $res['teamname']; 	$name = $res['name']; 	$goal = $res['goal']; $point = $res['point']; }  ?> 
<br><br>
<center><h1 style=""><?php echo $_GET['player']; ?></h1>

<html> <head>	 	<title>Edit Data</title> </head>

 <style>
 table{
  width:80%;
 }
 th, td {
  text-align: left;
  padding: 30px;
  Font-size:25px;
}
select {
background-color: white;
  border: none;
  padding: 0 1em 0 0;
  margin: 0;
  width: 100%;
  font-family: inherit;
  font-size: 30px;
  cursor: inherit;
  line-height: inherit;
}
input {
 width:100%;
 height:50px;
 font-size:30px
}
tr:nth-child(even) {background-color: #f2f2f2;}
 </style>
 
 <body > 	
  	 <br><br> 	 
  	
  	
  		<form name="form1" method="GET" action="editprocess.php"> 	
  			<table style="" border="1" width="40%" height="10%"> 			
                        <tr> 	
                        <td>PLAYER NAME</td> 
                        <td>
                        <input type="hidden" name="old" value="<?php echo $_GET['team']; ?>">
                        
                        <input type="text" name="player" value="<?php echo $_GET['player']; ?>" ></td> 			
                        </tr> 
			
                        <tr> 
                        <td>EDIT TEAM </td> 
                          <td>
                          <select name="team" id="team">
  <option value="<?php echo $_GET['team'];?>"><?php echo $_GET['team'];?></option>
  <option value="milan">AC Milan</option>
  <option value="arsenal">Arsenal</option>
  <option value="atm">Atletico Madrid</option>
  <option value="bayern">Bayern</option>
  <option value="barca">Barcelona</option>
  <option value="juventus">Juventus</option>
  <option value="chelsea">Chelsea</option>
  <option value="city">Manchester city</option>
  <option value="united">Manchester United</option>
  <option value="psg">Paris Saint Germain</option>
  <option value="real">Real Madrid</option>
  <option value="unsold">Unsold</option>
  
</select>
                          
                         <!-- <input type="text" name="team" value="<?php echo $_GET['team'];?>">
                         -->
                         </td> 	
                          </tr> 
                          <tr>
                          <td>EDIT AUCTION VALUE</td>
                          <td><input type="tel" name="av" value="<?php echo $_GET['av'];?>"></td>
                          </tr>
  			
  			
  				<tr> 				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?></td> 			
  					<td><center><input type="submit" name="update" value="Update"></td> 			</tr> 		</table> 	</form> 
                                        
                                       <br><br>
                                       <a style="color:white" href=table.php>Point Table</a>
                                       <br><br>
                                       <a style="color:white" href="main.html">Main page</a>
                                       </center>
                                        
                                        </body> </html>
