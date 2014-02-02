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

	Main.init = function ()
	{
		var contentDiv 				= document.getElementById('content');
		contentDiv.innerHTML		= '<main><div ng-view></div></main>';
		//manually set up angular in page
		angular.bootstrap(contentDiv, ['main']);
	};
}(window.Main = window.Main || {} ));
