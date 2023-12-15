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
<!--
<html>
    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AutoComplete Search Using Bootstrap 4, PHP, PDO - MySQL & Ajax</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">

       <style type="text/css">
            ul {
                
       
            }

          

            li:hover {
                color: silver;
                background: #0088cc;
            }
        </style>
    </head>
    <body class="">
     
        <form action="details.php" method="get" class="p-3">
          <div class="input-group">
            <input type="text" name="search" id="searchBox" class="form-control form-control-lg rounded-0 border-info" placeholder="Search by player name..." autocomplete="off" required>
            <div class="input-group-append">
              <Button type="submit" style="background-color:598ac1"name="submit" value="Search" class="btn btn-info btn-lg rounded-0">Search
            </div>
          </div>
        </form>
      
      
        <div class="list-group" id="response">
        				
          <!-- Here autocomplete list will be display -->
        <!--
      
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
    </body>
</html>
-->