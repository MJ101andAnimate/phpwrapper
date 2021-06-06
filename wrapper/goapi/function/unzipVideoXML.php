<?php
	////
	//// This PHP moves video files into the user assets folder
	////

	///
	/// Variables
	///
	$base64ZIP = base64_decode($_POST["body_zip"]);
	$base64IMG = base64_decode($_POST["thumbnail_large"]);
	include_once("videoId.php");

	///
	/// Move files to their folders
	///
	file_put_contents("../../_user-files/videos/video-xml-$id.zip", $base64ZIP);
	file_put_contents("../../_user-files/videos/video-thumb-$id.png", $base64IMG);

	echo "0 - Succesful save!";

	// i am not homer
?>