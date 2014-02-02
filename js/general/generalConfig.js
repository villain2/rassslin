(function(Configs, undefined ) 
{
	Main.Modules.Main.config(['$routeProvider', function ($routeProvider) 
	{
		$routeProvider.
		when('/terms_of_use', 
		{
			controller: Main.Controllers.TermsCtrl,
			templateUrl: Main.PartialsPath + '/terms_of_use.html'
		}).
		when('/privacy_policy', 
		{
			controller: Main.Controllers.PrivacyCtrl,
			templateUrl: Main.PartialsPath + '/privacy_policy.html'
		}).
		otherwise(
		{
			templateUrl: Main.PartialsPath + '/index.html'
		})
	}])
}( Main.Configs = Main.Configs || {} ));