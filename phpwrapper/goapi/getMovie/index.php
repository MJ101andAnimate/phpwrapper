<?php
	////
	//// This PHP loads video XMLs
	////

	///
	/// Variables
	///
	$videoId = $_GET["movieId"];

	///
	/// Read file
	///
	readfile("../../_user-files/videos/video-xml-{$videoId}.zip");
?>