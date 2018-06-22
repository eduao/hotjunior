angular.module('raizes', [])

.controller('raiz',['$scope', function($scope) {

    this.calcular = function(){
        
        raiz = ($scope.coeficiente_b * $scope.coeficiente_b) - (4 * $scope.coeficiente_a * $scope.coeficiente_c);
        raiz = Math.sqrt(raiz);

        denominador = 2 * $scope.coeficiente_a;

        $scope.xis = -(($scope.coeficiente_b + raiz)/denominador);
        $scope.xislinha = -(($scope.coeficiente_b - raiz)/denominador);
    }

    this.isNaN = function(value) {

    	return isNaN(value);
  
    }

    $scope.coeficiente_a = 1;
    $scope.coeficiente_b = 1;
    $scope.coeficiente_c = 1;

    this.calcular();

  }]);