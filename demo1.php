<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
padding:0;
margin:0;
}

body {
padding:0;

  font-family: Monospace;
}

.mobile-container {
  max-width: 480px;
  margin: auto;
  background-color: white;
  
  color: black;
  border-radius: 10px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
}

.topnav #myLinks {

  display: none;
}

.topnav a {
  color: white;
  padding: 14px 14px;
  text-decoration: none;
  font-size: 20px;
  display: block;
}

.topnav a.icon {
  background: black;
  width:50px;
  display: block;
  height:70px;
  Padding-top:24px;
  position: absolute;
  right: 0;
  top: 0;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background:#598AC1;
  color: white;
}

</style>
</head>
<body>

<!-- Simulate a smartphone / tablet -->
<div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav" >
  <a href="#home" class="active"><img class="image" width="70px"src="img.png" alt=""></a>
  <div id="myLinks">
    <a href="#"></a>
    <a href="index.php">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
    <a href="demo.php">Team list</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div style="padding-left:16px">
  
  
  
  
  
  <!-- main -->
  
  
  
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
          $cf_query = "SELECT * FROM players where position= 'CENTER FORWARD' OR position='LEFT WINGER' OR position='SECOND STRIKER' OR position= 'RIGHT WINGER'";
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
    
    // Default Order
 else {
        $default_query = "SELECT * FROM players  WHERE av IS NOT NULL ";
        $result = executeQuery($default_query);
}


function executeQuery($query)
{
    $connect = mysqli_connect("fdb27.biz.nf", "3616710_booking", "ashikjoju8055", "3616710_booking");
    $result = mysqli_query($connect, $query);
    return $result;
}

   
   

   ?>

<!-- search php -->


<!-- -->



<!DOCTYPE html>
<html>
<head>
		<title>MML Teams</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="htps://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body>


<body >
				
				<?php
	if (isset($_POST['search'])) {
		$response = "<ul><li>No data found!</li></ul>";

		$connection = new mysqli('fdb27.biz.nf', '3616710_booking', 'ashikjoju8055', '3616710_booking');
		$q = $connection->real_escape_string($_POST['q']);

		$sql = $connection->query("SELECT player FROM players WHERE player LIKE '%$q%'");
		if ($sql->num_rows > 0) {
			$response = "<ul class='list-group'>";

			while ($data = $sql->fetch_array())
				$response .= "<li class='list-group-item'>" . $data['player'] . "</li>";

			$response .= "</ul>";
		}


		exit($response);
	}
?>
<div>

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="htps://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
       <style type="text/css">
         
            li:hover {
                color: silver;
                background: #0088cc;
            }
            #searchBox{
            Width:100px;
            
            Font-size:20px;
            
            }
            #asq1{
            width:100px;
            border:none;
            Height:49px;
            font-size:20px;
            Color:white;
            }
        </style>
   
        <form action="details.php" method="get" class="p-3">
          <div class="input-group">
            <input type="text" name="search" style="width:70%; font-size:10px;height:35px;" id="searchBox" class="form-control form-control-lg rounded-0 border-info" placeholder="Search by player name..." autocomplete="off" required>
            <div class="input-group-append">
              <input type="submit" id="asq1" style="background-color:#598AC1; Font-family:Monospace; height:35px; font-size:10px;"name="submit2" value="Search" clas="btn btn-info btn-lg rounded-0">
            </div>
          </div>
        </form>
      
      
        <div class="list-group" id="response">
        				
          <!-- Here autocomplete list will be display -->
        </div>
        
        </div>
      
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#searchBox").keyup(function () {
                    var query = $("#searchBox").val();

                    if (query.length > 0) {
                        $.ajax(
                            {
                                url: 'action.php',
                                method: 'POST',
                                data: {
                                    search: 1,
                                    q: query
                                },
                                success: function (data) {
                                    $("#response").html(data);
                                },
                                dataType: 'text'
                            }
                        );
                    }
                });

                $(document).on('click', 'li', function () {
                    var country = $(this).text();
                    $("#searchBox").val(country);
                    $("#response").html("");
                });
            });
        </script>






