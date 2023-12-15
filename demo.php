<!doctype html>
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MML LEAGUE</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/easy-responsive-tabs.min.css">
        <link rel="stylesheet" href="css/tabs.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
       

    <!-- Laoding page  -->
    <div class="preloader">
      <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- End Laoding page  -->

    <!-- Begin HorizontalTab style 6 -->
    <section class="section-full image-bg">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <a href="index.php"><div class="responsive-logo hidden-lg hidden-md hidden-sm"><img src="img/img.png"  width="30%"></div></a>
            
            <!-- Begin .HorizontalTab -->
            <div  class="VerticalTab VerticalTab_hash_scroll VerticalTab_6 tabs_ver_6">
            
              <ul class="resp-tabs-list hor_1" >
                <a href="index.php"><div class="logo"><img src="img/img.png" width="30%"></div></a>
                <li class="tabs-1" data-tab-name="profile">
                				<style>
                								
                								div:hover {
  color:white;
}
                				</style>
                				
                				<span class="tabs-text" styel="">Team List</span></li>
                <li class="tabs-2" data-tab-name="resume">
                				<span class="tabs-text">About Us</span></li>
                <li class="tabs-3" data-tab-name="portfolio"><span class="tabs-text">Team Balance</span></li>             
                <li class="tabs-4" data-tab-name="contact"><span class="tabs-text">Contact Us</span></li>
              </ul>
              
              <div class="resp-tabs-container hor_1 tabs_scroll">
                
                <div class="fc-tab-1">
                <br>
                  <div class="home-container">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="left-content">
                          <div class="left-line"></div> 
                         <h2>MUPLIYAM MEGA LEAGUE <em style="color:#598ac1">Season 3</em></h2>
                        <!--  <p>For applying loan you can click on MML bank, For viewing teams and players click on MMl teams/players</p>
                          <div class="primary-button">
                            <a href="#">MML BANK</a>
                          
                            <a href="#">MML Teams/players		</a>
                          </div>
                           
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="right-content">
                          <img src="img/home-image.jpeg">
                      -->  
                      <!-- demo.php -->
                      <?php  
/*
   $conn = new mysqli('fdb27.biz.nf','3616710_booking','ashikjoju8055','3616710_booking');
   if($conn->connect_error){
   die('connection failed : '.$conn->connect_error);
   }
   else
   {



    $sql1=mysqli_query($conn,"SELECT * FROM users where manager='AKTHER'");
    
    $rows = mysqli_fetch_array($sql1);
    if(is_array($rows))
    {
      
      
    }
    else
    {
     
         header("Location: index.php");
    }
}

*/



   $conn = new mysqli('fdb27.biz.nf','3616710_booking','ashikjoju8055','3616710_booking');
   if($conn->connect_error){
   die('connection failed : '.$conn->connect_error);
   }
   else
   {



    $sqla="select cash from users ORDER BY idm ASC";
    $results = mysqli_query($conn, $sqla);
    $datas = array();
    if(mysqli_num_rows($results)>0)
    {
    				while($rows =mysqli_fetch_assoc($results))
    				{
    								$datas[] = $rows;
    				}
    }
    
    else
    {
     
         header("Location: index.php");
    }
}


?>



  
  
  
  <!-- main -->
  
  
  
  <?php
{

   


   $conn = new mysqli('fdb27.biz.nf','3616710_booking','ashikjoju8055','3616710_booking');
   if($conn->connect_error){
   die('connection failed : '.$conn->connect_error);
   }
   else
   {
   $result1=mysqli_query($conn,"SELECT * FROM players where team='milan'");
   $result2=mysqli_query($conn,"SELECT * FROM players where team='arsenal'");
   $result3=mysqli_query($conn,"SELECT * FROM players where team='atm'");
   $result4=mysqli_query($conn,"SELECT * FROM players where team='barca'");
   $result5=mysqli_query($conn,"SELECT * FROM players where team='bayern'");
   $result6=mysqli_query($conn,"SELECT * FROM players where team='chelsea'");
   $result7=mysqli_query($conn,"SELECT * FROM players where team='juventus'");
   $result8=mysqli_query($conn,"SELECT * FROM players where team='city'");
   $result9=mysqli_query($conn,"SELECT * FROM players where team='united'");
   $result10=mysqli_query($conn,"SELECT * FROM players where team='psg'");
   $result11=mysqli_query($conn,"SELECT * FROM players where team='real'");
   }

   }

   ?>








