<?php
	////
	//// This PHP gets the latest character id.
	////

	// Get all character XMLs
	$fileList = glob('../../_user-files/characters/*-xml-*.*');

	// Number of XMLs
	$id = count(array_keys($fileList));
?>