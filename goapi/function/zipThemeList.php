<?php
	// Variables
	$themeListZip = new ZipArchive;
	$createZip = $themeListZip->open("themeList.zip", ZipArchive::CREATE);
	
	// Attempt to create zip
	if ($createZip === TRUE) {
		// Add themelist to zip file
		$themeListZip->addFile("../themes/themelist.xml", "themelist.xml");
		// Close zip
		$themeListZip->close();
		// Read zip to videolist
		readfile("../getThemeList/themeList.zip");
		// Delete themelist for future themelist loading
		unlink("../getThemeList/themeList.zip");
	}
	// If, for some reason creating the zip fails, send the user a message explaining what went wrong.
	else {
		echo "Could not create themelist zip. Please contact Wrapper support, assuming you're not in the 10,000s, and you're in the 2020s.";
	}
?>