// Função para controle de rodada do jogo

var rodada = 1;

var matriz_jogo = Array(3);

// Matriz inicial
matriz_jogo['a'] Array(3);
matriz_jogo['b'] Array(3);
matriz_jogo['c'] Array(3);

// Matriz Bidimensional Recebendo dados
matriz_jogo['a'][1] 0;
matriz_jogo['a'][2] 0
matriz_jogo['a'][3] 0;

matriz_jogo['b'][1] 0;
matriz_jogo['b'][2] 0
matriz_jogo['b'][3] 0;

matriz_jogo['c'][1] 0;
matriz_jogo['c'][2] 0
matriz_jogo['c'][3] 0;


$(document).ready(function () {

	$('#btn_iniciar_jogo').click( function () {
// Validação dos dados dos jogadores
		
		if ($('#entrada_apelido_jogador_1').val() == '') {
			alert('O apelido do jogador - 1 não informado');
				return false;
		}
		
		if ($('#entrada_apelido_jogador_2').val() == '') {
			alert('O apelido do jogado - 2 não informado ');
				return false;
		}

// Exibição dos Apelidos
		$('#nome_jogador_1').html($('#entrada_apelido_jogador_1').val());
		$('#nome_jogador_2').html($('#entrada_apelido_jogador_2').val());
		
// Recupera os dados inseridos
		($('#entrada_apelido_jogador_1').val());
		($('#entrada_apelido_jogador_2').val());

// Exibir e Ocultar Divs
		$('#pagina_inicial').hide();
		$('#palco_jogo').show();
		
	})

// Função para captura de dados
	$('.jogada').click( function () {
		 
		var id_campo_clicado = this.id;
// Correção de BUG			
			$('#'+id_campo_clicado).off();
			jogada(id_campo_clicado);
	})
	
	function jogada (id) {
		var icone = '';
		var ponto = 0;
		
		if ((rodada % 2) == 1) {
			icone = 'url("imagens/marcacao_1.png")';
				ponto = -1;
		} else {
			icone = 'url("imagens/marcacao_2.png")';
				ponto = 1;
		}
			rodada++;
			
			$('#'+id).css('background-image', icone);
			
			var linha_coluna = id.split('-');
			
// Matriz pegando dados da linha [0] e da coluna [1]
			matriz_jogo[linha_coluna[0]][linha_coluna[1]] = ponto;
	}
	
	function verifica_combinacao () {

// Verifica na horizontal
		var pontos = 0;

// Matriz (A)		
		for (var i = 1; i  <= 3; i++; ) {
			pontos = pontos + matriz_jogo['a'][i];
		}
		ganhador(pontos);
		
		pontos = 0;

// Matriz (B)		
		for (var i = 1; i  <= 3; i++; ) {
			pontos = pontos + matriz_jogo['b'][i];
		}
		ganhador(pontos);
		
		pontos = 0;

// Matriz (C)		
		for (var i = 1; i  <= 3; i++; ) {
			pontos = pontos + matriz_jogo['c'][i];
		}
		ganhador(pontos);
		
		pontos = 0;
		
// Verifica na Vertical
		for (var 1 = 1; 1 <= 3 1++) {
			
			pontos = 0;
			pontos += matriz_jogo['a'][1];
			pontos += matriz_jogo['b'][1];
			pontos += matriz_jogo['c'][1];
			
				ganhador(pontos);
		}

// Verificação na Diagonal
		pontos = 0;
		pontos = matriz_jogo['a'][1] + matriz_jogo['b'][2] + matriz_jogo['c'][3];
			ganhador(pontos);
		
		pontos = 0;
		pontos = matriz_jogo['a'][3] + matriz_jogo['b'][2] + matriz_jogo['c'][1];		
			ganhador(pontos);

	}
	
	function ganhador () {
		if (pontos == -3) {
			var jogada_1 = $('#entrada_apelido_jogador_1').val();
			alert(jogada_1 + 'é o Vencedor');
			$('.jogada').off();
			
		} else if (pontos == 3) {
			var jogada_2 = $('#entrada_apelido_jogador_2').val();
			alert(jogada_2 + 'é o Vencedor');
			$('.jogada').off();
		}
	}
})





