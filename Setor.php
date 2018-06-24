<?php

class Setor {

    // Cada Setor possui um nome F, G, A, B...
    private $nome;
    // Cada Setor possui uma area que ocupa no andar
    private $comprimento;
    private $largura;
    // A quantidade de vagas é pelo setor
    private $quantidadeVagas;        

    // Por caracterizar um atributo privado há a necessidade de criar GETTER's e SETTER's
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setQuantidadeVagas ($quantidadeVagas) {
        $this->quantidadeVagas = $quantidadeVagas;
    }

    public function getQuantidadeVagas(){
        return $this->quantidadeVagas;
    }
    
    public function setLargura ($largura) {
        $this->largura = $largura;
    }

    public function getLargura(){
        return $this->largura;
    }

    public function setComprimento ($comprimento) {
        $this->comprimento = $comprimento;
    }

    public function getComprimento(){
        return $this->comprimento;
    }
    // Fim GETTER's e SETTER's

    public function __construct($nome, $quantidadeVagas) {
        $this->setNome($nome);
        $this->setQuantidadeVagas($quantidadeVagas);
    }
}

?>