<?php
	////
	//// This PHP moves character files into the user-files folder
	////

	///
	/// Variables
	///
	$charXML = $_POST["body"];
	$charThumb = base64_decode($_POST["thumbdata"]);

	///
	/// Move files to their folders
	///
	file_put_contents("../../_user-files/characters/character-xml-{$_POST["presaveId"]}.xml", $charXML);
	file_put_contents("../../_user-files/characters/character-thumb-{$_POST["presaveId"]}.png", $charThumb);

	// Let the user using the network tab know that the save was successful. The 0 just lets the Character Studio that the save worked.
	echo "0 - Succesfully saved character #{$_POST["presaveId"]}!";
?>