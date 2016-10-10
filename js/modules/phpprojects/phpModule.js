angular.module("phpModule", [])
	.controller("php", function( $rootScope,$scope) {

		$rootScope.section ="PHP";

		$scope.img = "img/php.png";

		$scope.projects = [
				{ name: 'PHP Pràctica ICC0-M07U01I01', url: 'http://localhost/projects-school/#/exercisesphp-practica1',
				description:'Exercicis bàsics de PHP on veiem formularis metode POST per passar dades.'},
				{ name: 'PHP Pràctica ICC0-M07U01I02', url: 'http://localhost/projects-school/#/exercisesphp-practica2',
				description:'Exercicis bàsics de PHP on veiem formularis metode POST y GET, Arrays per passar dades.' }];

});
