angular.module("exercisesPhpModule", [])
	.controller("exercisesphp", function( $rootScope,$scope) {

		$rootScope.section ="EXERCICIS PHP";

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

});