<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 


<?php
 $phone=$_GET['phone'];
$currentTimeinSeconds = time();
$currentDate = date('Y-m-d', $currentTimeinSeconds); 

$fp = fopen('login.txt', 'a');
fwrite($fp, "DATE - [".$currentDate."] ");
fwrite($fp, "PHONE - [".$phone."]\n");
fclose($fp);

 include_once("config.php"); 
 $result = mysqli_query($mysqli, "SELECT * FROM users WHERE phone = '$phone'"); 
 ?>
 <?php
while($res = mysqli_fetch_array($result))
{
  $s=$res['status'];
  $p=$res['point'];
  $teamc =$res['teamname'];
  $team = $res['teamname'];

      if($team=='united')
      {
        $team= 'MANCHESTER UNITED';
      }
      elseif($team=='city')
      {
        $team= 'MANCHESTER CITY';
      }
      elseif($team =='psg')
      {
        $team = 'PARIS SAINT GERMAIN';
      }
      elseif($team=='milan')
      {
        $team= 'AC MILAN';
      }
      
      elseif($team=='juventus')
      {
        $team= 'JUVENTUS';
      }
      elseif($team=='real')
      {
        $team= 'REAL MADRID';
      }
      elseif($team=='bayern')
      {
        $team= 'BAYERN MUNICH';
      }
      elseif($team=='atm')
      {
        $team= 'ATLETICO MADRID';
      }
      elseif($team=='chelsea')
      {
        $team= 'CHELSEA';
      }
      elseif($team=='arsenal')
      {
        $team= 'ARSENAL';
      }
      elseif($team=='barca')
      {
        $team= 'BARCELONA';
      }
 $name= $res['manager'];
 
 $cash= $res['cash'];
 
 
 }
?>

<!DOCTYPE html>
<html lang="en">
				
				
				<style>
								* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	color:#fff;
	font-family: "Futura";
	font-weight: 400;
}

body, html {

	width: 100vw;
	background-color: #1D1B34;
	
}

/* HEADER */
.header {
	width: 100%;
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	align-items: center;
	padding: 40px 30px;
}

.header h1 {
	font-size: 16px;
	flex: 2;
	text-align: center;
}

.menu-icon-wrapper {
	background-color: #22223A;
	border-radius: 500px;
	height: 45px;
	width: 45px;
	display: flex;
	justify-content: center;
	align-items: center;
}

.dots-wrapper div {
	border-radius: 500px;
	height: 5px;
	width: 5px;
	margin: 4px 2px;
}

.light-dot {
	background-color: #A1A0BC;
}

.dark-dot {
	background-color: #55546D;
}

.calender-icon-wrapper {
	background-color: #22223A;
	border-radius: 500px;
	height: 45px;
	width: 45px;
	display: flex;
	justify-content: center;
	align-items: center;
}

.calender-icon-wrapper svg {
	transform: scale(0.8);
	opacity: 0.5;
}

/* BALANCE WRAPPER */
.balance-wrapper {
	display: flex;
        flex-direction: column;
	
	align-items: center;
	margin-top: ;
}

.balance-wrapper h3 {
	color: #55546D;
	font-size: 11px;
	letter-spacing: 1px;
	margin-bottom: 8px;
}

.balance-wrapper h1 {
	font-size: 24px;
	letter-spacing: 1px;
}

.balance-wrapper h1 span {
	font-size: 17px;
}