<!DOCTYPE html>
<html>
<head>

		<title>MML Teams</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body>
				
	<style>
		button{	width:300px;
                Height:50px;
		border:none;
                        
			}
                        #collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

#active, #collapsible:hover {
  background-color: #555;
}

#collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}
#active:after {
  content: "\2212";
}

#content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
table{

Font-family: Monospace;
color:black;
}
th,td{
padding:70px;
}

                   
</style>
<center><b>
<div class="container">
  <h2 style="color:#598AC1"></h2>
  <p>Click to view signed players by each club.</p><br>
  
  <br>
  <button style="background-color:#598Ac1;font-size:;font-weight:bold; " id="collapsible" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">LIST OF PLAYERS</button>
  <div id="demo" clss="collapse"><br>
  
  <a href="demo1.php"> <u>Click here to view all players list</u> </a>
  </div><br><br>
  
  
  <button style="background:#598AC1;" id="collapsible" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">AC MILAN</button>
  <div id="demo1" class="collapse"><br>
  <table border="0" style="	background:black;border-radius:5px;	color:#598AC1;" width="100%" height="50px">
	<tr>
		<th style="background:white;"> 
			<p align="left">	MANAGER : PRANAV</p>
		</th>
		<th style="background:white;">
			<p align="right"> BALANCE : € <?php foreach ($datas[0] as $data){	echo $data;}?>M</p>
		</th>
			</tr>					
</table>

    <table border="1" style="border:2px solid black;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		       
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>MARKET VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result1)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>MML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><img src='".$res['player_img']. "' width='25px'></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='14px'></td>
    						
    						<td><center> € ".$res['av']. "M</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
        
        <hr>
    	</div>
        <br><br>
    	
    	
    	
    	

<button style="background:#598AC1;" type="button" id="collapsible" class="btn btn-info" data-toggle="collapse" data-target="#demo3">ARSENAL</button>
  <div id="demo3" class="collapse"><br>
  <style>
  				table{
  				border-radius:5px;
  			
  				}
th {
				
				background-color:#d3d3d3;
}

th, td {
  text-align: left;
  padding: 20px;
}

tr:nth-child(even) {background-color: #f2f2f2;}


</style><table border="0" style="		color:#598AC1;" width="100%" height="50px">
	<tr>
		<th style="background:white;"> 
			<p align="left">	MANAGER : AKTHER</p>
		</th>
		<th style="background:white;">
			<p align="right"> BALANCE : € <?php foreach ($datas[1] as $data){	echo $data;}?>M</p>
		</th>
			</tr>					
</table>

    <table border="1" style="border:2px solid black;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		       
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>MARKET VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result2)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>MML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><img src='".$res['player_img']. "' width='25px'></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='20px'></td>
    						
    						<td><center> € ".$res['av']. "M</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
    	</div><br><br>
    	
    	<button id="collapsible" style="background:#598AC1;" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo4">ATLETICO MADRID</button>
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

<table border="0" style="	background:black;border-radius:5px; color:#598AC1" width="100%" height="50px">
	<tr>
		<th style="background:white;"> 
			<p align="left">	MANAGER : JERIN</p>
		</th>
		<th style="background:white;">
			<p align="right"> BALANCE : € <?php foreach ($datas[2] as $data){	echo $data;}?>M</p>
		</th>
			</tr>					
</table>

    <table border="1" style="border:2px solid black;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		       
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>MARKET VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result3)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>MML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><img src='".$res['player_img']. "'width='25px' ></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='19px'></td>
    					
    						<td><center> € ".$res['av']. "M</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
    	</div><br><br>
    	
    	
    	<button id="collapsible" style="background:#598AC1;" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo5">BARCELONA</button>
  <div id="demo5" class="collapse"><br>
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
<table border="0" style="	background:black;border-radius:5px;color:#598ac1" width="100%" height="50px">
	<tr>
		<th style="background:white;"> 
			<p align="left">	MANAGER : MR KOMALI</p>
		</th>
		<th style="background:white;">
			<p align="right"> BALANCE : € <?php foreach ($datas[3] as $data){	echo $data;}?>M</p>
		</th>
			</tr>					
