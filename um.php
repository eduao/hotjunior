<?php
include('voltar.php');
?>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular-resource.min.js"></script>
<script src="um.app.js"></script>

<style>
	input {
		width: 50px;
	}
</style>

<div ng-app="raizes" ng-controller="raiz as r">
	(<input type="number" ng-model="coeficiente_a" ng-min=1 ng-change="r.calcular()" />)x² + 
	(<input type="number" ng-model="coeficiente_b" ng-min=1 ng-change="r.calcular()" />)x + 
	(<input type="number" ng-model="coeficiente_c" ng-min=1 ng-change="r.calcular()" />) = 0

	<br>
	<br>

	<div ng-show="!r.isNaN(xis) && !r.isNaN(xislinha)">
		Raiz x = {{xis}} <br>
		Raiz x'= {{xislinha}} 
	</div>

	<div ng-show="r.isNaN(xis) || r.isNaN(xislinha)">
		Resultado não é válido para os coeficientes
	</div>
</div>
