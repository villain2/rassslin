angular.module('rrApp.controllers')
.controller('storyCtrl', function ($scope, $http, $rootScope, $routeParams, $sce)
{
	$rootScope.filterID 			= $routeParams.storyID;
	$http.get('/rassslin/wp-content/themes/rassslin/scripts/get_story.php?storyID=' + $rootScope.filterID)
	.success(function (data, status)
	{
		$('.articlePostContainer').fadeIn(300);
		$scope.storyResults		= data[0];
		$scope.guID 			= data[0].guid;
		$scope.storyContent 	= $sce.trustAsHtml(data[0].post_content);
	});
})