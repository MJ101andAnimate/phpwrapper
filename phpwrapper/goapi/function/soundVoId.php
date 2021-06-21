<?php
	////
	//// This PHP gets the latest sound (voiceover) id.
	////

	// Get all voiceover files
	$fileList = glob('../../_user-files/sounds/voiceover-*.*');

	// Echo the number of files
	$id = count(array_keys($fileList));
?>