<form action="demo1.php" method="post">
         
    
            <style>

#asq{
 
 background:#598AC1;
 border:none;
 Border-radius:5px;
 
 color:white;
 font-size:10px;
 Font-family: Monospace;

 width:80%;
 height:35px; 
}

</style>

<body>

<center>
				<div class="container">

<table border="0" width="100%"><tr>
				<td><center><input id="asq" type="submit" name="DESC" value="FREE AGENTS"></td>
				<td><center><input id="asq"type="submit" name="ASC" value="ALL PLAYERS"></td></tr>
                                <tr style="background:white;">
				<td><center><input id="asq" type="submit" name="CF" value="FORWARDS"></td>
				<td><center><input id="asq"type="submit" name="CMF" value="MIDFIELDERS"></td></tr>
                                <tr>
				<td><center><input id="asq" type="submit" name="CB" value="DEFENDERS"></td>
				<td><center><input id="asq"type="submit" name="GK" value="GOALKEEPERS"></td></tr>
                                </table>
  </center>
  
                   
	<style>
		button{	width:300px;
                Height:50px;
		border:none;
                
			}	
                        th{
                        
                        padding:10px;
                        font-size:10px;
                        
                        }
                        th, td {
  padding: 5px;
  text-align: left;
}
tr:nth-child(even) {background-color: #f2f2f2;}
                   
</style>




<centre>
<div class="container">
  <span style="font-size:08px; Font-family: Monospace;">VISIT <a href="https://www.transfermarkt.com/marktwertetop/wertvollstespieler">TRANSFER MARKET</a> FOR CURRENT MARKET VALUE.</span>
  <br><br>
    <table border="1" style="Font-family: Monospace;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		       
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>MARKET VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>ML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><img src='".$res['player_img']. "' width='30px'></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='18px'></td>
    						
    						<td style='font-size:12px;' ><center> € ".$res['av']. "M</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
    	</div><br><br>
    	
    	
        <style>
				footer {
  text-align: center;
  padding: 10px;
  margin :0;
  
  background-color: ;
  color: white;
}
</style>
               
<footer>
<div class="footer-copyright">&copy; 2021 Octane, all rights reserved</div>
</footer>
        
        
        
        
        
    	<!--  
    	

<button style="background:#598AC1;" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">ARSENAL</button>
  <div id="demo3" class="collapse"><br>
  <style>
  				table{
  				border-radius:5px;
  			
  				}
th {
				
				background-color:#d3d3d3;
}
th {
  padding: 10px;
}
td {
  padding:2px;
}
</style>
    <table border="1" style="border:2px solid black;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px;"><center>MARKET VALUE</center></th>
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>AUCTION VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result2)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>MML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><center><img src='".$res['player_img']. "' width='25px'></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='20px'></td>
    						<td><center> € ".$res['mv']. "</td>
    						<td><center> € ".$res['av']. "</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
    	</div><br><br>
    	
    	<button style="background:#598AC1;" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo4">ATLETICO MADRID</button>
  <div id="demo4" class="collapse"><br>
  <style>
  				table{
  				border-radius:5px;
  			
  				}
th {
				
				background-color:#d3d3d3;
}
th {
  padding: 10px;
}
td {
  padding:2px;
}
</style>
    <table border="1" style="border:2px solid black;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px;"><center>MARKET VALUE</center></th>
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>AUCTION VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result3)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>MML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><center><img src='".$res['player_img']. "'width='25px' ></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='19px'></td>
    						<td><center> € ".$res['mv']. "</td>
    						<td><center> € ".$res['av']. "</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
    	</div><br><br>
    	
    	

                        

<!-- End smartphone / tablet look -->

</div>
<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

</body>
</html>
