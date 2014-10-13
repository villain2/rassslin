//rrApp.config(['$routeProvider', function ($routeProvider)
(function (Configs, undefined)
{
	Main.Modules.Main.config(function ($routeProvider)
	{
	console.log(Main.Controllers);
		$routeProvider.
		when('/terms_of_use',
		{
			templateUrl: Main.PartialsPath + '/terms_of_use.html'
		})
		.when('/privacy_policy',
		{
			templateUrl: Main.PartialsPath + '/privacy_policy.html'
		})
		.otherwise(
		{
			templateUrl: Main.PartialsPath + '/index.html'
		})
	});
}(Main.Configs = Main.Configs || {} ));