</table>


    <table border="1" style="border:2px solid black;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		       
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>MARKET VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result4)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>MML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><img src='".$res['player_img']. "' width='25px'></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='25px'></td>
    						
    						<td><center> € ".$res['av']. "M</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
    	</div><br><br>
    	
    	<button id="collapsible" style="background:#598AC1;" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo6">BAYERN MUNICH</button>
  <div id="demo6" class="collapse"><br>
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

<table border="0" style="	background:black;border-radius:5px;	color:#598AC1;" width="100%" height="50px">
	<tr>
		<th style="background:white;"> 
			<p align="left">	MANAGER : BLEMIN</p>
		</th>
		<th style="background:white;">
			<p align="right"> BALANCE : € <?php foreach ($datas[4] as $data){	echo $data;}?>M</p>
		</th>
			</tr>					
</table>

    <table border="1" style="border:2px solid black;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		       
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>MARKET VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result5)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>MML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><img src='".$res['player_img']. "' width='25px'></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='25px'></td>
    					
    						<td><center> € ".$res['av']. "M</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
    	</div><br><br>
    	
    	<button id="collapsible" style="background:#598AC1;" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo7">CHELSEA</button>
  <div id="demo7" class="collapse"><br>
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
<table border="0" style="	background:black;border-radius:5px;	color:#598AC1;" width="100%" height="50px">
	<tr>
		<th style="background:white;"> 
			<p align="left">	MANAGER : ABHIJITH</p>
		</th>
		<th style="background:white;">
			<p align="right"> BALANCE : € <?php foreach ($datas[5] as $data){	echo $data;}?>M</p>
		</th>
			</tr>					
</table>


    <table border="1" style="border:2px solid black;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		      
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>MARKET VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result6)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>MML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><img src='".$res['player_img']. "' width='25px' ></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='25px'></td>
    						
    						<td><center> € ".$res['av']. "M</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
    	</div><br><br>
    	
    	
     <button id="collapsible"style="background:#598AC1;"type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo8">JUVENTUS</button>
  <div id="demo8" class="collapse"><br>
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

<table border="0" style="	background:black;border-radius:5px;	color:#598AC1;" width="100%" height="50px">
	<tr>
		<th style="background:white;"> 
			<p align="left">	MANAGER : STELVIN</p>
		</th>
		<th style="background:white;">
			<p align="right"> BALANCE : € <?php foreach ($datas[6] as $data){	echo $data;}?>M</p>
		</th>
			</tr>					
</table>


    <table border="1" style="border:2px solid black;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		       
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>MARKET VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result7)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>MML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><img src='".$res['player_img']. "' width='25px' ></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='12px'></td>
    						
    						<td><center> € ".$res['av']. "M</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
    	</div><br><br>
    	
    	   
    <button id="collapsible" style="background:#598AC1;" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo9">MANCHESTER CITY</button>
  <div id="demo9" class="collapse"><br>
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
<table border="0" style="	background:black;border-radius:5px;	color:#598AC1;" width="100%" height="50px">
	<tr>
		<th style="background:white;"> 
			<p align="left">	MANAGER : ALEN</p>
		</th>
		<th  style="background:white;">
			<p align="right"> BALANCE : € <?php foreach ($datas[7] as $data){	echo $data;}?>M</p>
		</th>
			</tr>					
</table>

    <table border="1" style="border:2px solid black;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		       
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>MARKET VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result8)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>MML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><img src='".$res['player_img']. "' width='25px'></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='25px'></td>
    						
    						<td><center> € ".$res['av']. "M</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
    	</div><br><br>
    	
    <button id="collapsible" style="background:#598AC1;" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo10">MANCHESTER UNITED</button>
  <div id="demo10" class="collapse"><br>
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


