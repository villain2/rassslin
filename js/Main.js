'use strict';
(function (Main, undefined)
{
	
	//set up defaults
	Main.Version 					= "1.0.0";
	Main.PartialsPath 				= "partials/";
	Main.Modules					= {};
	Main.Configs 					= {};
	Main.Controllers 				= {};
	Main.Directives 				= {};
	Main.Services 					= {};

	Main.init = function (params) 
	{
		console.log(params);
		params.container.innerHTML 		= "<rrApp><div data-ng-view></div></rrApp>";
		angular.bootstrap(params.container, ['rrApp']);
	}
}(window.Main = window.Main || {} ));
