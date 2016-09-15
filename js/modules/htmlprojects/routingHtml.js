angular.module("routeHtml",[])
	.config(function( $routeProvider ){

			$routeProvider
				.when('/htmlcss',{
					templateUrl: 'js/modules/projects.html',
					controller: 'html'
				});

	});