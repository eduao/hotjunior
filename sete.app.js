angular.module('enquetes', [])

.controller('enquete', ['$scope', function($scope) {

    $scope.enqs = [{
        pergunta: 'oi',
        opcoes: [
            'eu',
            'sou',
            'goku'
        ],
        autor: 'jooj',
        respondida_por:{'aaa': 1, 'bbb': 2}

    }];

    $scope.opcoes = ['resposta1', 'resposta2'];

    this.removerOpcao = function(index) {
        $scope.opcoes.splice(index,1);
    };

    this.adicionarOpcao = function(){
        $scope.opcoes.push('');
    };

    $scope.podeMostrar = function(quem_respondeu, usuario){

        if(usuario === undefined) {
            return false;
        }else {
            return !Object.keys(quem_respondeu).includes(usuario) && usuario.length > 0;
        }

        console.log(usuario.length == 0);
    };

    $scope.verificarAdicionarOpcao = function(forms){

        return forms.opc.$valid != undefined && forms.opc.$valid;
    };

    $scope.verificarAdicionar = function(forms){
        return forms.nome.$valid && forms.pergunta.$valid;
    };

    this.adicionar = function() {   
        temp = {
            pergunta: $scope.pergunta,
            autor: $scope.nome,
            opcoes: $scope.opcoes
        };
        $scope.enqs.push(temp);
        $scope.opcoes = ['resposta1', 'resposta2'];
        $scope.pergunta = '';

    }

}]);