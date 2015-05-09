<?php
session_start();
session_unset();
session_destroy();
header("Location: ../index.php");/*Redireccionamiento a la carpeta raiz y luego de nuevo al index*/
?>