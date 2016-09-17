angular.module("homeModule", [])
	.controller("home", function( $rootScope,$scope) {

		$rootScope.section ="HOME";

		$scope.articles = [
				{ name: 'Article - 01', url: '#',
				description:'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.'},
				{ name: 'Article - 02', url: '#',
				description:'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Laudantium veniam exercitationem expedita laborum at voluptate.Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.'},
				{ name: 'Article - 03', url: '#',
				description:'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.'},
];


});