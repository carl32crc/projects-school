angular.module("routeExercisesPhp",[])
	.config(function( $routeProvider ){

			$routeProvider
				.when('/exercisesphp',{
					templateUrl: 'js/modules/listexercises.html',
					controller: 'exercisesphp'
				});

	});