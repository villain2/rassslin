rrApp.config(['$routeProvider', function ($routeProvider)
{
	$routeProvider.
	when('/terms_of_use',
	{
		controller: 'termsCtrl',
		templateUrl: Main.PartialsPath + '/terms_of_use.html'
	})
	.when('/privacy_policy',
	{
		controller: 'privacyCtrl',
		templateUrl: Main.PartialsPath + '/privacy_policy.html'
	})
	.otherwise(
	{
		controller: 'mainCtrl',
		templateUrl: Main.PartialsPath + '/index.html'
	})
}]);