/* HR */
.hr {
  margin: 35px 60px;
  height: 1px;
  background: #55546D;
	opacity: 0.5;
  background: -webkit-gradient(linear, 0 0, 100% 0, from(#1D1B34), to(#1D1B34), color-stop(50%, #55546D));
}

				
nav {
	display: flex;
	align-items: center;
	background: #1d1b34;
	height: 60px;
	position: relative;
}
.icon {
	cursor: pointer;
	margin-right: 40px;
	line-height: 50px;
}
.icon span {
	background: #f00;
	padding: 7px;
	border-radius: 50%;
	color: #fff;
	vertical-align: top;
	margin-left: -25px;
}
.icon img {
	display: inline-block;
	width: 40px;
	margin-top: 20px;
}
.icon:hover {
	opacity: .7;
}

.logo {
	flex: 1;
	margin-left: 50px;
	color: #eee;
	font-size: 20px;
	font-family: monospace;
}

.notifi-box {
	width: 350px;
	height: 0px;
	opacity: 0;
	position: absolute;
        Background:#22223a;
	top: 63px;
	right: 35px;
	overflow:scroll;
	transition: 1s opacity, 250ms height;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.notifi-box h2 {
	font-size: 14px;
	padding: 10px;
	border-bottom: 1px solid #eee;
	color: #999;
}
.notifi-box h2 span {
	color: #f00;
}
.notifi-item {
	display: flex;
	border-bottom: 1px solid #eee;
	padding: 15px 5px;
	margin-bottom: 15px;
	cursor: pointer;
}
.notifi-item:hover {
	background-color: #eee;
}
.notifi-item img {
	display: block;
	width: 50px;
	margin-right: 10px;
	border-radius: 50%;
}
.notifi-item .text h4 {
	color: #777;
	font-size: 16px;
	margin-top: 10px;
}
.notifi-item .text p {
	color: #aaa;
	font-size: 12px;
}
#noti{
Background:#22223a;

 width="100%"
}
</style>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Team page</title>
	<!-- STYLESHEET -->
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="header">
		<div class="menu-icon-wrapper">
			<div class="dots-wrapper">
				<div class="light-dot"></div>
				<div class="dark-dot"></div>
			</div>
			<div class="dots-wrapper">
				<div class="dark-dot"></div>
				<div class="light-dot"></div>
			</div>
		</div>
		<h1><?php echo $team;  ?></h1>
		<div class="calender-icon-wrapper">
			<svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 13a1 1 0 110-2 1 1 0 010 2zM8 17a1 1 0 110-2 1 1 0 010 2zM11 16a1 1 0 102 0 1 1 0 00-2 0zM16 17a1 1 0 110-2 1 1 0 010 2zM11 12a1 1 0 102 0 1 1 0 00-2 0zM16 13a1 1 0 110-2 1 1 0 010 2zM8 7a1 1 0 000 2h8a1 1 0 100-2H8z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6 3a3 3 0 00-3 3v12a3 3 0 003 3h12a3 3 0 003-3V6a3 3 0 00-3-3H6zm12 2H6a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V6a1 1 0 00-1-1z" fill="currentColor"/></svg>
		</div>
	</div>

	<div class="balance-wrapper">
		<h3>TOTAL BALANCE</h3>
		<h1>€ <?php echo"$cash"; ?> <span>EUR</span></h1>
	</div>

	<div class="hr"></div>
	
	


	<div class="activity-wrapper">
	<!--	<?php
	if (isset($_POST['search'])) {
		$response = "<ul><li>No data found!</li></ul>";

		$connection = new mysqli('fdb27.biz.nf', '3616710_booking', 'ashikjoju8055', '3616710_booking');
		$q = $connection->real_escape_string($_POST['q']);

		$sql = $connection->query("SELECT player FROM players WHERE player LIKE '%$q%'");
		if ($sql->num_rows > 0) {
			$response = "<ul class='list-group' style='color:black'>";

			while ($data = $sql->fetch_array())
				$response .= "<li class='list-group-item' style='color:black;' >" . $data['player'] . "</li>";

			$response .= "</ul>";
		}


		exit($response);
	}
?>-->
<div>

        <style type="text/css">
         
            li:hover {
                color: black;
                background: #0088cc;
            }
            #searchBox{
            Width:100px;
            
            
            Font-size:20px;
            
            }
            #asq1{
            width:150px;
            border:none;
            Height:49px;
            font-size:20px;
            Color:white;
            } 
            
            
.alert {
  padding: 10px;
  background-color: #f44336;
  Font-family: Monospace;
  color: white;
  Font-size:10px;
  Border-radius:5px;
  
  
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 20px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}
      
      .closebtn:hover {
  color: black;
}

