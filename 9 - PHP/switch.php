<!DOCTYPE HTML>
<html>
	<head>
	<title>Swtich PHP</title>
	<meta charset="utf-8" />
	
	
	</head>
	<body>

		<?php

// ==		Variável
			$opcao = 4;
			
			switch($opcao) {
				case 1:
					echo 'Primerio case<br/>';
						break;
				
				case 2:
					echo 'Segundo case';
						break;
				
				case 3:
					echo 'Terceiro case';
						break;
				
				default:
					echo 'Case default';
						break;
			}
			
		?>
		
	</body>	
</html>