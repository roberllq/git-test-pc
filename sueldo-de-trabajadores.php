Un trabajador percibe inicialmente un haber básico, asimismo tiene una bonificación del 20% del haber básico,<br> también cuenta por gratificación anual el 50% del haber básico, por movilidad el 15% del haber básico.<br><br>
Siendo el total de remuneración: haber básico + bonificación + gratificación + movilidad.<br> Tiene descuento por AFP del 13% de total de remuneraciones y por adelanto el 35% del total de remuneraciones.<br>
Determine el neto a pagar.

<?php   // 1) Diseñamos la estructura de datos a ingresar ?>
		<form method="post" action="sueldo-de-trabajadores.php">
			<h1>Sueldo de los Trabajadores:</h1>
			<input type="text" name="txtSueldo">
			<input type="submit" name="btnEnviar" value="Calcular">
		</form>

<?php   // 2) Realizmos las operaciones lógicas:

		error_reporting(0);
 		$basico = $_POST['txtSueldo'];
		$bonificacion = 0.20 * $basico;
		$grati_anual = 0.50 * $basico;
		$movilidad = 0.15 * $basico;
		$total_remuneracion = $basico + $bonificacion + $grati_anual + $movilidad;

		// se restan:
		$descuento_afp = 0.13 * $total_remuneracion;
		$adelanto = 0.35 * $total_remuneracion;

		$neto = ($total_remuneracion - $descuento_afp) - $adelanto;
?>

<?php	// 3) Mostramos el Resultado:

		echo "El sueldo básico del empleado es: S/. ".number_format($basico, 2, ',', ' '). "<br>";
		echo "La bonificación del empleado es: S/. " .number_format($bonificacion, 2, ',', ' '). "<br>";
		echo "La gratificación anual es: S/. " .number_format($grati_anual, 2, ',', ' '). "<br>";
		echo "La movilidad es: S/. " .number_format($movilidad, 2, ',', ' '). "<br>";
		echo "El total de remuneración es: S/. " .number_format($total_remuneracion, 2, ',', ' '). "<br>";
		echo "El descuento de afp es: S/. " .number_format($descuento_afp, 2, ',', ' '). "<br>";
		echo "El adelanto es: S/. " .number_format($adelanto, 2, ',', ' '). "<br>";
		echo "El neto es: S/. " .number_format($neto, 2, ',', ' '). "<br>";
?>