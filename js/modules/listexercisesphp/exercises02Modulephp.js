angular.module("exercises02PhpModule", [])
	.controller("exercises02php", function( $rootScope,$scope) {

		$rootScope.section ="EXERCICIS PHP";
      $rootScope.practica ="Pràctica - 02 ICC0-M07U01I02";

		$scope.listExercises = [
				{	exercise: '01', url:'projects/project-02/exercici01.php'},
				{	exercise: '02', url:'projects/project-02/exercici02.php'},
				{	exercise: '03', url:'projects/project-02/exercici03.php'},
				{	exercise: '04', url:'projects/project-02/exercici04.php'},
				{	exercise: '05', url:'projects/project-02/exercici05.php'}];

});
