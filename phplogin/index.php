
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Iniciar Sesion </h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>	Nombre de Usuario:</label>
     	<input type="text" name="uname" placeholder="Usuario"><br>

     	<label>Contraseña:</label>
     	<input type="password" name="password" placeholder="Contraseña"><br>

     	<div class="button">
		 <button type="submit">Login</button>
		</div>

		<div class="link">
		<a href="register-view.php">¿No tienes una cuenta? Registrate</a>
		</div>
     </form>
</body>
</html>