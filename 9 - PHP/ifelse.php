<!DOCTYPE HTML>
<html>
	<head>
		<title>IF e ELSE</title>
		<meta charset="utf-8" />

	</head>
	
	<body>
		
		<?php
			
/*			if(true) {
				echo 'Sim, a depressão é verdadeira';
			} else {
				echo 'Não, expressão não é verdadeira';
			}
*/			
			// Operadores de Comparação
			// ==
			// ===
			// != <>
			// !==
			// <
			// >
			// <=
			// =>
			
			// Operadores Lógicos
			// && ou AND -> Retorna verdadeiro se todos os resultados das expressões forem verdade
			// V e V = V
			//  || ou OR -> Retorna verdadeiro se uma da expressões forem verdadeiras
			//  XOR -> Retorna verdadeiro apenas se 1 das expressões forem verdadeiras
			// F XOR V = V
			
			
			if(5 == 3 || 5 < 4) {
				echo 'Entrou no bloco <b>IF</b>';
			} else {
				echo 'Entrou no bloco <b>ELSE</b>';
			}
			
		?>
		
	</body>	
</html>