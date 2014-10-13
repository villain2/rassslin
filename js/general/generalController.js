'use strict';

angular.module('rrApp.controllers', []).
controller('mainCtrl', function ($scope, $rootScope, $http, $location, $window)
{
	$('.articlePostContainer').fadeOut(300);
	$http.get('/rassslin/wp-content/themes/rassslin/scripts/get_posts.php')
	.success(function (data, status)
	{
		$('.articlePostContainer').fadeIn(300);
		$rootScope.results 			= data;
		$('#carousel-example-generic').show();
	});

	$scope.getURL = function (pageID, pageName) 
	{
		$('.articlePostContainer').fadeOut(300);
		$rootScope.pageID 			= pageID;
		$rootScope.pageName 		= pageName;
		$window.open('/rassslin/#/story/' + pageName, '_self');
		//$location.path('/story/');
	}
})