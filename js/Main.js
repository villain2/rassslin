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

	Main.init = function () {
		console.log(Main);
	}
}(window.Main = window.Main || {} ));
