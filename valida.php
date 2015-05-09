   <?php
  include('resources/conexion_mysql.php'); #incluyendo script que está en la carpeta admin
  $email=$_POST['email'];
  $clave=$_POST['password'];
  
  $cons=mysql_query("select email,contrasena,nombre from usuarios where email='$email' and contrasena='$clave'");
	 
  $arreglo=mysql_fetch_array($cons,MYSQL_NUM);
  

  if($email==$arreglo[0]&&$clave==$arreglo[1]){#agregamos si es admin
  session_start();
  $_SESSION['email']=$email;
  $_SESSION['pas']=$clave;
  $_SESSION['valido']="si";
  header("Location: principal.php");#enviamos al sitio de admin
  }
    else{
       header("Location:index.php?val=1");
        }
  ?>