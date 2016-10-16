angular.module('myProjectsSchool',[ 'ngRoute','controllers','routes']);
angular.module( 'controllers', ['homeModule','htmlModule','javascriptModule','phpModule','exercises01PhpModule','exercises02PhpModule'] );

angular.module('routes',['routeHome','routeHtml','routeJavascript','routePhp','routeExercisesPhp']);
angular.module("homeModule", [])
	.controller("home", ['$rootScope', '$scope', function( $rootScope,$scope) {

		$rootScope.section ="HOME";

		$scope.tools = [
				{ name: 'Display:flex', url: 'https://css-tricks.com/snippets/css/a-guide-to-flexbox/',img:'img/displayflex.png',
				description:'Propietat CSS per ajudar a crear entorns responsive i posicionar de forma més sencilla els elements.'},
				{ name: 'Can I use?', url: 'http://caniuse.com/#search=display%3Aflex',img:'img/icanuse.png',
				description:'Pàgina per comprovar si una propietat CSS funciona en tots els navegadors.'},
				{ name: 'Guia Git', url: 'http://rogerdudler.github.io/git-guide/index.es.html#',img:'img/git.png',
				description:'Petita guia per controlar de forma senzilla les comandes Git, poder tenir el control del repositori.'},
];

}]);
angular.module("routeHome",[])
	.config(['$routeProvider', function( $routeProvider ){

			$routeProvider
				.when('/',{
					templateUrl: 'js/modules/home/home.html',
					controller: 'home'
				})

				.otherwise({ redirectTo: '/' });

	}]);
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
angular.module("exercises01PhpModule", [])
	.controller("exercises01php", ['$rootScope', '$scope', function( $rootScope,$scope) {

		$rootScope.section ="EXERCICIS PHP";
		$rootScope.practica ="Pràctica - 01 ICC0-M07U01I01";

		$scope.listExercises = [
				{	exercise: '01', url:'projects/project-01/exercici01.php'},
				{	exercise: '02', url:'projects/project-01/exercici02.php'},
				{	exercise: '03', url:'projects/project-01/exercici03.php'},
				{	exercise: '04', url:'projects/project-01/exercici04.php'},
				{	exercise: '05', url:'projects/project-01/exercici05.php'},
				{	exercise: '06', url:'projects/project-01/exercici06.php'},
				{	exercise: '07', url:'projects/project-01/exercici07.php'},
				{	exercise: '08', url:'projects/project-01/exercici08.php'},
				{	exercise: '09', url:'projects/project-01/exercici09.php'},
				{	exercise: '10', url:'projects/project-01/exercici10.php'},
				];

}]);

angular.module("exercises02PhpModule", [])
	.controller("exercises02php", ['$rootScope', '$scope', function( $rootScope,$scope) {

		$rootScope.section ="EXERCICIS PHP";
      $rootScope.practica ="Pràctica - 02 ICC0-M07U01I02";

		$scope.listExercises = [
				{	exercise: '01', url:'projects/project-02/exercici01.php'},
				{	exercise: '02', url:'projects/project-02/exercici02.php'},
				{	exercise: '03', url:'projects/project-02/exercici03.php'},
				{	exercise: '04', url:'projects/project-02/exercici04.php'},
				{	exercise: '05', url:'projects/project-02/exercici05.php'}];

}]);

angular.module("routeExercisesPhp",[])
	.config(['$routeProvider', function( $routeProvider ){

			$routeProvider
				.when('/exercisesphp-practica1',{
					templateUrl: 'js/modules/listexercises.html',
					controller: 'exercises01php'
				})
				.when('/exercisesphp-practica2',{
					templateUrl: 'js/modules/listexercises.html',
					controller: 'exercises02php'
				});

	}]);

angular.module("phpModule", [])
	.controller("php", ['$rootScope', '$scope', function( $rootScope,$scope) {

		$rootScope.section ="PHP";

		$scope.img = "img/php.png";

		$scope.projects = [
				{ name: 'PHP Pràctica ICC0-M07U01I01', url: 'http://localhost/projects-school/#/exercisesphp-practica1',
				description:'Exercicis bàsics de PHP on veiem formularis metode POST per passar dades.'},
				{ name: 'PHP Pràctica ICC0-M07U01I02', url: 'http://localhost/projects-school/#/exercisesphp-practica2',
				description:'Exercicis bàsics de PHP on veiem formularis metode POST y GET, Arrays per passar dades.' }];

}]);

angular.module("routePhp",[])
	.config(['$routeProvider', function( $routeProvider ){

			$routeProvider
				.when('/php',{
					templateUrl: 'js/modules/projects.html',
					controller: 'php'
				});

	}]);