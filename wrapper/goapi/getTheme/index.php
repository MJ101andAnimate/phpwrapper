<?php
	////
	//// This PHP file zips a theme XML and reads it to the LVM
	////

	///
	/// Variables
	///
	$themeXMLZip = new ZipArchive;
	$createZip = $themeXMLZip->open("theme.zip", ZipArchive::CREATE);

	///
	/// Zip creation
	///
	if ($createZip === TRUE) {
		// Add theme XML to zip file
		$themeXMLZip->addFile("../asset/themes/{$_POST["themeId"]}/theme.xml", "theme.xml");
		// Close zip
		$themeXMLZip->close();
		// Read zip to LVM
		readfile("../getTheme/theme.zip");
		// Delete zip for future theme loading
		unlink("../getTheme/theme.zip");
	}
	// If, for some reason creating the zip fails, send the user a message explaining what went wrong.
	else {
		echo "ERROR: Could not create theme XML zip.";
	}
?>