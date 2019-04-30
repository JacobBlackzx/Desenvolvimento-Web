<!DOCTYPE HTML>
<html>
	<head>
		<title>Notícias PHP</title>
		<meta charset="utf-8" />
		
	</head>
	<body>

		<?php
			
			$noticias = array();
			
			$noticias[1]['titulo'] = 'Titulo da notícia 1';
			$noticias[1]['conteudo'] = 'Conteúdo da notícia 1';
			
			$noticias[2]['titulo'] = 'Titulo da notícia 2';
			$noticias[2]['conteudo'] = 'Conteúdo da notícia 2';
			
			$noticias[3]['titulo'] = 'Titulo da notícia 3';
			$noticias[3]['conteudo'] = 'Conteúdo da notícia 3';
			
//			var_dump($noticias);

// Condição While
		
			$idx = 1; // Variável
		// Condição
			while($idx <= 3) {
				
				// Impressão
				echo '<h2>Condição While</h2>'.'<br />';
				
				echo $noticias[$idx]['titulo'].'<br />';
				echo $noticias[$idx]['conteudo'].'<br /><br />';
				
					$idx = $idx + 1; // Incremento
			}
			
// Condição Do While
			
			$idx = 1;
			do {
				
				echo '<h2>Condição Do While</h2>'.'<br />';
				
				echo $noticias[$idx]['titulo'].'<br />';
				echo $noticias[$idx]['conteudo'].'<br /><br />';
				
				$idx = $idx + 1;
				
			} while($idx <= 4); {
				
			}
// Condição For
			
			for($idx = 1; $idx <= 4; $idx = $idx + 1) {
				echo '<h2>Condição For</h2>'.'<br />';
				
				echo $noticias[$idx]['titulo'].'<br />';
				echo $noticias[$idx]['conteudo'].'<br />';
			}

			
		?>
		
	</body>
</html>























