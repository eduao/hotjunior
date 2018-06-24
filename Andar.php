<?php

require_once 'Setor.php';

class Andar {

    // Cada andar possui um array de Setor
    private $setores = array();

    private $nome = '';

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }

    // O construtor padrão possui um nome obrigatoriamente e a quantidade de setores
    public function __construct($nome, $quantidadeSetores, $vagasPorSetor = null) {
        
        // Seta o nome que recebe como parâmetro
        $this->setNome($nome);

        // Caso a quantidade de setores for maior que 0
        if ($quantidadeSetores > 0) {
            // Para cada setor
            for ($i=0; $i < $quantidadeSetores; $i++) { 
                // Cria o nome do setor
                $val = chr($i + 65);
                // Caso não tiver entrado como parametro a quantidade de vagas
                if (!$vagasPorSetor) {
                    // Gera uma quantidade de vagas
                    $vagasPorSetor = ($i*3)+2;
                }
                // Cria-se um novo setor
                $setor_novo = new Setor(''.$val, $vagasPorSetor);
                // Insere no array de setores
                array_push($this->setores, $setor_novo);
            }
        }

    }

    // Para obter a quantidade total de vagas
    public function getTotalVagas() {

        $quantidadeTotalVagas = 0;

        // Para casa setor em setores
        foreach ($this->setores as $setor) {
            // Chama a função getQuantidadeVagas de cada setor, obtendo a quantidade total de vagas do mesmo
            $quantidadeTotalVagas += $setor->getQuantidadeVagas();
        }

        // retorna a quantidade total de vagas
        return $quantidadeTotalVagas;
        
    }

    // função para obter a informação geral do andar
    public function obterInformacoes() {
        
        $quantidadeDeVagasNoAndar = 0;
        
        // Para cada setor daquele andar
        foreach ($this->setores as $setor) {
            // Soma na variável a quantidade de vagas do setor
            $quantidadeDeVagasNoAndar += $setor->getQuantidadeVagas();
        }

        // Busca a quantidade de setores
        $quantidadeSetores = count($this->setores);
        
        // Verificação de pluralidade caso houver mais de um setor e andar
        $setores = $quantidadeSetores > 1 ? 'setores' : 'setor';
        $vagas = $quantidadeDeVagasNoAndar > 1 ? 'vagas' : 'vaga';

        // Retorna mensagem padronizada
        return 'Andar '. $this->getNome(). ' com ' . $quantidadeSetores . ' '.$setores.', possui ' . $quantidadeDeVagasNoAndar. ' '.$vagas;

    }

}