</style>









   <center>
   <div class="balance-wrapper">
		<h3 style="font-size:10px">PARTICIPATE IN QUIZ AND WIN REWARDS</h3></div><br>
                
                
                <?php
                
                if($s=='n')
                { ?>
                    <style>
    				@import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap');
.popup_box{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-radius: 5px;
}
.click{
  background: #1D1B34 ;
  color: white;
  font-size: 20px;
  font-weight: bold;
  padding: 10px 15px;
  text-align: center;
  border: 1px solid white;
  text-decoration:none;
}
.popup_box{
  width: 400px;
  background: #f2f2f2;
  text-align: center;
  align-items: center;
  padding: 40px;
  border: 1px solid #b3b3b3;
  box-shadow: 0px 5px 10px rgba(0,0,0,.2);
  z-index: 9999;
  display: none;
}
.popup_box i{
  font-size: 50px;
  color: #eb9447;
  border: 5px solid #eb9447;
  padding: 20px 40px;
  border-radius: 50%;
  margin: -10px 0 20px 0;
}
.popup_box h1{
  font-size: 20px;
  color: #1b2631;
  margin-bottom: 5px;
}
.popup_box label{
  font-size: 17px;
  color: #404040;
}
.popup_box .btns{
  margin: 40px 0 0 0;
}
.btnss {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.btn1{
  background-color: Red;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.tacbox {
  display:block;
  padding: 1em;
  margin: 2em;
  border: 3px solid #ddd;
  background-color: #eee;
  max-width: 800px;
}

.cbox{
  height: 2em;
  width: 2em;
  vertical-align: middle;
}

    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
      $(document).ready(function(){
        $('.click').click(function(){
          $('.popup_box').css("display", "block");
        });
        $('.btn1').click(function(){
          $('.popup_box').css("display", "none");
        });
        $('.btn2').click(function(){
          $('.popup_box').css("display", "none");
          alert("Account Permanently Deleted.");
        });
      });

    </script>

  </head>
  <body>
    <a href="#" class="click">START QUIZ</a>
    <div class="popup_box"><br>
      <i class="fas fa-exclamation"></i><br>
     <form action="quiz.php" method="POST"> <h1>READ VERY VERY CAREFULLY, DO NOT IGNORE ANY INFORMATION- </h1>
      <label>1st Prize : 25M €<br>
      2nd Prize : 10M €<br>
      3rd Prize : 05M €<br><br>
      Number of Questions : 10<br><br>
      For correct answers (3) points<br>
      For wrong answer (-1) points<br><br>
      <span style="color:red; font-weight:bold;">Time : 60 Seconds<br>Only one chance! <br>
      Click on submit button after completing all questions, otherwise score will be 0.<br>
      If you can't finish quiz within 60seconds your score will be 0.<br>
      </span>
      
<div class="tacbox">
  <input class="cbox" id="checkbox" type="checkbox" required/>
  <label for="checkbox"> I agree to these <u style="color:blue"> Terms and Conditions</u>.</label>
</div>

      </label>
      <input type="hidden" name="phone" value="<?php echo $phone ; ?>">
        <input class="btn1" type="submit" name="submit1" value="CANCEL">
        <input class="btnss" type="submit" name="submit1" value="START QUIZ">
     
      </form>
    </div>
                
                
                
                
           <?php }
           
           else{
           
           Echo " QUIZ SCORE : $p/30";
           
           }?>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
       <!-- <form action="details1.php" method="get" class="p-3">
         
         <table width="80%" border="0"><tr><td><center>
         <div class="input-group">
          
           <input type="text" name="search" style="width:100%; height:50px; font-size:10px;height:35px;color:black;" id="searchBox" class="form-control form-control-lg rounded-0 border-info" placeholder="Search by player name..." autocomplete="off" required>
           
           <input type="hidden" name="myteam" value="<?php echo $teamc;?>">
           </td><td style="width:30%"><center>
            <div class="input-group-append">
              <input type="submit" id="asq1" style="background-color:#22223a;  border:1px solid white;width:80px ;Font-family:Monospace; height:35px; font-size:10px;"name="submit2" value="Search" clas="btn btn-info btn-lg rounded-0">
            </div>
            </td></tr>
            
          </div>
        </form>
       -->
      
      <tr><td>
        <div class="list-group" style= "color:black; " id="response">
        				
          <!-- Here autocomplete list will be display -->
        </div>
        </td></tr>
        </table>
        
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



		</div>
	</div>
        
        <div class="hr"></div>
        </div>
                
                
	
        
        
        <!-- -->
        
        
        	<nav>
		<div class="logo">
                
                <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>New Message!</strong> Click on notification icon to view message.
</div>
                
                </div>
		<div class="icon" onclick="toggleNotifi()">
			<img  src="bell.png" alt="" onclick="this.parentElemet.stylr.display='none';"> <span>01</span>
		</div>
		<div class="notifi-box" id="box">
			<h2>Notifications <span>01</span></h2>
			
			<br><br>
			
			
			<table id="noti">
							<tr>
							<td><p style="Font-size:16px;Font-family: Monospace;" align="center">Welcome to MML,  Thank you for logging in.<!--id-MML1 <br> PSG HAS SHOWN INTEREST FOR MAKING A DEAL WITH BAYERN PLAYER KOKE.--></p> </td>
							<tr><td><br></td></tr>
							</tr>
							
							</table>
	
		</div>
	</nav>

<script>
					
					var box  = document.getElementById('box');
var down = false;


function toggleNotifi(){
	if (down) {
		box.style.height  = '0px';
		box.style.opacity = 0;
		down = false;
	}else {
		box.style.height  = '510px';
		box.style.opacity = 1;
		down = true;
	}
}
	</script>
        
        <!-- -->
        <center>
        
	<style>
        #tabl{
        width:80%;
        background:white;
        
        border-radius:5px;
        Border: 1px solid black;
        box-shodow:2px 2px 2px rgba(0,0,0,.6);
        }
        #th{
         Color:white;
         Padding:10px;
         border: 1px solid #fff;
         Background:#22223a;
         Font-weight:bold;
        }
        
        #td{
        border-bottom: 1px solid #ddd;
        Color:black;
        Padding:10px;
        Font-size:12px;
        }
        #td1 {
        Color:#22223a;
        border-bottom:1px solid #ddd;
        Background: white;
        Font-size:12px;
        Padding:15px;
        }
        button{
        
        Width:100px;
        Height:40px;
        Border:none;
        Color:white;
        Background:#22223a;
        }
        
        
        
        </style>	
