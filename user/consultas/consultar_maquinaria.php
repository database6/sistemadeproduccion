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
       <th class=""><h2>Linea</h2></th>
	   <th class=""><h2>Maquina</h2></th>
	   <th class=""><h2>No.Serie</h2></th>
	   <th class=""><h2>Tipo de Maquina</h2></th>
	   <th class=""><h2>Estatus Maquina</h2></th>
	   <th class=""><h2>Estatus Linea</h2></th>
	   </tr>';


include('conexion_mysql.php');

$consulta=mysql_query("SELECT
 linea_de_pro.nombre_linea,
 linea_de_pro.estatus,
 maquinaria.maquina,
 maquinaria.no_serie,
 maquinaria.tipo_maquina,
 maquinaria.estatus
FROM linea_de_pro
INNER JOIN maquinaria  ON linea_de_pro.id_linea=maquinaria.id_linea");

while($reg=mysql_fetch_array($consulta,MYSQL_NUM)){
echo '
<tr>
<td><label value="">'.$reg[0].'</label></td>
<td><label value="">'.$reg[2].'</label></td>
<td><label value="">'.$reg[3].'</label></td>
<td><label value="">'.$reg[4].'</label></td>
<td><label value="">'.$reg[5].'</label></td>
<td><label value="">'.$reg[1].'</label></td>
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