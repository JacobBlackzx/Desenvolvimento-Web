
<?php
	
	// String strtolower
	//$texto = "Curso Completo de PHP";
		//echo strtolower($texto).'<br /><br />';
	
	// String strtoupper
	//$texto = "Curso Completo de PHP";
		//echo strtoupper($texto).'<br /><br />';
	
	// String ucfirst
	//$texto = "curso completo de PHP";
		//echo ucfirst($texto).'<br /><br />';
	
	// String strlen
	//$texto = "curso completo de PHP";
		//echo strlen($texto).'<br /><br />';

	// String str_replace
	$texto = "100.200.300-10";
	$cpf = str_replace(".", "", $texto).'<br><br>';
	$cpf = str_replace("-", "", $cpf);
		echo $cpf;
	
	// String substr
	$texto = "Entenda porque seu smartphone esquenta tanto, se você tem um smartphone.";
	$noticia = substr($texto, 0, 44).'<br><br>';
	echo $noticia."Clique aqui para ver a notícia inteira ...<br><br>";
	
	
?>

<?php
	
	//$cpf = isset( $_POST['cpf'] ) ? $_POST['cpf'] : '' ;
	//$total_string_cpf = strlen( $cpf );
	
	//if( $total_string_cpf != 11 && $cpf != '' ) {
		//echo "CPF Invalido";
	//}
	
?>

<form method="post" action="">
	<label>CPF:
		<input type="text" name="cpf" />
	</label>
	
	<input  type="submit" value="cadastrar" />
</form>

























