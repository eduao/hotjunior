<?php
// Estacionamento
include_once('load_fontes.php');
include('voltar.php');

require_once 'Estacionamento.php';

// Criando testes 
$estacionamento = new Estacionamento('J. César', 3, 10, 20);

echo $estacionamento->getNome().' : '.$estacionamento->getTotalVagas().' vagas no total<br>';
$estacionamento->getAndares();

$estacionamento2 = new Estacionamento('Gutierrez', 5);
echo $estacionamento2->getNome().' : '.$estacionamento2->getTotalVagas().' vagas no total<br>';
$estacionamento2->getAndares();

$estacionamento3 = new Estacionamento('Lubalu', 5,2, 2);
echo $estacionamento3->getNome().' : '.$estacionamento3->getTotalVagas().' vagas no total<br>';
$estacionamento3->getAndares();

$estacionamento2->removerUltimosAndares(3);
$estacionamento2->adicionarAndar('Andar Especial', 4, 90);
echo $estacionamento2->getNome().' : '.$estacionamento2->getTotalVagas().' vagas no total<br>';
$estacionamento2->getAndares();

$est = new Estacionamento('OLOKO BIXO', 1,2,2);
echo $est->getNome().' : '.$est->getTotalVagas().' vagas no total<br>';
$est->getAndares();

?>