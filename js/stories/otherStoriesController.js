angular.module('rrApp.controllers')
.controller('otherStoriesCtrl', function ($scope, $rootScope, $http, $location, $window, otherStoriesFactory)
{
	$('.articlePostContainer').fadeOut(300);
	otherStoriesFactory.getOtherStories(function (results)
	{
		$('.articlePostContainer').fadeIn(300);
		$scope.otherStoriesArray 		= results;
		console.log($scope.otherStoriesArray);
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