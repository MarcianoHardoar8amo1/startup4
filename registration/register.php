<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registratie</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Registreren</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Gebruikersnaam</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Wachtwoord</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Bevestig wachtwoord</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registreren</button>
  	</div>
  	<p>
	al een account?<a href="login.php">Log in!</a>
  	</p>
  </form>
</body>
</html>