<?php
	////
	//// This PHP gets the latest starter id.
	////

	// Get all starter XMLs
	$fileList = glob('../_user-files/videos/starter-xml-*.*');

	// Echo the number of XMLs
	$id = count(array_keys($fileList));
?>