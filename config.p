<?php
    $servername='fdb27.biz.nf';
    $username='3616710_booking';
    $password='ashikjoju8055';
    $dbname = "3616710_booking";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>