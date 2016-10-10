angular.module("routeExercisesPhp",[])
	.config(function( $routeProvider ){

			$routeProvider
				.when('/exercisesphp-practica1',{
					templateUrl: 'js/modules/listexercises.html',
					controller: 'exercises01php'
				})
				.when('/exercisesphp-practica2',{
					templateUrl: 'js/modules/listexercises.html',
					controller: 'exercises02php'
				});

	});
