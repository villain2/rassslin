/** directives **/
(function (Directives, undefined)
{
	Main.Modules.Main.directive('rrApp', function ()
	{
		console.log('we got to this directive');
		return {
			restrict: 'E',
			transclude: true,
			templateUrl: '/partials/index.html',
			replace: true,
			controller: Main.Controllers.MainCtrl
		}
	})
})