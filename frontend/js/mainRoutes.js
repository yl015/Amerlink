/**
* mainRoutes Module;
*
* Description
*/
var app = angular.module('mainRoutes', ['ngRoute']);

app.config(function ($routeProvider) {
	$routeProvider.when('/', {
		controller: 'mainController',
		templateUrl: '../views/main.php'
	}).otherwise({
		redirectTo: '/'
	});
});