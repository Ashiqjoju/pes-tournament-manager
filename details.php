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
                <a href="index.html"><div class="logo"><img src="img/img.png" width="30%"></div></a>
                <li class="tabs-1" data-tab-name="profile">
                				<style>
                								
                								div:hover {
  color:white;
}
                				</style>
                				
                				<span class="tabs-text" styel="">Welcome to MML</span></li>
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
                      <!--    <p>For applying loan you can click on MML bank, For viewing teams and players click on MMl teams/players</p>
                          <div class="primary-button">
                            <a href="#">MML BANK</a>
                          
                            <a href="#">MML Teams/players		</a>
                          </div>
                           
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="right-content">
                          <img src="img/home-image.jpeg">
                     
                      <!-- demo.php -->
                              
<?php

    $phone = $_GET['search'];
    

   $conn = new mysqli('fdb27.biz.nf','3616710_booking','ashikjoju8055','3616710_booking');
   if($conn->connect_error){
   die('connection failed : '.$conn->connect_error);
   }
   else
   {



    $sql=mysqli_query($conn,"SELECT * FROM players where player='$phone' ");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
      if($row['team']=='unsold')
      {
        $row['team']= 'FREE AGENT';
        $row['av']='DEAL NOT DONE!';
      }
      elseif($row['team']=='united')
      {
        $row['team']= 'MANCHESTER UNITED';
      }
      elseif($row['team']=='city')
      {
        $row['team']= 'MANCHESTER CITY';
      }
      elseif($row['team']=='psg')
      {
        $row['team']= 'PARIS SAINT GERMAIN';
      }
      elseif($row['team']=='milan')
      {
        $row['team']= 'AC MILAN';
      }
      
      elseif($row['team']=='juventus')
      {
        $row['team']= 'JUVENTUS';
      }
      elseif($row['team']=='real')
      {
        $row['team']= 'REAL MADRID';
      }
      elseif($row['team']=='bayern')
      {
        $row['team']= 'BAYERN MUNICH';
      }
      elseif($row['team']=='atm')
      {
        $row['team']= 'ATLETICO MADRID';
      }
      elseif($row['team']=='chelsea')
      {
        $row['team']= 'CHELSEA';
      }
      elseif($row['team']=='arsenal')
      {
        $row['team']= 'ARSENAL';
      }
      elseif($row['team']=='barca')
      {
        $row['team']= 'BARCELONA';
      }
      
      
    }
    else
    {
     
         header("Location: demo1.php");
    }
}


?>

<style>

*{
  margin: 0;
  padding: 0;
  color: #514B64;
  font-family: 'open sans',sans-serif;
}
 
  .container{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
  }
.tab{
  background: #fff;
  width: 250px;
  padding: 15px;
  border-radius: 20px;
  box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.15);
  margin:20px;
}

.name h1{
  font-size: 20px;
  margin-bottom: 40px;
  letter-spacing: 2px;
}
.price h2{
  font-size: 40px;
  font-weight: bold;
  letter-spacing: 1px;
}
.price span{
  font-size: 12px;
}

hr{
  height: 7px;
  width: 50%;
  margin: auto;
  margin-top: 40px;
  background-color: #598ac1;
  border:none;
  border-radius: 50px;
}

.list{
  margin-top: 50px;
  text-align:center;
  list-style:none;
}
ul li{
  margin: 20px 0;
}
ul li::before{
  content: '✔';
  margin-right:;
  color: blue;
}
ul .line::before{
  content: '✖';
  margin-right: 20px;
  color: grey;
}
th{
				padding:5px;
				Font-size:25px;
				
}
td{
				padding:8px;
				Font-size:10px;
}
button{
  font-size: 10px;
  font-weight: bold;
  height:40px;
  color: #fff;
  text-transform: uppercase;
  background-color: #598ac1;
  outline: none;
  border: none;
  border-radius: 5px;
  padding: 12px 50px;
  margin-top: 20px;
  box-shadow: 0px 0px 15px 2px rgba(0,0,0,0.15);
  transition: 0.3s linear;
  cursor: pointer;
}
button:hover{
  background-color: #E8AD23;
}





</style>


    <div class="container"> 
       <div class="tab">
        <div class="header">
          <div class="name">
           <!-- <img src="img.png" style="background:black" width="30%"alt=""> 
            <br><br> -->
          </div>
          <div class="price">
            <h2><img src="<?= $row['player_img'] ?>" style="" width="40%"alt=""></h2>
          </div>
        </div>
        <hr>
         <ul class="list">
         				<center>
        
        <table border="0">
        				<tr>
        								<th colspan="2"><center>
        											<?= $row['player'] ?>
        								</th>
        				</tr>
        				<tr>
        								<td>
        												CURRENT CLUB 
        								</td>
        								
        								<td>
        										<?= $row['team'] ?>
        								</td>
        				</tr>
        				<tr>
        								<td>
        												POSITION 
        								</td>
        								
        								<td>
        												<?= $row['position'] ?>
        								</td>
        				</tr>
        				<tr>
        								<td>
        												AUCTION VALUE 
        								</td>
        								
        								<td>
        												€ <?= $row['av'] ?>
        								</td>
        				</tr>
        				
        				
        </table>
        </ul><form action="demo1.php">
        <div class="add">
        	
          <button type="submit" name="button">Back</button>
       </form>
        </div>
        
        
        
      </div>

      
    </div>
  </body>
</html>

                      
                      
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
