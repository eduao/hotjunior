<?php 
	// Inserção de fonte para melhorar a qualidade visual 
?>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<?php 
	// Inserção de estilo CSS para melhorar a qualidade visual
?>
<style>
	body{
		font-family: 'Roboto', sans-serif;
		font-size: 0.7em;
	}
	code{
		font-size: 1.3em;
		color: red;
	}
	code .funcao{
		color: blue;
	}
	code .nomeClasse {
		color: gray;
	}
	code .atribuicao {
		color: brown;
	}
</style>
<?php 
	// Criando lista numérica
	// Para cada item criar um botão SPOILER para apresentar a resposta
		// Opção de usabilidade:
		// Clicar no título ou apenas no botão?

		function criarBotao($string) {
			echo '<form action="'.$string.'.php" method="get">'
				. '<input type="submit" value="resposta">'
				. '</form>';
		}

?>
<ol>
	<h3><li>Escreva uma função que receba como parâmetros os coeficientes de uma equação
de segundo grau e retorne suas raízes</li></h3> <?php criarBotao('um'); ?>
	
	<h3><li>Em Javascript, qual a diferença entre == e ===?</li></h3> <?php criarBotao('dois'); ?>
	<h3><li>Em PHP, escreva as classes necessárias para representar um estacionamento.</li></h3>
	<h3><li>Qual o resultado do trecho de código a seguir:</li></h3>
	<?php 
	// Tentativa de criar codificação PHP, 
	// porém não consegui inserir a tag '<?php' igual ao enunciado
	?>
	<code>
	<span class="funcao">class</span> <span class="nomeClasse">W</span> { <br>
		<p>&emsp;&emsp;<span class="funcao">const</span> <span class="nomeClasse">XX</span> = <span class="funcao">12 + 30</span>;</p>
	} <br>
	<span class="funcao">echo</span> W::XX; <br>
	</code>
	<h3><li>Em NodeJS existem threads?</li></h3>
	<h3><li>Em sudoku, o objetivo é preencher uma grade 9x9 subdivida em quadrantes 3x3
com números de 1 a 9 de tal forma que não hajam números repetidos em uma
mesma coluna, linha ou quadrante. Escreva um procedimento que gere uma matriz
9x9 válida como resultado de sudoku considerando uma grade vazia.</li></h3>
	<h3><li>Escreva um sistema de enquetes que atenda aos seguintes requisitos:</li></h3>
	<ol>
		<h4><li>Cada enquete consiste de apenas uma pergunta de múltipla escolha</li></h4>
		<h4><li>É possível ter mais de uma enquete ativa ao mesmo tempo</li></h4>
		<h4><li>Deve ser possível saber qual usuário criou cada enquete</li></h4>
		<h4><li>Todas as enquetes são públicas</li></h4>
	</ol>
	<h3><li>Você já conhecia algum dos problemas apresentados nesta avaliação? De onde?</li></h3>

</ol>



