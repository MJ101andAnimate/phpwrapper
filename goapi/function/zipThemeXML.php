<?php
	// Variables
	$themeXMLZip = new ZipArchive;
	$createZip = $themeXMLZip->open("theme.zip", ZipArchive::CREATE);
	
	// Attempt to create zip
	if ($createZip === TRUE) {
		// Add theme XML to zip file
		$themeXMLZip->addFile("../asset/themes/{$_POST["themeId"]}/theme.xml", "theme.xml");
		// Close zip
		$themeXMLZip->close();
		// Read zip to videolist
		readfile("../getTheme/theme.zip");
		// Delete zip for future themelist loading
		unlink("../getTheme/theme.zip");
	}
	// If, for some reason creating the zip fails, send the user a message explaining what went wrong.
	else {
		echo "ERROR: Could not create theme XML zip. Please contact Wrapper support.";
	}
?>