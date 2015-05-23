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
	<form name="FORMULARIO" action="generar_ma/accion_generar.php" method="post">
		<table width="" class="tabla_orden" align="center" CELLPADDING="5" CELLSPACING="5" valign="middle">
		<tr>
		  <td colspan="2"><h2>INGRESE DATOS DEL MANTENIMIENTO</h2></td>
		</tr>
		<tr>
			<td align=right><label for="maquina" class="">Maquina:</label></td>
				<td><select name="maquina" id="maquina">
						<option value="1">Moldeado 400ML</option>
						<option value="2">Etiquetado 400ML</option>
						<option value="3">Empacadora 400ML</option>
						<option value="4">Moldeado 500ML</option>
						<option value="5">Etiquetado 500ML</option>
						<option value="6">Empacadora 500ML</option>
						<option value="7">Moldeado 600ML</option>
						<option value="8">Etiquetado 600ML</option>
						<option value="9">Empacadora 600ML</option>
						<option value="10">Moldeado 1 LT</option>
						<option value="11">Etiquetado 1 LT</option>
						<option value="12">Empacadora 1 LT</option>

				</select>
			</td>
		</tr>
			<tr>
			<td align=right><label for="dia_ma">Fecha de mantenimiento: </label></td>
			<td ><select name="dia_ma" id"dia_ma">
								<option value="01">1</option>
								<option value="02">2</option>	
								<option value="03">3</option>
								<option value="04">4</option>
								<option value="05">5</option>
								<option value="06">6</option>
								<option value="07">7</option>
								<option value="08">8</option>
								<option value="09">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
						</select>
						<select name="mes_ma" id"mes_ma">
								<option value="01">Enero</option>
								<option value="02">Febrero</option>	
								<option value="03">Marzo</option>
								<option value="04">Abril</option>
								<option value="05">Mayo</option>
								<option value="06">Junio</option>
								<option value="07">Julio</option>
								<option value="08">Agosto</option>
								<option value="09">Septiembre</option>
								<option value="10">Octubre</option>
								<option value="11">Noviembre</option>
								<option value="12">Diciembre</option>
						</select>
						<select name="year_ma" id"year_ma">
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
						</select>
			</td>
			</tr>
			<tr>
			<td width="" align=right><label class="" for="dia_fn">Fecha de Finalalización:</label></td>
			<td width=""><select name="dia_fn" id="dia_fn" >
								<option value="01">1</option>
								<option value="02">2</option>	
								<option value="03">3</option>
								<option value="04">4</option>
								<option value="05">5</option>
								<option value="06">6</option>
								<option value="07">7</option>
								<option value="08">8</option>
								<option value="09">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
						</select>
						<select name="mes_fn" id="mes_fn">
								<option value="01">Enero</option>
								<option value="02">Febrero</option>	
								<option value="03">Marzo</option>
								<option value="04">Abril</option>
								<option value="05">Mayo</option>
								<option value="06">Junio</option>
								<option value="07">Julio</option>
								<option value="08">Agosto</option>
								<option value="09">Septiembre</option>
								<option value="10">Octubre</option>
								<option value="11">Noviembre</option>
								<option value="12">Diciembre</option>
						</select>
						<select name="year_fn" id="dia_fn">
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
						</select>
			</td>
			</tr>

			<tr>
				<td align=right><label for="desc" class="">Informacion Adicional:</label></td>
				<td><textarea class="" required="required" name="desc" id="desc"rows="2" cols="30" maxlength="100"></textarea></td>
			</tr>		
		
		<tr>
		<td align=right><input class="boton" id="boton" type="submit" value="ENVIAR"/></td>
		<td><input id="boton" type="reset"  class="boton" value="BORRAR"/></td>			
	    </tr>

</table>

</form>


</body>
</html>
<?php
}
else{
   header("Location:../novalidado.php");
   exit();
}
?>