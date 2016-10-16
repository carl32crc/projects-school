angular.module('myProjectsSchool',[ 'ngRoute','controllers','routes']);
angular.module( 'controllers', ['homeModule','htmlModule','javascriptModule','phpModule','exercises01PhpModule','exercises02PhpModule'] );

angular.module('routes',['routeHome','routeHtml','routeJavascript','routePhp','routeExercisesPhp']);