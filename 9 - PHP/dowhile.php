<!DOCTYPE HTML>
<html>
	<head>
		<title>Do While PHP</title>
		<meta charset="utf-8" />
		
	</head>
	<body>
		
		<?php
			
			// Declaração de Variável
			$num = 1;
			
			do {
				echo 'Teste: '.$num;
				echo '<br />';
					$num = $num + 1;
				// break
				// continue
				
			} while ( $num < 10); {
				
			}
			
			
		?>
		
	</body>
</html>