<?php
session_start();
if(isset($_SESSION['valido'])){ #isset para verificar existencia de variable con dato
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="../../resources/css/estilo_usuario.css" media="screen" rel="stylesheet" type="text/css">
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
<body>

<?php
echo'<table align="center" CELLPADDING="5" CELLSPACING="5" valign="middle" class="tabla_materia">
	   <tr>
       <th class=""><h2>Tipo de Envase</h2></th>
	   <th class=""><h2>Capacidad</h2></th>
	   <th class=""><h2>Piezas en Existencia</h2></th>
	   </tr>';


include('conexion_mysql.php');

$todos=mysql_query("select * from envases");
while($reg=mysql_fetch_array($todos,MYSQL_NUM)){
echo '
<tr>
<td><label value="">'.$reg[0].'</label></td>
<td><label value="">'.$reg[1].'</label></td>
<td><label value="">'.$reg[2].'</label></td>
<tr>
';
}

echo'</table>';

?>

</body>
</html>

<?php
}
else{
   header("Location:../novalidado.php");
   exit();
}
?>