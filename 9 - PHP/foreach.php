<!DOCTYPE HTML>
<html>
	<head>
		<title>Foreach PHP</title>
		<meta charset="utf-8" />
		
	</head>
	
	<body>
		
		<?php
			
			$produtos[1] = 'Sofá';
			$produtos[2] = 'Mesa';
			$produtos[3] = 'Cadeira';
			$produtos[4] = 'Fogão';
			$produtos[5] = 'Geladeira';

// Necessário array [1]... Apelido 'Sofá'... 			
			foreach ( $produtos as $produtos) {
				
				echo $produtos.'<br />';
				
				if( $produtos == 'Mesa') {
					echo 'Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras'.'<br />';
					
				}
			}
			
		?>
		
	</body>
</html>