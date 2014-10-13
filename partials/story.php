<?php
include_once '../../../../wp-config.php';
include_once '../../../../wp-load.php';
include_once '../../../../wp-includes/wp-db.php';
include_once '../../../../wp-includes/pluggable.php';
?>

<div class="row" id="theStory">

	<a id="top"></a>
	<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 storyContainer">
		<div class="storyBox" id="storyBox">
			<h1>{{storyResults.post_title}}</h1>
			<div class="postDate"><em>Published: </em> {{storyResults.post_date}}</div>

			<div class="storyBody" data-ng-bind-html='storyContent'>
			</div>

			<div class="keywords">
				{{storyResults.tag_list}}
			</div>

			<div class="relatedStories" data-story-dir>
				<div class="row relatedStory"
					data-ng-repeat="post in otherStoriesArray"
					data-ng-click="getURL(post.ID, post.post_name)">
					<div class="col-xs-12 col-sm-4 osImage">
						<figure data-ng-bind-html="post.thumburl"></figure>
					</div>
					<div class="col-xs-12 col-sm-8 osTitle">
						{{post.post_title}}
						<div class="osDate">{{post.post_date}}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="socialConnection row">

</div>