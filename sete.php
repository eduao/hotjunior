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
        <input ng-model="nome" type="text" required /><br>
        <label for="pergunta">Pergunta:
        <input ng-model="pergunta" type="text" />
        <br>
        <button type="submit" ng-click="e.adicionar()" >Cadastrar pergunta</button>
    </form>

    <br>

    <div ng-repeat="enq in enqs">
        <div>
            Enquete: {{enq.pergunta}}
            <div ng-repeat="opc in enq.opcoes">
                {{opc}}
            </div>
            Autor: {{enq.autor}}
        </div>
    </div>

</div>

