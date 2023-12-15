<?php include_once("config.php"); if(isset($_POST['Submit'])) 
{	 
$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);
 $conn = new mysqli('fdb27.biz.nf','3616710_booking','ashikjoju8055','3616710_booking');
  $sql=mysqli_query($conn,"SELECT * FROM phone where phone='$phone'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {

        header("Location: newac2.php?phone=$phone&name=$name");


    }
    else
    {
     $result = mysqli_query($mysqli, "INSERT INTO phone(name,phone,password) VALUES('$name','$phone','$password')"); 
 
 header("Location: index2.php");
 } 
 }
?> 


