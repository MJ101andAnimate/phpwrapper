<?php
	////
	//// This PHP moves video files into the user-files folder
	////

	///
	/// Variables
	///
	$movieXML = base64_decode($_POST["body_zip"]);
	$movieThumb = base64_decode($_POST["thumbnail_large"]);

	///
	/// Move files to their folders
	///
	file_put_contents("../../_user-files/videos/video-xml-{$_POST["presaveId"]}.zip", $movieXML);
	file_put_contents("../../_user-files/videos/video-thumb-{$_POST["presaveId"]}.png", $movieThumb);

	// Let the user using the network tab know that the save was successful. The 0 just lets the Video Studio that the save worked.
	echo "0 - Succesfully saved video #{$_POST["presaveId"]}!";

	// i am not homer
?>