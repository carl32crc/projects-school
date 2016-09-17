angular.module("homeModule", [])
	.controller("home", function( $rootScope,$scope) {

		$rootScope.section ="HOME";

		$scope.tools = [
				{ name: 'Display:flex', url: 'https://css-tricks.com/snippets/css/a-guide-to-flexbox/',img:'img/displayflex.png',
				description:'Propietat CSS per ajudar a crear entorns responsive i posicionar de forma més sencilla els elements.'},
				{ name: 'Can I use?', url: 'http://caniuse.com/#search=display%3Aflex',img:'img/icanuse.png',
				description:'Pàgina per comprovar si una propietat CSS funciona en tots els navegadors.'},
				{ name: 'Guia Git', url: 'http://rogerdudler.github.io/git-guide/index.es.html#',img:'img/git.png',
				description:'Petita guia per controlar de forma senzilla les comandes Git, poder tenir el control del repositori.'},
];


});