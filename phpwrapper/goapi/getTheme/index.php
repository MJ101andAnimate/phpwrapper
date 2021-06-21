<?php
	////
	//// This PHP zips a theme XML and reads it to the Video Studio
	////

	///
	/// Variables
	///
	$themeXMLZip = new ZipArchive;
	$createZip = $themeXMLZip->open("../../_user-files/cache/theme.zip", ZipArchive::CREATE);

	///
	/// Zip creation
	///
	if ($createZip == true) {
		// Add theme XML to zip file
		$themeXMLZip->addFile("../asset/themes/{$_POST["themeId"]}/theme.xml", "theme.xml");
		// Close zip
		$themeXMLZip->close();
		// Read zip
		readfile("../../_user-files/cache/theme.zip");
		// Delete zip for future theme loading
		unlink("../../_user-files/cache/theme.zip");
	}
	// If, for some reason creating the zip fails, send the user a message explaining what went wrong.
	else {
		echo "ERROR: Could not create theme XML zip.";
	}
?>