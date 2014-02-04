(function (Controllers, undefined)
{
	Controllers.MainCtrl = function ($scope, $attrs, $element, $http)
	{
		console.log('show main controller');
	}
}(Main.Controllers = Main.Controllers || {} ));

/*'use strict';

angular.module('rrApp.controllers', []).
controller('mainCtrl', function ($scope, $http)
{
	console.log($scope);
})*/