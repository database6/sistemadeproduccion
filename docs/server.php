<?php
session_start();
if(isset($_SESSION['valido'])){ #isset para verificar existencia de variable con dato
?>

<!DOCTYPE html>
<html lang="en">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	<title>Info. Server</title>
			<link href="../resources/css/estilo_usuario.css" media="screen" rel="stylesheet" type="text/css">
		</head>
	<body>
				<h3>SERVIDOR</h3>
				<br>ip: 132.248.249.251</br>

				<br>user: g2602</br>
				<br>pass: Practicag2602</br>
				<br>*Si se usa Windows se pueden conectar desde WinSCP</br>
				<br>*Si se usa Linux desde el explorador de archivos y conectar a servidor</br>


				<br>Carpeta donde subir los archivos: /var/www/practica_2015/equipo5</br>
				<br><br>
				<h3>BASE DE DATOS</h3>
				<br>ip: 132.248.249.251/phpmyadmin</br>
				<br>user: practica5</br>
				<br>Pass: Practica5 </br>
	</body>
</html>

<?php
}
else{
   header("Location:../novalidado.php");
   exit();
}
?>