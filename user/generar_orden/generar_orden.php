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
	<form name="FORMULARIO" action="generar_orden/accion_generar.php" method="post">
		<table width="" class="tabla_orden" align="center" CELLPADDING="5" CELLSPACING="5" valign="middle">
		<tr>
		  <td colspan="2"><h2>INGRESE DATOS DE LA NUEVA ORDEN</h2></td>
		</tr>
			<tr>
			<td align=right><label for="dia_orden">Fecha de Orden: </label></td>
			<td ><select name="dia_orden" id"dia_orden">
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
						<select name="mes_orden" id"mes_orden">
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
						<select name="year_orden" id"year_orden">
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
				<td align=right><label for="tipo_de_envase" class="">Tipo de Envase:</label></td>
				<td><select name="tde" id="tde">
						<option value="envase A">Envase A 400 ML</option>
						<option value="envase B">Envase B 500 ML</option>
						<option value="envase C">Envase C 600 ML</option>
						<option value="envase D">Envase D 1 LT</option>
				</select>
				</td>
				</tr>

			<tr>
				<td align=right><label for="cantidad" class="">Cantidad:</label></td>
				<td><select name="cantidad" id="cantidad">
						<option value="1000">1,000 piezas</option>
						<option value="5000">5,000 piezas</option>
						<option value="10000">10,000 piezas</option>
						<option value="20000">20,000 piezas</option>
						<option value="50000">50,000 piezas</option>
				</select>
				</td>
				</tr>
			<tr>
				<td align=right><label for="cliente" class="">Cliente:</label></td>
				<td><input type="text" name="cliente" id="cliente" maxlength="30" required="required"/></td>
			</tr>	

			<tr>
			<td width="" align=right><label class="" for="dia_en">Fecha de Entrega:</label></td>
			<td width=""><select name="dia_en" id="dia_en" >
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
						<select name="mes_en" name="mes_en">
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
						<select name="year_en" id="dia_en">
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
				<td align=right><label for="desc" class="">Descripción:</label></td>
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