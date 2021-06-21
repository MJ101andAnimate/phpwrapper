<?php
	////
	//// This PHP creates a UGC XML for the Video Studio to use. You can learn more through the magic known as the Network tab.
	////

	///
	/// UGC XML creation
	///
	// Beginning of XML
	echo "<ugc more=\"0\">";
	// Character listing
	if ($_POST["type"] = "char") {
		// Get latest character ID
		include_once("../function/characterIdGoAPI.php");

		// Unparsed theme ID variable
		$char_unparsed_theme = $_POST["themeId"];
		
		// CC theme ID replacing
		if ($char_unparsed_theme == "custom") {
			// Comedy World
			$char_theme = "family";
		} else if ($char_unparsed_theme == "action") {
			// Lil' Peepz
			$char_theme = "cc2";
		} else {
			// Other themes
			$char_theme = $char_unparsed_theme;
		}

		// Loop string with decreasing ID until it reaches the first ID
		for ($charId = $id; $charId >= 1; $charId-=1) {
			echo "<char id=\"{$charId}\" name=\"Character {$charId}\" cc_theme_id=\"{$char_theme}\" thumbnail_url=\"http://localhost:6596/_user-files/characters/character-thumb-{$charId}.png\" copyable=\"Y\"><tags/></char>";
		}
	}
	echo "</ugc>";
?>