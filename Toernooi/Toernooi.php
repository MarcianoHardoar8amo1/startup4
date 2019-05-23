<!DOCTYPE HTML>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../registration/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="with=device-width, initial-scale=1">
	<meta name="description" content="Mock-it">
    <meta name="author" content="Marciano">
    <meta name="keywords" content="Toernooi">
    <title>Rocket Leauge</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
	  <script src="script.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Thasadith" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><!-- eindstylesheet t.b.v. bootstrap -->
<link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	</head>
<style>
.material-icons {vertical-align:-14%}
</style>

      
 <header>
 <div class="item_back">
 <img src="images/badge.png" width="250px" height="120px">
 </div>
 
 <div class="topnav">
  <a href="../Homepage/index.php">Home</a>
 <a href="../Toernooi/Toernooi.php">Toernooi</a>
   <a href="../Overons/Overons.php">Over ons</a>
  <a href="../Contact/Contact.php">Contact</a>
</div>
<div class="item_button">


<p><a href="../uitgelogd.php"><button class="w3-btn w3-white w3-xlarge">Uitloggen<i class="w3-margin-left material-icons">person</i></button></p></a>
	</div>




 
 </header>
 <body>

<br>
 <hr>
 <div class="tekst1">
 <h1> TOERNOOI PRIJZEN!</h1>
	</div>	
	<h2> TEAMS </h2>
 
 <?php
		require('dbconnect.php');
        $sql = "SELECT * FROM toernooi" ;
        if($result = $conn->query($sql)){

            // Pak elke keer een rij uit het resultaat en maak er een array van.
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                echo "<div class='users'><hr><h1>".$row["titel"]."</h1>"."<img src='images/".$row["plaatje"]."'/>"."<br> ".$row["prijs"]."<br></div>"; 
            }
            //Sluit het resultaat
            $result->close();
        }
            else{
                echo "De query is niet goed";

        }


//Sluit de connectie


?>

 <hr>
 <footer>
  <p>© Rocket League 2019  All rights reserved</p>
</footer>



 
 
 
 </body>
	
    
     </body>
    </html>
