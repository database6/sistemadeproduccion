<?php
	$conexion=mysql_connect("localhost","practica5","Practica5");
    if($conexion){
	    #echo "conexion realizada ";
	 }
	 else{
	   #echo "conexion rechazada ";
	 }
	 
	$bd= mysql_select_db("practica5",$conexion);
	 if($bd){
	   #echo "base de datos seleccionada";
	 }
	 else{
	   #echo "error no se selecciono base de datos";
	 }
?>