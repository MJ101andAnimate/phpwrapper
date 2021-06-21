<?php
	////
	//// This PHP moves sound files into the user-files folder
	////
	
	// Infinite execution time
	ini_set("max_execution_time", "300");
	
	// Voiceover (unfinished)
	if ($_POST["subtype"] == "voiceover") {
		///
		/// Variables
		///
		$oggData = base64_decode($_POST["bytes"]);
		include_once("../function/soundVoId.php");
		$id = $id + 1;

		///
		/// Move files to their folders
		///
		file_put_contents("../../_user-files/cache/voiceover-{$id}.ogg", $oggData);

		///
		/// Convert to MP3
		///
		$command = "start ../function/ffmpeg/ffmpeg.exe -i \"../../_user-files/cache/voiceover-{$id}.ogg\" \"../../_user-files/sounds/voiceover-{$id}.mp3\" -y>nul";
		shell_exec($command);

		// Read file
		echo "1";
	}
?>