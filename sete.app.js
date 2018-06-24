angular.module('enquetes', [])

.controller('enquete', ['$scope', function($scope) {

    // Enquetes atuais
    $scope.enqs = [{
        pergunta: 'Você gosta do guia do mochileiro das galáxias?',
        opcoes: [
            'Nah!',
            'Mais ou menos, né?!',
            'Poxa, gosto!',
            'Atoooorooomm!!',
            'Quero ler de novo!!!'
        ],
        autor: 'jooj',
        respondida_por:{'joão': 1, 'josué': 2}

    }];

    // Respostas padrão
    $scope.opcoes = ['Sim', 'Não'];

    // Remove a opção caso clique no '-'
    this.removerOpcao = function(index) {
        $scope.opcoes.splice(index,1);
    };

    // Adiciona uma nova opção vazia à pergunta
    this.adicionarOpcao = function(){
        $scope.opcoes.push('');
    };

    // Envia a resposta selecionada
    this.enviarResposta = function(i_enquete, i_opcao, nome, event){
   
        if (i_enquete != undefined && i_opcao != undefined && nome != undefined) {

            $scope.enqs[i_enquete].respondida_por[nome] = i_opcao;
            document.getElementById('pesquisa'+i_enquete).reset();
            
        }
    };

    // Para não responder novamente, verifica se já respondeu ou se o nome está vazio
    $scope.podeMostrar = function(quem_respondeu, usuario){

        if(usuario === undefined) {
            return false;
        }else {
            return !Object.keys(quem_respondeu).includes(usuario) && usuario.length > 0;
        }

    };

    // Verifica se pode adicionar nova opção
    $scope.verificarAdicionarOpcao = function(forms){

        return forms.opc.$valid != undefined && forms.opc.$valid;
    };

    // Verifica se pode adicionar uma nova pergunta
    $scope.verificarAdicionar = function(forms){
        return forms.nome.$valid && forms.pergunta.$valid;
    };

    // Adiciona uma nova pergunta
    this.adicionar = function() {   
        temp = {
            pergunta: $scope.pergunta,
            autor: $scope.nome,
            opcoes: $scope.opcoes,
            respondida_por: []
        };
        $scope.enqs.push(temp);
        $scope.opcoes = ['Sim', 'Não'];
        $scope.pergunta = '';

    }

}]);