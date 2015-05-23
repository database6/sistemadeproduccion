<?php
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title> Ingreso al Sistema</title>
		<link href="resources/css/estilo_login.css" media="screen" rel="stylesheet" type="text/css">
	</head>
	<body>

	<div class="wrapper">
	<div class="container">
		<h1>Bienvenido al Sistema de Producción</h1>
		<h2>Por favor incia sesión</h2>
		<form  name="FORMULARIO" action="valida.php"  method="post"  class="form">


			<input maxlength="30" required="required" type="text" name="email" id="email" placeholder="Email"/><br/>


			<input required="required" type="password" name="password" id="password" placeholder="Contraseña"/><br/>

				<button type="submit" id="login-button">Login</button>
		</form>
	</div>

		<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    <script src="../resources/js/index_login.js"></script>


	</body>
</html>