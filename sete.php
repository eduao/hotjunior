<?php
// Escreva um sistema de enquetes que atenda aos seguintes requisitos
include_once 'load_fontes.php';
include 'voltar.php';
?>


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular-resource.min.js"></script>
<script src="sete.app.js"></script>


<div ng-app="enquetes" ng-controller="enquete as e">

    <form name="adicionarPergunta">
        <label for="nome">Seu nome:
        <input ng-model="nome" name="nome" type="text" required /><br>
        <label for="pergunta">Pergunta:
        <input ng-model="pergunta" name="pergunta" type="text" required/>
        <br>
        <div ng-repeat="opc in opcoes track by $index">
            <input type="text" ng-model="opcoes[$index]" name="opc" required/> <button type="button" ng-disabled="$index === 0" ng-click="e.removerOpcao($index)">-</button>
        </div>
        <br>
        <button type="button" ng-click="e.adicionarOpcao()" ng-disabled="!verificarAdicionarOpcao(adicionarPergunta)">Adicionar opção</button>
        <br>
        <button type="submit" ng-click="e.adicionar()" ng-disabled="!verificarAdicionar(adicionarPergunta) || !verificarAdicionarOpcao(adicionarPergunta)">Cadastrar pergunta</button>
    </form>

    <br>

    <div ng-repeat="enq in enqs">
        <form id="pesquisa{{$index}}">
            Enquete: {{enq.pergunta}}
            <div ng-repeat="opcao in enq.opcoes track by $index" ng-show="podeMostrar(enq.respondida_por, nome)">
                <input type="radio" name='selecionado' ng-model="selecionado[$parent.$index][$index]" value='{{$index}}'  ng-click='e.enviarResposta($parent.$index,$index,nome, $event)' />{{opcao}}
            </div>
            Autor: {{enq.autor}}
            <div ng-show="!podeMostrar(enq.respondida_por, nome) && nome.length > 0">
                Já respondida por:{{nome}}
            </div>
        </form>
    </div>

</div>

