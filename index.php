<?php

//http://www.twitter-rss.com/
//http://www.twitter-rss.com/user_timeline.php?screen_name=teon

$twtr_xml_url = 'http://www.twitter-rss.com/user_timeline.php?screen_name=teon';

$twtr_xml_string = preg_replace('/:/','_',file_get_contents($twtr_xml_url));
$twtr_xml = simplexml_load_string($twtr_xml_string);

$twtr_item = $twtr_xml->channel->item;

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

?>

<?php /*------ output html code. --------*/ ?>

<html>
<head>
<title>twitter_widget</title>

<style type="text/css">
<!--

.twtr-widget {
    font-family: "lucida grande",lucida,tahoma,helvetica,arial,sans-serif !important;
    font-size: 12px !important;
    position: relative;
}
element.style {
    width: 180px;
}
#twtr-widget-1 .twtr-doc, #twtr-widget-1 .twtr-hd a, #twtr-widget-1 h3, #twtr-widget-1 h4 {
    background-color: #333333 !important;
    color: #FFFFFF !important;
}
.twtr-doc {
    border-radius: 5px 5px 5px 5px;
    font-weight: normal;
    overflow: hidden;
    text-align: left;
    width: 100%;
}
.twtr-hd {
    overflow: hidden;
    padding: 10px;
    position: relative;
}

.twtr-doc a {
    text-decoration: none !important;
}

.twtr-widget-profile img.twtr-profile-img {
    border: 0 none !important;
    display: block;
    float: left;
    height: 31px;
    width: 31px;
}
.twtr-widget a img {
    border: 0 none !important;
}

.twtr-widget h3 {
    font-size: 11px !important;
    font-weight: normal !important;
}
.twtr-widget-profile h3, .twtr-widget-profile h4 {
    margin: 0 0 0 40px !important;
}
.twtr-widget h3, .twtr-widget h4, .twtr-widget p {
    line-height: 1.2 !important;
    margin: 0 !important;
    padding: 0 !important;
    width: auto !important;
}

.twtr-widget-profile h3, .twtr-widget-profile h4 {
    margin: 0 0 0 40px !important;
}

.twtr-widget h4 {
    font-size: 16px !important;
}

#twtr-widget-1 .twtr-bd, #twtr-widget-1 .twtr-timeline i a, #twtr-widget-1 .twtr-bd p {
    color: #000000 !important;
}
.twtr-bd {
    padding: 0 1px;
}
.twtr-ft {
    position: relative;
}
.twtr-ft div span a{
    margin-left: 10px;
}

#twtr-widget-1 .twtr-new-results, #twtr-widget-1 .twtr-results-inner, #twtr-widget-1 .twtr-timeline {
    background: none repeat scroll 0 0 #FFFFFF !important;
}
.twtr-scroll .twtr-timeline {
    overflow-x: hidden;
    overflow-y: auto;
}
.twtr-timeline {
    border-radius: 6px 6px 6px 6px;
    height: 225px;
    overflow: hidden;
    position: relative;
    z-index: 2;
}

.twtr-widget .twtr-tweet {
    border-bottom: 1px dotted #DDDDDD;
    overflow: hidden;
}

.twtr-widget .twtr-tweet-wrap {
    overflow: hidden;
    padding: 6px 8px;
}


#twtr-widget-1 .twtr-avatar {
    display: none;
}
.twtr-avatar {
    display: block;
    float: left;
    height: 40px;
    overflow: hidden;
    width: 40px;
}

#twtr-widget-1 .twtr-tweet-text {
    margin-left: 0;
}
.twtr-tweet-text {
    margin-left: 40px;
}

.twtr-img {
    height: 25px;
    width: 25px;
}


#twtr-widget-1 .twtr-tweet a {
    color: #4169e1 !important;
}

.twtr-widget a img {
    border: 0 none !important;
}
.twtr-img img {
    height: 30px;
    width: 30px;
}
.twtr-widget em, .twtr-widget .twtr-new-results {
    font-size: 9px;
    font-style: normal;
}

-->
</style>

<?php

//<link rel="stylesheet" type="text/css" href="css/tw_widget_style.css" />

/*- OR -*/

