<!DOCTYPE HTML>
<html>
	<head>
		<title>Tabuleiro de Xadrez PHP</title>
		<meta charset="utf-8" />
	</head>
	
	<body>
		
		<?php
			
			$tabulerio[8]['a'] =  'torre preta';
			$tabulerio[8]['b'] = 'bispo preta';
			$tabulerio[8]['c'] = 'cavalo preta';
			$tabulerio[8]['d'] = 'rainha preta';
			$tabulerio[8]['e'] = 'rei preta';
			$tabulerio[8]['f'] = 'bispo preta';
			$tabulerio[8]['g'] = 'cavalo preta';
			$tabulerio[8]['h'] = 'torre preta';
			
			$tabulerio[7]['a'] = 'peao preto';
			$tabulerio[7]['b'] = 'peao preto';
			$tabulerio[7]['c'] = 'peao preto';
			$tabulerio[7]['d'] = 'peao preto';
			$tabulerio[7]['e'] = 'peao preto';
			$tabulerio[7]['f'] = 'peao preto';
			$tabulerio[7]['g'] = 'peao preto';
			$tabulerio[7]['h'] = 'peao preto';
			
			print_r($tabulerio);
				print '<br />';
			print $tabulerio[8]['d'];
			
	
		?>
		
	</body>
</html>