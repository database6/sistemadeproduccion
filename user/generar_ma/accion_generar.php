<?php
 
  include('conexion_mysql.php'); #incluyendo base de datos

  $maquina=$_POST['maquina'];
  $dia_ma=$_POST['dia_ma'];
  $mes_ma=$_POST['mes_ma'];
  $year_ma=$_POST['year_ma'];
  $dia_fn=$_POST['dia_fn'];
  $mes_fn=$_POST['mes_fn'];
  $year_fn=$_POST['year_fn'];
  $descp=$_POST['desc'];
  $fecha_ma=$year_ma."-".$mes_ma."-".$dia_ma;
  $fecha_fn=$year_fn."-".$mes_fn."-".$dia_fn;

	
	$consu=mysql_query(" INSERT INTO mantenimiento
   (id_maquina,fecha_de_inicio,fecha_de_fin,informacion_adicional)
    VALUES ('$maquina','$fecha_ma','$fecha_fn','$descp')");
	
	$consulta4=mysql_query("UPDATE maquinaria set estatus='MANTENIMIENTO' where   id_maquina='$maquina'");
	
  header("Location:generar_exito.php"); 
mysql_close();
?>