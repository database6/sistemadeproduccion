<?php
session_start();
if(isset($_SESSION['valido'])){ #isset para verificar existencia de variable con dato
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Refresh" content="5;url=../index.php">
<link href="../../resources/css/estilo_usuario.css" media="screen" rel="stylesheet" type="text/css">
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
<body>
<div class="wrapper">
<div class="errora">
  <h1>!LA ORDEN NO SE PUEDE COMPLETAR!</h1>
  <h1>NO SE CUENTA CON MATERIAL SUFICIENTE EN EL ALMACEN</h1>
  <h1>COTACTA AL DEPARTAMENTO DE COMPRAS</h1>

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
</body>
</html>
<?php
}
else{
   header("Location:../novalidado.php");
   exit();
}
?>