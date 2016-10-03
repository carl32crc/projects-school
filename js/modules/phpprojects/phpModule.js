angular.module("phpModule", [])
	.controller("php", function( $rootScope,$scope) {

		$rootScope.section ="PHP";

		$scope.img = "img/php.png";

		$scope.projects = [
				{ name: 'PHP Pràctica ICC0-M07U01I01', url: 'http://localhost/projects-school/#/exercisesphp',
				description:'Exercicis bàsics de PHP on veiem formularis metode POST per passar dades.'},
				{ name: 'Project PHP - 02', url: '#',
				description:'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Laudantium veniam exercitationem expedita laborum at voluptate.Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.' }];

});