<?php
	////
	//// This PHP gets the latest video id.
	////

	// Get all video XMLs
	$fileList = glob('../_user-files/videos/video-xml-*.*');

	// Echo the number of XMLs
	$id = count(array_keys($fileList));
?>