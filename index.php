<?php

//http://www.twitter-rss.com/
//http://www.twitter-rss.com/user_timeline.php?screen_name=teon

/*--------------------------------------------------*/

// config
$twtr_user_name = 'teon';
$twtr_user_id = '1714687919';
$twtr_thumbnail_path = 'teon_normal.jpg';

//link
//test <a href="http://example.com/" extrahtml="target=_blank" target="_blank" urlentities="[object Object]" rel="nofollow">link</a>

//*---------------------------------------------------*/

$twtr_xml_url = 'http://www.twitter-rss.com/user_timeline.php?screen_name='.$twtr_user_name;

//$twtr_xml_string = preg_replace('/:/','_',file_get_contents($twtr_xml_url));
$twtr_xml_string = file_get_contents($twtr_xml_url);
$twtr_xml = simplexml_load_string($twtr_xml_string);

$twtr_item = $twtr_xml->channel->item;

function twtr_get_post_id( $twtr_url_str = null ){
	$twtr_url_array = explode('/', $twtr_url_str);
	$twtr_post_id = end($twtr_url_array);
	return $twtr_post_id;
}

/*
foreach($twtr_item as $twtr_v){
	echo('<br />');
	echo($twtr_v->title);
	echo('<br />');
	echo($twtr_v->description);
	echo('<br />');
	echo($twtr_v->pubDate);
	echo('<br />');
	echo($twtr_v->guid);
	echo('<br />');
	echo($twtr_v->link);
	echo('<br />');
	echo($twtr_v->twitter_source->a);
	echo('<br />');
	echo($twtr_v->twitter_place);
	echo('<br />');
	echo('--------------------------');
}
*/

?>

<?php /*------ output html code. --------*/ ?>

<html>
<head>
<title>twitter_widget - <?php echo($twtr_user_name); ?></title>

<link rel="stylesheet" type="text/css" href="css/tw_widget_style.css" />

</head>
<body>

<div class="secondaryItem">
	<div class="twtr-widget twtr-widget-profile twtr-scroll" id="twtr-widget-1">
		<div class="twtr-doc" style="width: 180px;">
			<div class="twtr-hd">
				<a target="_blank" href="https://twitter.com/intent/user?screen_name=teon" class="twtr-profile-img-anchor"> <img alt="profile" class="twtr-profile-img" src="https://si0.twimg.com/profile_images/1714687919/teon_normal.jpg"></a>
				<h3>teon</h3>
				<h4><a target="_blank" href="https://twitter.com/intent/user?screen_name=teon">teon</a></h4>
			</div>
			<div class="twtr-bd">
				<div class="twtr-timeline" style="height: autopx;">
					<div class="twtr-tweets">
						<div class="twtr-reference-tweet"></div>
						<div id="tweet-id-9" class="twtr-tweet">
							<div class="twtr-tweet-wrap">
								<div class="twtr-avatar">
									<div class="twtr-img">
										<a target="_blank" href="https://twitter.com/intent/user?screen_name=<?php echo($twtr_user_name); ?>"><img alt="<?php echo($twtr_user_name); ?> profile" src="https://si0.twimg.com/profile_images/<?php echo($twtr_user_id); ?>/<?php echo($twtr_thumbnail_path); ?>"></a>
									</div>
								</div>

								<?php foreach($twtr_item as $twtr_v){ ?>

									<?php
										$twtr_post_id = twtr_get_post_id($twtr_v->link);
									?>
									
									<div class="twtr-tweet-text">
										<p>
											<a target="_blank" href="https://twitter.com/intent/user?screen_name=<?php echo($twtr_user_name); ?>" class="twtr-user">
												<?php echo($twtr_user_name); ?>
											</a>
											<?php echo($twtr_v->description); ?>
											<em>
												<?php
													//<a target="_blank" class="twtr-timestamp" time="$twtr_v->pubDate" href="https://twitter.com/teon/status/324115706511765504">20 days ago</a> ・ 
												?>
												<a target="_blank" class="twtr-reply" href="https://twitter.com/intent/tweet?in_reply_to=<?php echo($twtr_post_id); ?>">reply</a> ・ 
												<a target="_blank" class="twtr-rt" href="https://twitter.com/intent/retweet?tweet_id=<?php echo($twtr_post_id); ?>">retweet</a> ・ 
												<a target="_blank" class="twtr-fav" href="https://twitter.com/intent/favorite?tweet_id=<?php echo($twtr_post_id); ?>">favorite</a>
											</em>
										</p>
									</div>
									
								<?php } ?>
							</div>
						</div>
						
						<!-- tweets show here -->
						
					</div>
				</div>
			</div>
			<div class="twtr-ft">
				<div>
					<span><a target="_blank" class="twtr-join-conv" style="color:#ffffff" href="https://twitter.com/<?php echo($twtr_user_name); ?>">twitter.com/<?php echo($twtr_user_name); ?></a></span>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
