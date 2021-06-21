<?php
	////
	//// This PHP loads character XMLs
	////

	///
	/// Variables
	///
	$charId = $_POST["assetId"];

	///
	/// Read file
	///
	// The 0 lets the Video Studio know it worked.
	echo "0";
	// Read the file
	readfile("../../_user-files/characters/character-xml-{$charId}.xml");
?>