/*
<style type="text/css">
<!--

.twtr-widget {
    font-family: "lucida grande",lucida,tahoma,helvetica,arial,sans-serif !important;
    font-size: 12px !important;
    position: relative;
}
element.style {
    width: 180px;
}
#twtr-widget-1 .twtr-doc, #twtr-widget-1 .twtr-hd a, #twtr-widget-1 h3, #twtr-widget-1 h4 {
    background-color: #333333 !important;
    color: #FFFFFF !important;
}
.twtr-doc {
    border-radius: 5px 5px 5px 5px;
    font-weight: normal;
    overflow: hidden;
    text-align: left;
    width: 100%;
}
.twtr-hd {
    overflow: hidden;
    padding: 10px;
    position: relative;
}

.twtr-doc a {
    text-decoration: none !important;
}

.twtr-widget-profile img.twtr-profile-img {
    border: 0 none !important;
    display: block;
    float: left;
    height: 31px;
    width: 31px;
}
.twtr-widget a img {
    border: 0 none !important;
}

.twtr-widget h3 {
    font-size: 11px !important;
    font-weight: normal !important;
}
.twtr-widget-profile h3, .twtr-widget-profile h4 {
    margin: 0 0 0 40px !important;
}
.twtr-widget h3, .twtr-widget h4, .twtr-widget p {
    line-height: 1.2 !important;
    margin: 0 !important;
    padding: 0 !important;
    width: auto !important;
}

.twtr-widget-profile h3, .twtr-widget-profile h4 {
    margin: 0 0 0 40px !important;
}

.twtr-widget h4 {
    font-size: 16px !important;
}

#twtr-widget-1 .twtr-bd, #twtr-widget-1 .twtr-timeline i a, #twtr-widget-1 .twtr-bd p {
    color: #000000 !important;
}
.twtr-bd {
    padding: 0 1px;
}
.twtr-ft {
    position: relative;
}
.twtr-ft div span a{
    margin-left: 10px;
}

#twtr-widget-1 .twtr-new-results, #twtr-widget-1 .twtr-results-inner, #twtr-widget-1 .twtr-timeline {
    background: none repeat scroll 0 0 #FFFFFF !important;
}
.twtr-scroll .twtr-timeline {
    overflow-x: hidden;
    overflow-y: auto;
}
.twtr-timeline {
    border-radius: 6px 6px 6px 6px;
    height: 225px;
    overflow: hidden;
    position: relative;
    z-index: 2;
}

.twtr-widget .twtr-tweet {
    border-bottom: 1px dotted #DDDDDD;
    overflow: hidden;
}

.twtr-widget .twtr-tweet-wrap {
    overflow: hidden;
    padding: 6px 8px;
}


#twtr-widget-1 .twtr-avatar {
    display: none;
}
.twtr-avatar {
    display: block;
    float: left;
    height: 40px;
    overflow: hidden;
    width: 40px;
}

#twtr-widget-1 .twtr-tweet-text {
    margin-left: 0;
}
.twtr-tweet-text {
    margin-left: 40px;
}

.twtr-img {
    height: 25px;
    width: 25px;
}


#twtr-widget-1 .twtr-tweet a {
    color: #4169e1 !important;
}

.twtr-widget a img {
    border: 0 none !important;
}
.twtr-img img {
    height: 30px;
    width: 30px;
}

.twtr-widget em, .twtr-widget .twtr-new-results {
    font-size: 9px;
    font-style: normal;
}

-->
</style>
*/

?>

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
										<a target="_blank" href="https://twitter.com/intent/user?screen_name=teon"><img alt="teon profile" src="https://si0.twimg.com/profile_images/1714687919/teon_normal.jpg"></a>
									</div>
								</div>

								<?php  ?>
								
								<div class="twtr-tweet-text">
									<p>
										<a target="_blank" href="https://twitter.com/intent/user?screen_name=teon" class="twtr-user">
											teon
										</a>
										test <a href="http://example.com/" extrahtml="target=_blank" target="_blank" urlentities="[object Object]" rel="nofollow">link</a>
										<em> <a target="_blank" class="twtr-timestamp" time="Tue Mar 26 05:23:43 +0000 2013" href="https://twitter.com/teon/status/324115706511765504">20 days ago</a> ・ 
											<a target="_blank" class="twtr-reply" href="https://twitter.com/intent/tweet?in_reply_to=324115706511765504">reply</a> ・ 
											<a target="_blank" class="twtr-rt" href="https://twitter.com/intent/retweet?tweet_id=324115706511765504">retweet</a> ・ 
											<a target="_blank" class="twtr-fav" href="https://twitter.com/intent/favorite?tweet_id=324115706511765504">favorite</a>
										</em>
									</p>
								</div>
								
								<?php  ?>
								
							</div>
						</div>
						
						<!-- tweets show here -->
						
					</div>
				</div>
			</div>
			<div class="twtr-ft">
				<div>
					<span><a target="_blank" class="twtr-join-conv" style="color:#ffffff" href="https://twitter.com/teon">twitter.com/teon</a></span>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
