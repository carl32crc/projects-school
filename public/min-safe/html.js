angular.module("htmlModule", [])
	.controller("html", ['$rootScope', '$scope', function( $rootScope,$scope) {

		$rootScope.section ="HTML5/CSS3";

		$scope.img = "img/html-css.png";

		$scope.projects = [
				{ name: 'Project HTML - 01', url: '#',
				description:'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.'},
				{ name: 'Project HTML - 02', url: '#',
				description:'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Laudantium veniam exercitationem expedita laborum at voluptate.Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.' }];

}]);
angular.module("routeHtml",[])
	.config(['$routeProvider', function( $routeProvider ){

			$routeProvider
				.when('/htmlcss',{
					templateUrl: 'js/modules/projects.html',
					controller: 'html'
				});

	}]);