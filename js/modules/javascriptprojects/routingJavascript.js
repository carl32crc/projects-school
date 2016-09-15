angular.module("routeJavascript",[])
	.config(function( $routeProvider ){

			$routeProvider
				.when('/javascript',{
					templateUrl: 'js/modules/projects.html',
					controller: 'javascript'
				});

	});