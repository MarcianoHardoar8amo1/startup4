<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
	 <?php
			
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "rocket";
		$conn = new  mysqli($servername, $username, $password, $database);
		if ($conn->connect_error) {
			die("Connect failed: " .$conn->connect_error);
		}
    ?>
  </head>
  <body>



  </body>
</html>