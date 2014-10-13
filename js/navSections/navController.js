angular.module('rrApp.controllers')
.controller('navCtrl', function ($scope, $rootScope, $http, $location, $routeParams, $window)
{
	$rootScope.filterID 			= $routeParams.sectionID;
	$('.articlePostContainer').fadeOut(300);
	$http.get('/rassslin/wp-content/themes/rassslin/scripts/get_posts.php?cat=' + $rootScope.filterID + '')
	.success(function (data, status)
	{
		$('.articlePostContainer').css('paddingTop', '80px');
		$('.articlePostContainer').fadeIn(300);
		$rootScope.results 			= data;
		$('#carousel-example-generic').hide();
	});

	$scope.getURL = function (pageID, pageName) 
	{
		$rootScope.pageID 			= pageID;
		$rootScope.pageName 		= pageName;
		$window.open('/wordpress/#/story/' + pageName, '_self');
		//$location.path('/story/');
	}
})