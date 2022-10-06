
<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
     <form action="register.php" method="POST">
     	<h2>Registrar</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nombre:</label>
     	<input type="text" name="name" placeholder="Nombre"><br>

     	<label>Nombre de Usuario:</label>
     	<input type="text" name="uname" placeholder="Nombre de Usuario"><br>

     	<label>Contraseña:</label>
     	<input type="password" name="password" placeholder="Contraseña"><br>

     	<div class="button">
		 <button type="submit">Register</button>
		</div>
     </form>
</body>
</html>