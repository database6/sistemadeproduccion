<?php
  include('resources/conexion_mysql.php'); #incluyendo script que está en la carpeta admin
  $email=$_POST['email'];
  $clave=$_POST['password'];

  if($email=="" && $clave==""){ #validamos que los campos no vengan vacios
	  header("Location: novalidado.php");#enviamos al sitio de inicio de sesion
			      }
	else{
		  $cons=mysql_query("select email,contrasena,nombre from usuarios where email='$email' and contrasena='$clave'");
		  $arreglo=mysql_fetch_array($cons,MYSQL_NUM);
  
			  if($email==$arreglo[0]&&$clave==$arreglo[1]){
				  session_start();
				  $_SESSION['email']=$email;
				  $_SESSION['pas']=$clave;
				  $_SESSION['valido']="si";
				  header("Location: user/index.php");#enviamos al sitio
									}
    			  else{
			       header("Location:index.php?val=1");
        		      }
	   }
?>
