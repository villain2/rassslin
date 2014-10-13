angular.module('rrApp.directives', []).
directive('storyDir', function ()
{
	return {
		restrict: 'A',
		controller: 'otherStoriesCtrl',
		link: function (scope, elem, attrs)
		{
			var scope 					= scope;
		}
	}
})