<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Ingreso al Sistema</title>
</head>
<body>
<form  name="FORMULARIO" action="valida.php"  method="post" >

<label for="email">Email:</label>
<input type="text" name="email" id="email"/><br/>

<label for="contra"> Contrase&ntildea::</label>
<input type="password" name="password" id="password"/><br/>

<input type="submit" value="enviar datos"/>
<input type="reset" value="borrar datos"/>
</form>
</body>
</html>