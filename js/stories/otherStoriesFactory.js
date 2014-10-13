angular.module('rrApp')
.factory('otherStoriesFactory', function ($http) 
{
	return {
		getOtherStories: function (callback)
		{
			$http.get('/rassslin/wp-content/themes/rassslin/scripts/get_other_stories.php')
			.success(callback);
		}
	};
})