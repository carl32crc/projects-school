angular.module("homeModule", [])
	.controller("home", function( $rootScope,$scope) {

		$rootScope.section ="home";

		$scope.projects = [
				{ name: 'Project - 01', url: '#' },
				{ name: 'Project - 02', url: '#' }];


});