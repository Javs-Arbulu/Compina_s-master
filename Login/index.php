<?php
	session_start();
	if(isset($_SESSION['user'])){
		header("Location: ../Cliente");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
</head>
<body>
    <div class="Space" style="margin-top: 20vh">
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="display-3 text-center">Login</h1>	
			</div>
		</div>
		<div class="row justify-content-center mt-4">
			<div class="col-sm-4" data-validate="Usario es requerido">
				<form action="login.php" method="POST">
				<input type="text" name="usuario" placeholder="Usuario" class="form-control">
			</div>
		</div>
		<div class="row justify-content-center mt-4">
			<div class="col-sm-4">
				<input type="password" name="password" placeholder="Contraseña" class="form-control">
			</div>
		</div>
		<div class="text-center row mt-4">
			<div class="col">
				<button type="submit" class="btn btn-primary rounded-pill">Ingresar</button>
			</div>
			</form>
		</div>		
	</div>
</body>
</html>