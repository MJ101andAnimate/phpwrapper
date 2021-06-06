<?php
	////
	//// This PHP adds 1 to the number of videos
	////
	
	// Read the current video count
	include_once("../goapi/function/videoId.php");
	
	// Delete video count file
	unlink("../goapi/function/videoId.php");
	// File that will be created
	$file = "../goapi/function/videoId.php";
	// Add 1 to the video count
	$id = $id + 1;
	// PHP code that will be used in the file
	$current = "<?php \$id = {$id} ?>";
	// Write the PHP code back to the file
	file_put_contents($file, $current);
?>