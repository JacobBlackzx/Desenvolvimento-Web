
<?php
	
	function valida_login ($login, $senha) {
		
		// Validar direto em um Banco de Dados
		$login_bd = 'vitor.hugo';
		$senha_bd = '123';
		
		// Verificação de login Logica
			if($login == $login_bd && $senha == $senha_bd) {
				return true;
			}
			
			return false;
	}
	
?>