<?php
session_start();
if(isset($_SESSION['valido'])){ #isset para verificar existencia de variable con dato
?>

<p>
<br>SERVIDOR</br>
<br>ip: 132.248.249.251</br>

<br>user:g2602</br>
<br>pass:Practicag2602</br>
<br>*Si se usa Windows se pueden conectar desde WinSCP</br>
<br>*Si se usa Linux desde el explorador de archivos y conectar a servidor</br>


<br>Carpeta donde subir los archivos: /var/www/practica_2015/equipo5</br>

<br>BASE DE DATOS</br>
<br>ip: 132.248.249.251/phpmyadmin</br>
<br>user: practica5</br>
<br>Pass: practica_2015 </br></p>


<?php
}
else{
   echo "no puedes ver esto";
   exit();
}
?>