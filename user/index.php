<?php
session_start();
if(isset($_SESSION['valido'])){ #isset para verificar existencia de variable con dato
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sis. de Producción</title>
<link href="../resources/css/estilo_usuario.css" media="screen" rel="stylesheet" type="text/css">
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="../resources/javascript/divs.js"></script>
</head>
	<body>
		<div class="wrapper">
		
			<div class="container_head">
			<h1>SISTEMA DE PRODUCCIÓN</h1>
			<?php
				include('../resources/conexion_mysql.php');
				$consulta=mysql_query("select nombre,apellidos,email from usuarios where email='{$_SESSION['email']}' ");
				$resultado=mysql_fetch_array($consulta,MYSQL_NUM);
				echo "<p>Usuario: $resultado[0]$resultado[1]";
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Correo: $resultado[2]</p>";
				?>
			</div>
			<div class="container_botones">
						<dl>
						 <dt><input type="button" class="boton" value="Cerrar Sesión" onClick=" window.location.href='../resources/cerrar.php' "></li>
						 </dl>
					</div>
			
			<div class='nav_bar'>
				<ul>
   					<li><a href='#' id="boton_1"><span>Materia Prima</span></a></li>
   					<li><a href='#' id="boton_2"><span>Generar Orden</span></a></li>
					<li><a href='#' id="boton_3" ><span>Consultar ordenes en proceso</span></a></li>
					<li><a href='#' id="boton_4"><span>Server</span></a></li>
					<li><a href='#' id="boton_5"><span>Maquinaria</span></a></li>
					<li><a href='#' id="boton_6"><span>Lineas de Produccion</span></a></li>
					<li><a href='#' id="boton_7"><span>Mantenimiento</span></a></li>
					<li><a target="_blank" href='../docs/Proyecto de Sistema de Producción.pdf' id="">Documentación<span></span></a></li>

				</ul>
			</div>			
					
			<div class="container" id="capa">
				<h1>BIENVENIDO AL SISTEMA DE PRODUCCION</h1>
				 <p>DE LA ENVASADORA</p>
				 <p>ENVASES CL S.A. de C.V.</p>
				 <p>SELECCIONA UNA OPCION PARA CONTINUAR</p>

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

    </body>
</html>
<?php
}
else{
   header("Location:../novalidado.php");
   exit();
}
?>