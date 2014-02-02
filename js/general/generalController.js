(function (Controllers, undefined)
{
	Controllers.GeneralController = function ($scope, $attrs, $element)
	{
		var scope 				= $scope;
		parentScope 			= $scope.$parent;

		scope.type 				= $attrs.type;
		function doSomething() {
			console.log('do something');
		}
	};
}( Main.Controllers = Main.Controllers || {} ));

(function (Controllers, undefined)
{
	Controllers.TermsCtrl = function ($scope, $attrs, $element)
	{
		console.log('terms of use');
	}
}(Main.Controllers = Main.Controllers || {} ));

(function (Controllers, undefined)
{
	Controllers.PrivacyCtrl = function ($scope, $attrs, $element)
	{
		console.log('privcacy policy');
	}
}(Main.Controllers = Main.Controllers || {} ));

console.log(Main);