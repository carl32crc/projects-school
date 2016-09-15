angular.module("routePhp",[])
	.config(function( $routeProvider ){

			$routeProvider
				.when('/php',{
					templateUrl: 'js/modules/projects.html',
					controller: 'php'
				});

	});