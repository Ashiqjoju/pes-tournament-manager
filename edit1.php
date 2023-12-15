<?php 

// including the database connection file 
include_once("config.php"); 

?> <?php //getting id from url 
$idm = $_GET['idm']; $manager = $_GET['manager'];
//selecting data associated with this particular id

 $result = mysqli_query($mysqli, "SELECT * FROM users WHERE idm=$idm "); 
 while($res = mysqli_fetch_array($result)) 
 { 
 	$manager = $res['manager']; 
 	$teamname = $res['teamname']; 
 		$cash = $res['cash']; 
 } 
 
  ?> 
<br><br>
<center><h1 style=""><?php echo $_GET['manager']; ?></h1>

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
                        <td>MANAGER NAME</td> 
                        <td><input type="text" name="player" value="<?php echo $_GET['manager']; ?>" disabled></td> 			
                        </tr> 
			
                        <tr> 
                        <td>TEAM </td> 
                          <td>
                      <!--    <select name="team" id="team">
  <option value="<?php echo $_GET['teamname'];?>">
  
  <?php echo $_GET['team'];?></option>
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
  
</select> -->
                          
<input type="text" name="teamname" value="<?php echo $_GET['teamname'];?>" Disabled>
                        
                         </td> 	
                          </tr> 
                          <tr>
                          <td>EDIT BALANCE</td>
                          <td><input type="tel" name="cash" value="<?php echo $_GET['cash'];?>"></td>
                          </tr>
  			
  			
  				<tr> 				<td><input type="hidden" name="idm" value=<?php echo $_GET['idm'];?></td> 			
  					<td><center><input type="submit" name="update1" value="Update"></td> 			</tr> 		</table> 	</form> 
                                        
                                       <br><br>
                                       <a style="color:white" href=table.php>players Table</a>
                                       <br><br>
                                       <a style="color:white" href="index.html">Team page</a>
                                       </center>
                                       
                                       
                                       
                                        
                                        </body> </html>
