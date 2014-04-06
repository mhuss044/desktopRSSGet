<?php

  feedURL = 'https://gdata.youtube.com/feeds/api/videos/'.$line.'?v=2';
	// read feed into SimpleXML object
	$sxml = simplexml_load_file($feedURL);

	echo "<br>				The youtube video of ";
	
	
	
?>
