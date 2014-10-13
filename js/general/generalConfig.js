rrApp.config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider, $rootScope)
{
	$routeProvider.
	when('/terms_of_use',
	{
		templateUrl: Main.PartialsPath + '/terms_of_use.html'
	})
	.when('/privacy_policy',
	{
		controller: 'privacyCtrl',
		templateUrl: Main.PartialsPath + '/privacy_policy.html'
	})
	.when('/story/:storyID',
	{
		controller: 'storyCtrl',
		templateUrl: Main.PartialsPath + '/story.php'
	})
	.when('/sections/:sectionID',
	{
		controller: 'navCtrl',
		templateUrl: Main.PartialsPath + '/sections.html'
	})
	.otherwise(
	{
		controller: 'mainCtrl',
		templateUrl: '/rassslin/wp-content/themes/rassslin/partials/index.html'
	});

	$locationProvider.html5Mode(false);
}]);