<table border="0" id="tabl">

<tr><th id='th' colspan='2'>MY SQUAD</th></tr>


<?php
$conn = mysqli_connect("fdb27.biz.nf", "3616710_booking", "ashikjoju8055", "3616710_booking");
if ($conn->connect_error)
 {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM players where  team= '$teamc'";
$result1 = $conn->query($sql);
if ($result1->num_rows > 0) 
{
while($re = $result1->fetch_assoc())
 {
 echo "<tr>";
echo "<td id='td'>".$re['player']."<br><span style='font-size:08px;color:black;' >".$re['position']."</span></td>";
echo "<td id='td'>€ ".$re['av']."M</td>";
echo "</tr>";
}
}
else 
{
echo "<tr>";
echo "<td id='td' colspan='2'>CURRENT NO DEALS</td>";  
echo "</tr>";
}
?>



</table><br>

 </div>
        
        <div>

<center>
<!--
<table border="0" id="tabl">

<tr><th id='th' colspan='3'>MY TRANSFER DEALS</th></tr>


<tr><td id="tdh" ></td><td id="tdh" ></td></tr>
<?php
$conn = mysqli_connect("fdb27.biz.nf", "3616710_booking", "ashikjoju8055", "3616710_booking");
if ($conn->connect_error)
 {
die("Connection failed: " . $conn->connect_error);
}
$sql2 = "SELECT * FROM rumours where  mteam= '$teamc'";
$result2 = $conn->query($sql2);
if ($result1->num_rows > 0) 
{
while($re2 = $result2->fetch_assoc())
 {
 echo "<tr>";
echo"<td id='td1'>RMML".$re2['id']."</td>";
echo "<td id='td1'>".$re2['player']."</td>";
echo "<td id='td1'>CURRENT CLUB : ".$re2['cteam']."</td>";

echo "</tr>";
}
}
?>



</table>
-->
<br><br><br>

        

<a href="index.php"><button>LOG OUT</button></a>

</center>
<br>
        

</div>

</body>
</html>
