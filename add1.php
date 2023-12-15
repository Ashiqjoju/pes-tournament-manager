
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
                				
                				<span class="tabs-text" style="">Deal Confirmation</span></li>
                <li class="tabs-2" data-tab-name="resume">
                				<span class="tabs-text">View rumours</span></li>
                <li class="tabs-3" data-tab-name="portfolio"><span class="tabs-text">Team Login</span></li>             
                <li class="tabs-4" data-tab-name="contact"><span class="tabs-text">Contact Us</span></li>
              </ul>
              
              <div class="resp-tabs-container hor_1 tabs_scroll">
                
                <div class="fc-tab-1">
                <br>
                  <div class="home-container">
                    <div class="row" style="background:#598ac1">
                      <div class="col-md-6">
                        <div class="left-content">
                          <div class="left-line"></div> 
                          <style>
				
				#asw{
				Width:70%;
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

include_once("config.php");
 
 $namep = $_GET['namep'];
 $image =$_GET['image'];
$cteam = $_GET['cteam'];
$mteam = $_GET['mteam'];
$email = $_GET['email'];


$result = mysqli_query($mysqli, "INSERT INTO rumours(player,player_img, cteam,mteam) VALUES('$namep','$image','$cteam','$mteam')");


?>
<div>
<span style="font-size:15px;text-shadow: 2px 2px black; font-weight:bold;color: white;">Add <?php echo $namep; ?> to your wishlist. </span><br><br>
</div>
<table id="asw" border='0'>
			<tr >
							<td colspan='3'>
											
											
											<center><img class='a1' src='<?php echo $image; ?>' style='width:60%; padding:20px' ></center>
											
											</td></tr>
                                                                                        <tr>
                                                                                        <th style='font-size:25px;color:#598ac1; letter-spacing:2px;' colspan='3'> <center> DEAL </td>
                                                                                        </tr>
                                                                                        <tr>
											<th style='font-size:15px;' colspan='3'>
												<center> <?PHP echo $namep; ?></center>
											</th>
			</tr>
				
				
<tr>
					
								<td id='aaa' >
												<center><img style='padding:10px; width:90%' src='img/<?php echo $cteam;?>.png' width='3px'>
								</td>
								<td>
											<center><img style='padding:10px;width:40%' src='arrow1.jpg' width='10%'>
								</td>
								<td id='aaa'>
											<center><img style='padding:10px; width:90%'  src='img/<?php echo $mteam;?>.png' width='100%'>
								</td>
				</tr>


							
</table><br>


<form class="jotform-form" action="https://submit.jotform.com/submit/211654428159055/" method="post" name="form_211654428159055" id="211654428159055" accept-charset="utf-8" autocomplete="on">
				
  <input type="hidden" name="formID" value="211654428159055" />
  
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  
    
          <input type="hidden" id="input_4" name="q4_input4" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="<?php echo $namep; ?>" data-component="textbox" aria-labelledby="label_4" />
        
          <input type="hidden" id="input_5" name="q5_input5" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="<?php echo $mteam; ?>" data-component="textbox" aria-labelledby="label_5" />
        
          <input type="hidden" id="input_6" name="q6_input6" class="form-textbox validate[Email]" style="width:310px" size="310" value="<?php echo $email; ?>" data-component="email" aria-labelledby="label_6" />
          
         
        <table width="70%" border='0'><tr><td><center>
        <input type="button" name="cancel" value="CANCEL"> </center></td>
           <td><center> <button style="" id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">CONFIRM
            </button></center></td></tr>
            </table>
            
            <br><br>
            
            <span style="font-size:08px;color: white;">Confirmation is required or else Deal will not be completed</span>
          
          
<br>

                        </div>
                      </div>
                    </div>
                  </div>
                  
                
                
                
                <!-- about us end  -->
                
                
            <!-- End .HorizontalTab -->
          
          </div>
          
        </div>
        
        
      </div><center>
      <style>
      button, input
      {
      Color:#598ac1;
      Background-color:white;
      font-weight:bold;
      border-radius:5px;
      Width:100px;
      height:40px;
      Font-size:15px;
      
      Border:none;
      box-shadow:3px 3px 3px 2px rgba(0,0,0,.5);
      
      }
      </style>
      

    

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
