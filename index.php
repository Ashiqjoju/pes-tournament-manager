<?php
 
session_start();
if(isset($_POST['Submit']))
{
    extract($_POST);


    $phone = $_POST['phone'];
    $password = $_POST['password'];

   $conn = new mysqli('fdb27.biz.nf','3616710_booking','ashikjoju8055','3616710_booking');
   if($conn->connect_error){
   die('connection failed : '.$conn->connect_error);
   }
   else
   {



    $sql=mysqli_query($conn,"SELECT * FROM users where phone='$phone' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
    $_SESSION['logged_in']='1';

        header("Location: teamlogin.php?phone=".$_POST['phone']."");


    }
    else
    {
       
    }
}
}

?>

<!doctype html>
 <head>
 <style>

.content {
  display: flex;
  justify-content: center;
  align-items: center;
  width:100%;
  height:100%;
}
.loader-wrapper {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  
  display:flex;
  justify-content: center;
  align-items: center;
}
.loader {
  display: inline-block;
  width: 30px;
  height: 30px;
  position: relative;
  border: 4px solid #Fff;
  animation: loader 2s infinite ease;
}
.loader-inner {
  vertical-align: top;
  display: inline-block;
  width: 100%;
  background-color: #fff;
  animation: loader-inner 2s infinite ease-in;
}

@keyframes loader {
  0% { transform: rotate(0deg);}
  25% { transform: rotate(180deg);}
  50% { transform: rotate(180deg);}
  75% { transform: rotate(360deg);}
  100% { transform: rotate(360deg);}
}

@keyframes loader-inner {
  0% { height: 0%;}
  25% { height: 0%;}
  50% { height: 100%;}
  75% { height: 100%;}
  100% { height: 0%;}
}
</style>

 
  
    
    
    
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
                <a href="index.html"><div class="logo"><img src="img/img.png" width="30%"></div></a>
               <li class="tabs-1" data-tab-name="profile">
                				<style>
                								
                								.ho:hover {
                                                                                Color:white;
                                                                                }
  

                				</style>
                				
                				<span class="tabs-text" style="">Welcome to MML</span></li>
                <li class="tabs-2" data-tab-name="resume">
                				<span class="tabs-text">View rumours</span></li>
                <li class="tabs-3" data-tab-name="portfolio"><span class="tabs-text">Team Login</span></li>             
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
                          <p>For applying loan you can click on MML bank, For viewing teams and players click on MMl teams/players</p>
                          <div class="primary-button">
                            <a href="sucesslogin.php">TEAM LOGIN</a>
                          
                            <a href="demo.php">MML Teams/players		</a>
                          </div>
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="right-content">
                          <img src="img/1.jpg">
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- about us -->
                <div class="fc-tab-2">   <br>             
                  <div class="about-container">
                    <div class="row" style="background:#598ac1">     
                    <br>
                    <style>
				
				table{
				Width:60%;
                                color:black;
                                Background:white;
                                border-radius:10px;
                                
                                box-shadow: 5px 5px 10px 2px rgba(0,0,0,.8);
                                
				}
				td{
				
                                color: black;
			
			}
                        th{
                        Color: black;
                        Font-size:10px;
                        }
                        .a1{
                        
                        
                      
                       }
                       .hr1{
                       border: 10px solid #598ac1;
  border-radius: 5px;
}
                       
				
</style>
<Center>
<?php
$conn = mysqli_connect("fdb27.biz.nf", "3616710_booking", "ashikjoju8055", "3616710_booking");
if ($conn->connect_error)
 {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM rumours  ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
while($res = $result->fetch_assoc())
 {
echo "

<table border='0'>
			<tr >
							<td colspan='3'>
											
											
											<center><img class='a1' src='".$res['player_img']."' style='width:60%; padding:20px' ></center>
											
											</td></tr>
                                                                                        <tr>
                                                                                        <th style='font-size:25px;color:#598ac1; letter-spacing:2px;' colspan='3'> <center> RUMOURS </td>
                                                                                        </tr>
                                                                                        <tr>
											<th style='font-size:15px;' colspan='3'>
												<center>		".$res['player']. "</center>
											</th>
			</tr>
				
				
<tr>
					
								<td id='aaa' >
												<center><img style='padding:10px; width:90%' src='img/".$res['cteam'].".png' width='3px'>
								</td>
								<td>
											<center><img style='padding:10px;width:40%' src='arrow1.jpg' width='10%'>
								</td>
								<td id='aaa'>
											<center><img style='padding:10px; width:90%'  src='img/".$res['mteam'].".png' width='100%'>
								</td>
				</tr>


							
</table><br>

";
}
}
?>
                    </div>
                  </div>      
                </div>
                
                
                <div class="fc-tab-2">    <br><br>            
                  <div class="about-container">
                    <div class="row">   
                    
                    <html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
 
  .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    height:600px;
    padding: 40px;
    background: rgba(0, 0, 0, 0.9);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
  }
  .box h2{
    margin: 0 0 30px;
    padding: 0px;
    color: #fff;
    text-align: center;
  }
  .box .input-box{
    position: relative;
  }
  .box .input-box input{
    width: 100%;
    padding: 10px 0px;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid #fff;
  }
  .box .input-box label{
    position: absolute;
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 10px 0px;
    font-size: 16px;
    color: #fff;
    transition: .5s;
  }
  .box .input-box input:focus ~ label,
  .box .input-box input:valid ~ label{
    top: -18px;
    left: 0px;
    color: #03a9f4;
    font-size: 12px;
  }
  .box input[type="submit"]{
    background: transparent;
    width:100px;
    border: none;
    outline: none;
    color: #fff;
    align-items: right;
    background: #227be3;
    padding: 10px 20px;
    border-radius: 5px;
    cursor:pointer;
  }
  .box input[type="submit"]:hover{
    background-color: #3067b9;
  }
  button{
  
  width:80px;
  height:40px;
  background: Dodgerblue;
  color:white;
  font-size:15px;
  border:none;
  border-radius:5px

  }
  
  </style>
  <title>Mupliyam League </title>
</head>






<body>
				
  <div class="box">
  				<h2 style="font-size:25px">MUPLIYAM MEGA LEAGUE <em style="color:#598ac1">SEASON 3</em></h2>
    <h2>Login</h2><br><br><br>
    <form method="POST">
      <div class="input-box">
        <input type="tel" name="phone" id="phonenumber" autocomplete="off" required>
        <label for="">Phone Number</label> 
        <span id="msg"></span>
        </div>
<div class="input-box">
          <input type="password" name="password" id="password" autocomplete="off" required>
        <label for="">Password</label> 
        <span id="msg"></span>
        </div>



        
   
      
   <div class="input-box">
      <p align="right" ><button value="click" name='Submit' type="Submit"  onclick="validate()"  class="button_1">LOG IN</button></p>
      <p align="right"><a href="index.php" >Home Page</a></p>
      </div>
     
        </form>
        </div>
      
        
        
     

</body>
</html>


                    
                    
                    </div>
                  </div>      
                </div>
                
                <div class="fc-tab-2">                
                  <div class="about-container">
                    <div class="row">                      
                    </div>
                  </div>      
                </div>
                
                
                <!-- about us end  -->
                
                
            <!-- End .HorizontalTab -->
          
          </div>
          
        </div>
        
        
      </div><center>
      <style>
      
      </style>
      

      <a href=admin.html> <button style=" width:50%; height:30px;">Admin Login</button></a></center><br><br>

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
