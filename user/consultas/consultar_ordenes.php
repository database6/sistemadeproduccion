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
echo'<table align="center" CELLPADDING="12" CELLSPACING="12" valign="middle" class="tabla_ordenes">
	   <tr>
       <th class=""><h2>Usuario</h2></th>
	   <th class=""><h2>Fecha</h2></th>
	   <th class=""><h2>Tipo de Envase</h2></th>
	   <th class=""><h2>Cantidad</h2></th>
	   <th class=""><h2>Cliente</h2></th>
	   <th class=""><h2>Fecha de Entrega</h2></th>
	   <th width="400px"class=""><h2>Descripcion</h2></th>
	   </tr>';


include('conexion_mysql.php');

$consulta=mysql_query("SELECT
 usuarios.nombre,
 ordenes_de_produccion.fecha_orden,
 ordenes_de_produccion.tipo_de_envase,
 ordenes_de_produccion.cantidad,
 ordenes_de_produccion.cliente,
 ordenes_de_produccion.fecha_entrega,
 ordenes_de_produccion.descripcion
 FROM ordenes_de_produccion
 INNER JOIN usuarios  ON ordenes_de_produccion.id_usuario=usuarios.id_usuario");


while($reg=mysql_fetch_array($consulta,MYSQL_NUM)){
echo '
<tr>
<td><label value="">'.$reg[0].'</label></td>
<td><label value="">'.$reg[1].'</label></td>
<td><label value="">'.$reg[2].'</label></td>
<td><label value="">'.$reg[3].'</label></td>
<td><label value="">'.$reg[4].'</label></td>
<td><label value="">'.$reg[5].'</label></td>
<td><label value="">'.$reg[6].'</label></td>
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