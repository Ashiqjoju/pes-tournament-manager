<?php 
//get data from form 
$name = $_POST['name']; 
$email= $_POST['email']; 
$message= $_POST['msg'];

 $to = "ashikjoju8055@gmail.com"; 
 
 $subject = "Mail From website";
  $txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message; 
  
$headers = "From: noreply@codeconia.com" . "\r\n" . "CC: somebodyelse@example.com";

 if($email!=NULL)
 { mail($to,$subject,$txt,$headers); 
 } 
 //redirect 
 header("Location:email.html"); 
 ?>