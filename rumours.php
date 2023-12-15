


<!DOCTYPE html>
<html>
<head>
		<title>MML Teams</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="htps://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body>


<body >
				
				<?php
	if (isset($_POST['search'])) {
		$response = "<ul><li>No data found!</li></ul>";

		$connection = new mysqli('fdb27.biz.nf', '3616710_booking', 'ashikjoju8055', '3616710_booking');
		$q = $connection->real_escape_string($_POST['q']);

		$sql = $connection->query("SELECT player FROM players WHERE player LIKE '%$q%'");
		if ($sql->num_rows > 0) {
			$response = "<ul class='list-group'>";

			while ($data = $sql->fetch_array())
				$response .= "<li class='list-group-item'>" . $data['player'] . "</li>";

			$response .= "</ul>";
		}


		exit($response);
	}
?>
<div>

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="htps://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
       <style type="text/css">
         
            li:hover {
                color: silver;
                background: #0088cc;
            }
            #searchBox{
            Width:100px;
            
            Font-size:20px;
            
            }
            #asq1{
            width:100px;
            border:none;
            Height:49px;
            font-size:20px;
            Color:white;
            }
        </style>
   
        <form action="rumours.php" method="get" class="p-3">
          <div class="input-group">
            <input type="text" name="search" style="width:70%; font-size:10px;height:35px;" id="searchBox" class="form-control form-control-lg rounded-0 border-info" placeholder="Search by player name..." autocomplete="off" required>
            <div class="input-group-append">
              <input type="submit" id="asq1" style="background-color:#598AC1; Font-family:Monospace; height:35px; font-size:10px;"name="submit2" value="Search" clas="btn btn-info btn-lg rounded-0">
            </div>
          </div>
        </form>
      
      
        <div class="list-group" id="response">
        				
          <!-- Here autocomplete list will be display -->
        </div>
        
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
    /*if(is_array($row))
    {
      
    }
    else
    {
     Echo "something went wrong"; 
         header("Location: rumours.php");
    }*/
}


?>

<center>
<form name="form1" method="GET" action="editprocess.php"> 	
  			<table style="" border="1" style=" width:40%" height="10%"> 			
                        <tr> 	
                        <td>PLAYER NAME</td> 
                        <td><input type="text" name="player" value="<?= $row['player'] ?>" disabled></td> 			
                        </tr> 
			
                        <tr> 
                        <td>RUMOUR TEAM </td> 
                          <td>
                        <select name="rumours" id="team">
  <option value="">
  
  Select the club</option>
  <option value="milan">AC Milan</option>
  <option value="arsenal">Arsenal</option>
  <option value="atm">Atletico Madrid</option>
  <option value="bayern">Bayern</option>
  <option value="barca">Barcelona</option>
  <option value="juventus">Juventus</option>
  <option value="chelsea">Chelsea</option>
  <option value="city">Manchester city</option>
  <option value="united">Manchester United</option>
  <option value="psg">Paris Saint Germain</option>
  <option value="real">Real Madrid</option>
  <option value="unsold">Unsold</option>
  <option value="">DELETE RUMOUR</option>
  
</select> 
                          
                        
                         </td> 	
                          </tr>
  			
  			
  				<tr> 				<td><input type="hidden" name="idr" value="<?= $row['id'] ?>"</td> 			
  					<td><center><input type="submit" name="update2" value="Update"></td> 			</tr> 		</table> 	</form> 
                                        
          
          
                                       <br><br>
                                       
                                       
                                       
                                       
            <title>Table with database</title>
<style>
table {
border-collapse: collapse;
Width:90%;
color: #588c7e;
Border:2px solid black;
font-family: monospace;
font-size: 15px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
Padding:10px;
}
tr{
Padding:10px;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table border="1">
<tr>
<th>PLAYER</th>
<th>Current TEAM</th>
<th>RUMOUR</th>

</tr>
<?php
$conn = mysqli_connect("fdb27.biz.nf", "3616710_booking", "ashikjoju8055", "3616710_booking");
if ($conn->connect_error)
 {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM players where  rumours='atm' OR rumours='unsold' OR rumours='arsenal' OR rumours='juventus' OR rumours='barca' OR rumours='city' OR rumours='united' OR rumours='psg' OR rumours='real' OR rumours='chelsea' OR rumours='milan' OR rumours='bayern' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
while($res = $result->fetch_assoc())
 {
echo "<tr>"; 	
echo "<td>".$res['player']."</td>";
echo "<td>".$res['team']."<//td>";
echo "<td bgcolor=''>".$res['rumours']."</center></td>"; 	
 	} 	
echo "<tr>";
} 
?>
                                       
 </table>   <br><br>
    
    <center>
    <a href="index.php">Click to go to Main page</a><br>
    <a href="table.php">Admin page</a>