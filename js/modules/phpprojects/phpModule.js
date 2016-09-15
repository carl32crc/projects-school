angular.module("phpModule", [])
	.controller("php", function( $rootScope,$scope) {

		$rootScope.section ="PHP";

		$scope.projects = [
				{ name: 'Project PHP - 01', url: '#',
				description:'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.'},
				{ name: 'Project PHP - 02', url: '#',
				description:'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Laudantium veniam exercitationem expedita laborum at voluptate.Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.' }];

});