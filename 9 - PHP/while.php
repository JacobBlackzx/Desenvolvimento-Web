<!DOCTYPE HTML>
<html>
	<head>
		<title>While PHP</title>
		<meta charset="utf-8" />
		
	</head>
	<body>
		
		<?php
			
			// Declaração de Variável
			$num = 1;
			
			while($num < 10) {
				$num = $num + 2;
				
				if($num == 3) {
					continue;
				}
					echo $num;	
						echo '<br />';
			}
			
			
		?>
		
	</body>
</html>