angular.module("routeHome",[])
	.config(function( $routeProvider ){

			$routeProvider
				.when('/',{
					templateUrl: 'js/modules/home/home.html',
					controller: 'home'
				})

				.otherwise({ redirectTo: '/' });

	});