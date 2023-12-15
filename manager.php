
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>


$clr-primary: #d0def2;
$clr-primary-light: #f3f8fe;
$clr-primary-dark: #a7bad3;
$clr-gray100: #f9fbff;
$clr-gray150: #f4f6fb;
$clr-gray200: #eef1f6;
$clr-gray300: #e1e5ee;
$clr-gray400: #767b91;
$clr-gray500: #4f546c;
$clr-gray600: #2a324b;
$clr-gray700: #161d34;
$radius: 0.2rem;

*,*::before,*::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

h1 {
color: #008CBA;
font-family: arial, sans-serif;
font-size: 50px;
font-weight: bold;
margin-top: 50px;
margin-bottom: 50px;
}

body {
  font-family: Lato, sans-serif;
  height: 50vh;
  display: grid;
  justify-content: center;
  align-items: center;
  color: #4f546c;
  font-size: 1.5rem;
  background-color: #f3f8fe;
}

table {

  border-collapse: collapse;
  box-shadow: 20px 20px 20px 5px #a7bad3;
  background-color: white;
  text-align: left;
  }

  th {
    background-color: #d0def2;
    padding: 0.9rem 2.6rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    font-size: 1.9rem;
    font-weight: 900;
  }
td{
    padding:1.6rem 2.6rem;
  }

  
  tr:nth-child(even) {
    background-color: #f3f8fe;
  }
  button{
Border:none;
Width:75px;
Height:30px;
border-radius: 10px;
background: #008CBA;
box-shadow:  5px 5px 12px #535353,
             -5px -5px 12px #ffffff;

}
.damn{
text-decoration:none;
Font-size:1.3rem;
color:#fff;
}
a{
Margin-top:50px;

</style>

</head>
<body><center>
<h1>MML TEAM BALANCE </h1>
</center>
<table>
<tr>
<!--<th>Id</th>-->
<th>Team</th>
<th>Manager</th>
<th>Balance</th>
<th>Update</th>
</tr>
<?php
$conn = mysqli_connect("fdb27.biz.nf", "3616710_booking", "ashikjoju8055", "3616710_booking");
if ($conn->connect_error)
 {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users ORDER BY teamname ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
while($res = $result->fetch_assoc())
 {
echo "<tr>"; 	
//echo "<td><center>".$res['idm']."</td>";
echo "<td ><center>".strtoupper($res['teamname'])."</center></td>"; 	
echo "<td> <center>".$res['manager']."</td>"; 
echo "<td><b><center>".$res['cash']." M €</b></td>";
echo "<td><center><button><a class='damn' href='edit1.php?idm=$res[idm]&manager=$res[manager]&teamname=$res[teamname]&cash=$res[cash]'><font>EDIT</a></button>"; 	} 	
echo "<tr>";
echo "</table>";
}
else 
{ 
echo "0 results";
}
$conn->close();
?>
</table>

<a href="table.php">PLAYER TABLE</a>
</body>
</html>