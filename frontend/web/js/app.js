/**
 * Created by bug on 24.06.15.
 */
var app = angular.module('app', [
	'ngAnimate', 'ngMaterial', 'ngRoute','ngMdIcons',      //$routeProvider
	'mgcrea.ngStrap'//bs-navbar, data-match-route directives

]);

app.factory('WebService', function($http) {

	var request = function(method, path, data) {
		return $http({
			method: method, url: '/yii2-advanced-api/api/web/v1/' + path, data: data
		}).then(function(response) {
			return response.data;
		});
	};

	return {
		get: function(path, data) {
			return request('GET', path, data);
		}, post: function(path, data) {
			return request('POST', path, data);
		}, put: function(path, data) {
			return request('PUT', path, data);
		}, delete: function(path, data) {
			return request('DELETE', path, data);
		}
	}
});

app.factory('ServerData', function(WebService) {
	return {

	}
});

app.controller('indexCtrl', [
	'$scope', '$log', 'ServerData', '$mdSidenav', '$mdDialog', '$mdToast', function($scope, $log, ServerData, $mdSidenav, $mdDialog, $mdToast) {
		$scope.products = [
			{
				title:'Product Name',
				img:'http://placehold.it/150x150',
				description:'Some text',
				span:{
					row:1,
					col:1
				},
				background:'#f000ff'
			},
			{
				title:'Product Name',
				img:'http://placehold.it/150x150',
				description:'Some text',
				span:{
					row:1,
					col:1
				},
				background:'#fff0ff'
			},
			{
				title:'Product Name',
				img:'http://placehold.it/150x150',
				description:'Some text',
				span:{
					row:1,
					col:1
				},
				background:'#ff0fff'
			},
			{
				title:'Product Name',
				img:'http://placehold.it/150x150',
				description:'Some text',
				span:{
					row:1,
					col:1
				},
				background:'#ff000f'
			},
			{
				title:'Product Name',
				img:'http://placehold.it/150x150',
				description:'Some text',
				span:{
					row:1,
					col:1
				},
				background:'#0f000f'
			}
		];

		console.log($scope.products);
		$scope.toggleRight = function(){
			$mdSidenav('left').toggle();
			console.log('asdad');


		}

	}
]);

app.config([
	'$routeProvider', function($routeProvider) {
		$routeProvider.when('/', {
			templateUrl: 'partials/index.html', controller: 'indexCtrl'
		}).when('/first', {
			templateUrl: 'partials/first-page.html', controller: 'indexCtrl'
		}).otherwise({
			templateUrl: 'partials/404.html'
		});
	}
]);


app.config(function($mdThemingProvider) {

	$mdThemingProvider.theme('default')
		.primaryPalette('teal')
});