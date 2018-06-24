<?php

require_once 'Andar.php';

class Estacionamento {

// Cada estacionamento possui andares e um nome
private $andares = array(); 
private $nome = '';

// GETTER's e SETTER's
public function setNome($nome) {
    $this->nome = $nome;
}

public function getNome() {
    return $this->nome;
}

public function adicionarAndar($nome, $quantidadeDeSetores, $quantidadeDeVagasPorSetor) {
    $novo_andar = new Andar($nome, $quantidadeDeSetores, $quantidadeDeVagasPorSetor);
    array_push($this->andares,$novo_andar);
}

// Função para remover ultimos x andares
public function removerUltimosAndares($quantidadeDeAndares = 1) {
    // Caso a quantidade de andares for >= ao que entrou de parametro
        // pode remover
    if (count($this->andares) >= $quantidadeDeAndares) {
        // Enquanto contador for < que a quantidade de andares a ser removido 

        for ($i = 0; $i < $quantidadeDeAndares; $i++){
            // retira o ultimo andar do array
            array_pop($this->andares);
        }
    }
}

// 
public function __construct( 
        $nome, // Nome do estacionamento
        $quantidadeAndares, // Quantidade de andares
        $setoresPorAndar = 3, // Setor por andar
        $vagasPorSetor = null // Vagas por setor
    ) {
    // Seta o nome 
    $this->setNome($nome);
    // Caso a quantidade de andares > 0
    if ($quantidadeAndares > 0) {
        // Para cada quantidade de andar
        for ($i=0; $i < $quantidadeAndares; $i++) {
            // Caso o andar for maior que 0 coloca o nome do andar como o contador
            if ($i > 0) {
                $this->andares[] = new Andar(''.$i, $setoresPorAndar, $vagasPorSetor);
            } else {
                // Caso contrário inicia como Térreo o nome do andar
                $this->andares[] = new Andar('Térreo', $setoresPorAndar, $vagasPorSetor);
            }
        }
        
    }

}

// Para obter o total de vagas do estacionamento
public function getTotalVagas() {
    
    $quantidadeVagas = 0;
    // Soma-se todas as vagas de cada andar do mesmo
    foreach ($this->andares as $andar) {
        $quantidadeVagas += $andar->getTotalVagas();
    }

    // retorna o total de vagas somado
    return $quantidadeVagas;
}

// Obter as informações da cada andar
public function getAndares() {
    foreach ($this->andares as $andar) {
        echo $andar->obterInformacoes().'<br>';
    }
}

} 