angular.module('enquetes', [])

.controller('enquete', ['$scope', function($scope) {

    $scope.enqs = [{
        pergunta: 'oi',
        opcoes: [
            'eu',
            'sou',
            'goku'
        ],
        autor: 'jooj'

    }];

    this.adicionar = function() {
        temp = {
            pergunta: $scope.pergunta,
            autor: $scope.nome,
            opcoes: $scope.opcoes
        };

        $scope.enqs.push(temp);
    }

}]);