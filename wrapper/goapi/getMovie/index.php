<?php
	////
	//// This PHP file zips the themelist and reads it to the LVM
	////

	///
	/// Variables
	///
	//$themeListZip = new ZipArchive;
	
	///
	/// Zip creation
	///
	/**if ($themeListZip->open("../../_user-files/videos/video-xml-4.zip") === TRUE) {
		// Extract zip
		$themeListZip->extractTo("../../_user-files/videos/");
		// Close zip
		$themeListZip->close();
		// Read zip to LVM
		readfile("../../_user-files/videos/movie.xml");
	}**/
	readfile("../../_user-files/videos/video-xml-24.zip");
	// If, for some reason creating the zip fails, send the user a message explaining what went wrong.
	/**else {
		echo "ERROR: Could not create themelist zip. Please contact Wrapper support, assuming you're not in the 10,000s, and you're in the 2020s.";
	}**/
?>