<table border="0" style="	background:black;border-radius:5px;	color:#598AC1;" width="100%" height="50px">
	<tr>
		<th style="background:white;"> 
			<p align="left">	MANAGER : KICHU</p>
		</th>
		<th style="background:white;">
			<p align="right"> BALANCE : € <?php foreach ($datas[8] as $data){	echo $data;}?>M</p>
		</th>
			</tr>					
</table>

    <table border="1" style="border:2px solid black;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		      
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>MARKET VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result9)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>MML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><img src='".$res['player_img']. "' width='25px '></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='25px'></td>
    						
    						<td><center> € ".$res['av']. "M</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
    	</div><br><br>
    	
    <button id="collapsible" style="background:#598AC1;"type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo11">PARIS SAINT GERMAIN</button>
  <div id="demo11" class="collapse"><br>
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
<table border="0" style="	background-color:#fff;border-radius:5px;	color:#598AC1;" width="100%" height="50px">
	<tr>
		<th style="background:white"> 
			<p align="left">	MANAGER :<a href="https://wa.me/qr/ZY6XFY7IWDXBN1"> ASHIQ CJ </a></p>
                        
		</th>
		<th style="background:white;">
			<p align="right"> BALANCE : € <?php foreach ($datas[9] as $data){	echo $data;}?>M</p>
		</th>
			</tr>					
</table>

    <table border="1" style="border:2px solid black;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		       
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>MARKET VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result10)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>MML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><img src='".$res['player_img']. "'width='25px' ></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='25px'></td>
    						
    						<td><center> € ".$res['av']. "M</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
    	</div><br><br>
    	
    	<button id="collapsible" style="background:#598AC1;" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo12">REAL MADRID</button>
  <div id="demo12" class="collapse"><br>
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

<table border="0" style="	background:black;border-radius:5px;	color:#598AC1;" width="100%" height="50px">
	<tr>
		<th style="background:white;"> 
			<p align="left">	MANAGER : ASHIK PS</p>
		</th>
		<th style="background:white;">
			<p align="right"> BALANCE : € <?php foreach ($datas[10] as $data){	echo $data;}?>M</p>
		</th>
			</tr>					
</table>


    <table border="1" style="border:2px solid black;" width="100%">
    				<center>
    		<tr>
    						<th>#</th>
    						<th width="1000px">PLAYER NAME</center></th>
    		       <th>CLUB</center></th>
    		  
    		       <th style=";color:#598AC1;font-weight:bold; font-size:10px"><center>MARKET VALUE</center></th>
    		</tr>		
    		
    		<?php
    		while($res=mysqli_fetch_array($result11)){

                              echo "
    		<tr>
  			<td style='font-size:8px'>MML".$res['id']. "</td><td>
    										<table  width='90%'>
    														<tr>
                                                                                                                
    																		<td><img src='".$res['player_img']. "'width='25px' ></td>
    																		<td><center><span style='Font-size:15px;color:#598AC1;font-weight:bold; font-size:15px;'>".$res['player']. "</span><br><span style='Font-size:10px'>".$res['position']. "</span>
    																		</td>
    													  </tr> 
    											</table>
    						</td>
				<td><center><img src='img/".$res['team']. ".png' width='25px'></td>
    						
    						<td><center> € ".$res['av']. "M</td>
    	</tr>
    	

                               "; 
                               }
                               ?>
    	
    	
    	
    	</table>
    	</div><br><br>    <br><br>
    	</div>
        

  
  <br><br>
</b></center>
<!-- End smartphone / tablet look -->

</div>



                      
                      
                      <!-- end -->
                       </div>
                      </div>
                    </div>
                  </div>
                  
             
                
                
            <!-- End .HorizontalTab -->
          
          </div>
          
        </div>
        
      </div>

    </section>
    <!-- End HorizontalTab style 6 -->
    

      <footer>
        <p>Copyright &copy; 2021 Octane Website
                                
       </a></p>
      </footer>
    </div> <!-- /container -->        

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/easyResponsiveTabs.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <!--    <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    
<!-- -->
    </body>
</html>
