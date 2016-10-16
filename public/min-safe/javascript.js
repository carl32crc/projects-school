angular.module("javascriptModule", [])
	.controller("javascript", ['$rootScope', '$scope', function( $rootScope,$scope) {

		$rootScope.section ="JAVASCRIPT";

		$scope.img = "img/javascript.png";

		$scope.projects = [
				{ name: 'Project JavaScript - 01', url: '#',
				description:'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.'},
				{ name: 'Project JavaScript- 02', url: '#',
				description:'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Laudantium veniam exercitationem expedita laborum at voluptate.Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.' }];

}]);
angular.module("routeJavascript",[])
	.config(['$routeProvider', function( $routeProvider ){

			$routeProvider
				.when('/javascript',{
					templateUrl: 'js/modules/projects.html',
					controller: 'javascript'
				});

	}]);