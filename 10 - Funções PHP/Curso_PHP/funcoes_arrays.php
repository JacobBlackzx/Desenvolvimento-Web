
<?php
	
	// is_array
	$array = array();
	$retorno = is_array( $array );
	
	if( $retorno ) {
		echo	"Verdadeiro".'<br>';
	} else {
		echo "Falso".'<br>';
	}
	
	// in_array
	$array = array('Linux', 'MAC', 'Microsoft');
	$retorno = in_array( 'Solaris', $array );
	
	if($retorno) {
		echo "Verdadeiro".'<br>';
	} else {
		echo "Falso".'<br>';
	}
	
	// array_key
	$produtos = array( 10=>'Notebook', 11=>'Teclado' );
	$chave_array = array_keys( $produtos );
	
	echo var_export( $chave_array ).'<br>';
	
	// sort
	$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola');

	sort( $frutas );
	echo var_export( $frutas ).'<br>';
	
	// asort
	$frutas = array( 0=>'Banana', 1=>'Amora', 2=>'Carambola' );

	asort( $frutas );
	echo var_export( $frutas ).'<br>';

	// count
	
	$frutas = array( 0=>'Banana', 1=>'Amora', 2=>'Carambola' );
	
	$itens_array = count( $frutas );
	
	echo $itens_array.'<br>';
	
	// array_merge
	$array_1 = array( 'Linux', 'Mac' );
	$array_2 = array('Microsoft');
	$array_3 = array('Solaris');
	
	$novo_array = array_merge($array_1, $array_2, $array_3);
	
		echo var_export($novo_array).'<br>';
	
	// explode
	$string = "05/07/2018";
	$retorno = explode( "/", $string );
	
	echo var_export( $retorno ).'<br>';
	
	// implode
	$nova_string = implode( "-", $retorno );
	
	echo $nova_string.'<br>';
	
?>
