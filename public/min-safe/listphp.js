angular.module("exercises01PhpModule", [])
	.controller("exercises01php", ['$rootScope', '$scope', function( $rootScope,$scope) {

		$rootScope.section ="EXERCICIS PHP";
		$rootScope.practica ="Pràctica - 01 ICC0-M07U01I01";

		$scope.listExercises = [
				{	exercise: '01', url:'projects/project-01/exercici01.php'},
				{	exercise: '02', url:'projects/project-01/exercici02.php'},
				{	exercise: '03', url:'projects/project-01/exercici03.php'},
				{	exercise: '04', url:'projects/project-01/exercici04.php'},
				{	exercise: '05', url:'projects/project-01/exercici05.php'},
				{	exercise: '06', url:'projects/project-01/exercici06.php'},
				{	exercise: '07', url:'projects/project-01/exercici07.php'},
				{	exercise: '08', url:'projects/project-01/exercici08.php'},
				{	exercise: '09', url:'projects/project-01/exercici09.php'},
				{	exercise: '10', url:'projects/project-01/exercici10.php'},
				];

}]);

angular.module("exercises02PhpModule", [])
	.controller("exercises02php", ['$rootScope', '$scope', function( $rootScope,$scope) {

		$rootScope.section ="EXERCICIS PHP";
      $rootScope.practica ="Pràctica - 02 ICC0-M07U01I02";

		$scope.listExercises = [
				{	exercise: '01', url:'projects/project-02/exercici01.php'},
				{	exercise: '02', url:'projects/project-02/exercici02.php'},
				{	exercise: '03', url:'projects/project-02/exercici03.php'},
				{	exercise: '04', url:'projects/project-02/exercici04.php'},
				{	exercise: '05', url:'projects/project-02/exercici05.php'}];

}]);

angular.module("routeExercisesPhp",[])
	.config(['$routeProvider', function( $routeProvider ){

			$routeProvider
				.when('/exercisesphp-practica1',{
					templateUrl: 'js/modules/listexercises.html',
					controller: 'exercises01php'
				})
				.when('/exercisesphp-practica2',{
					templateUrl: 'js/modules/listexercises.html',
					controller: 'exercises02php'
				});

	}]);
