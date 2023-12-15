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



    $sql=mysqli_query($conn,"SELECT * FROM phone where phone='$phone' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
$_SESSION['logged_in']='1';
        
        header("Location: main.php?phone=".$_POST['phone']."");


    }
    else
    {
         header("Location: index1.php");
    }
}
}

?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url(bg2.jpg);
    background-size: cover;
  }
 
  .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    height:550px;
    padding: 40px;
    background: rgba(0, 0, 0, 0.6);
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
  
  .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
  
  </style>
  <title>Mupliyam League</title>
</head>






<body>
				
			
  <div class="box">
  				
  				<h2 style="font-size:25px">MUPLIYAM MEGA LEAGUE</h2>
    <h2>Login</h2>
    	<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Unable to login !</strong> Invalid Phone number or Password.
</div><br><br>
				
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



        
      <span style="color:white"> Don't have an account?</span> <a style="color:Dodgerblue" href="newac.html">Sign up</a>
      
   <div class="input-box">
      <br><p align="right" ><button value="click" name='Submit' type="Submit"  onclick="validate()"  class="button_1">LOG IN</button></p>
      </div>
        </form>
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
        </div>
     

  
   
</body>
</html>


<?php
    extract($_REQUEST);
    $file=fopen("login.txt","a");
    fwrite($file,"PHONE :");
    fwrite($file, $phone ."\n");
    fclose($file);
    
 ?>

