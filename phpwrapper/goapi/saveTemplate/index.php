<?php
	////
	//// This PHP moves starter files into the user-files folder
	////

	///
	/// Variables
	///
	$starterXML = base64_decode($_POST["body_zip"]);
	$starterThumb = base64_decode($_POST["thumbnail"]);
	// Get latest starter ID
	include_once("../function/starterId.php");
	// Increase ID
	$id = $id + 1;

	///
	/// Move files to their folders
	///
	file_put_contents("../../_user-files/videos/starter-xml-{$id}.zip", $starterXML);
	file_put_contents("../../_user-files/videos/starter-thumb-{$id}.png", $starterThumb);

	// Let the user using the network tab know that the save was successful. The 0 just lets the Video Studio that the save worked.
	echo "0 - Succesfully saved starter #{$id}!";

	// i am not homer
?>