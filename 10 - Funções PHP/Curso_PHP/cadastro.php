
<?php

// Validação Nomes	
	if( isset($_POST['nome']) && empty($_POST['nome']) ) {
		echo 'Preencha o campo Nome Completo<br />';
	}

// Validação Números
	if( isset($_POST['cpf']) && empty($_POST['cpf']) && !is_numeric($_POST['cpf']) ) {
		echo 'Preencha o campo CPF<br />';
	}

?>

<form method="post" action="">
	<label>
		Nome Completo*:
		<input type="text" name="nome" />
	</label>
	
	<label>
		CPF*:
		<input type="text" name="cpf" />
	</label>
		<input type="submit" value="cadastrar" />
	
</form>