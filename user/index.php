<?php
session_start();
if(isset($_SESSION['valido'])){ #isset para verificar existencia de variable con dato
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sis. de Producción</title>
<link href="resources/css/.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body>
<b>BIENVENIDO AL SISTEMA DE PRODUCCION</b>
<p class=""><a target="_parent" href="../resources/cerrar.php"> Cerrar Sesion </a></p>
<p class=""><a target="_blank" href="../docs/Proyecto de Sistema de Producción.pdf"> Documentacion </a></p>
<p class=""><a target="_blank" href="../docs/server.php"> Servidor </a></p>
</body>
</html>

<?php
}
else{
   echo "no puedes ver esto";
   exit();
}
?>