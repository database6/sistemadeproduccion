<?php
  session_start();
  if(isset($_SESSION['valido'])){ #isset para verificar existencia de variable con dato
 
  include('conexion_mysql.php'); #incluyendo base de datos

  $con=mysql_query("select id_usuario from usuarios where email='{$_SESSION['email']}' ");
  $re=mysql_fetch_array($con,MYSQL_NUM);

  $qu=$re[0];
  $dia_or=$_POST['dia_orden'];
  $mes_or=$_POST['mes_orden'];
  $year_or=$_POST['year_orden'];
  $tde=$_POST['tde'];
  $cantidad=$_POST['cantidad'];
  $cliente=$_POST['cliente'];
  $dia_en=$_POST['dia_en'];
  $mes_en=$_POST['mes_en'];
  $year_en=$_POST['year_en'];
  $descp=$_POST['desc'];
  $fecha_orden=$year_or."-".$mes_or."-".$dia_or;
  $fecha_entrega=$year_en."-".$mes_en."-".$dia_en;

	$consulta=mysql_query("SELECT piezas_existencia,tipo_de_envase from envases where tipo_de_envase='$tde'");
	$arreglo=mysql_fetch_array($consulta,MYSQL_NUM);	

if ($arreglo[0]<$cantidad){
	#echo "NO SE PUEDE HACER EL PEDIDO NO CONTAMOS CON ESE PRODUCTO EN EL ALMACEN";
	header("Location:generar_error.php"); 
}else{

	#echo "TU PEDIDO FUE GENERADO EXITOSAMENTE";
	$consu=mysql_query(" INSERT INTO ordenes_de_produccion (id_usuario,fecha_orden,tipo_de_envase,cantidad,cliente,fecha_entrega,descripcion) VALUES ('$qu','$fecha_orden','$tde','$cantidad','$cliente','$fecha_entrega','$descp')");
	
	$resta=$arreglo[0]-$cantidad;

	$consulta3=mysql_query("UPDATE envases set piezas_existencia='$resta' where tipo_de_envase='$arreglo[1]'");
	$consulta4=mysql_query("UPDATE linea_de_pro set estatus='ACTIVA' where 	tipo_de_envase='$arreglo[1]'");
	
	header("Location:generar_exito.php"); 
}
mysql_close();
}
?>