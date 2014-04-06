<?php

	// $line here has to be the video ID
	$feedURL = 'https://gdata.youtube.com/feeds/api/videos/'.$line.'?v=2';
	// read feed into SimpleXML object
	$sxml = simplexml_load_file($feedURL);
	
	echo "<br> The youtube video at this rss has title: ".$sxml->title;
	
	// Apparently thisll dump teh whole structure, branches, etc
	echo $sxml;
	
?>
