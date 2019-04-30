<!DOCTYPE HTML>
<html>
	<head>
		<title>Funções PHP</title>
		<meta charset="utf-8" />

	</head>
	<body>
		
		<?php
			
			function primeira_funcao () {
				
				// Código de Execução
				echo 'Curso de PHP <br /><br />';
			}
			
			primeira_funcao();
			
			// Caracteres Especiais apenas "_"
			// Nunca iniciar funções com números "$1num" 
			
			// Função sem Retorno
			function exibir_boas_vindas ($nome) {
				echo 'Bem vindo ao Curso de PHP, '.$nome;
			}
			
			// Função com Retorno
			function calcular_soma () {
					return 1+2;
			}
			
			// Chamar a função
			echo calcular_soma();
				echo '<br /><br />';
			echo exibir_boas_vindas('Vitor Hugo');
			
			
		?>
		
	</body>
</html>