<!-- DOCTYPE html breaks it for some reason -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="/favicon.png" type="image/png">
	<title>Video Studio</title>
	<link rel="stylesheet" type="text/css" href="/pages/css/modern-normalize.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/global.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/swf.css">
</head>
<body>

<!-- Asset Importer -->
<div id="import_popup_container" style="display:none">
	<div id="import_popup">
		<h2 id="import-an-asset">Import an Asset</h2>
		<p class="close-button" onclick="hideImporter()">X</p>
		<!-- Import form -->
		<div id="import_image">
			<form id="uploadbanner" enctype="multipart/form-data" method="post" action="/goapi/uploadAsset" target="dummy">
				<input id="fileupload" name="import" type="file" accept=".mp3,.wav,.png,.jpg">
				<h3 id="import-as">Import As:</h3>
				<input type="radio" value="prop" name="subtype"> Prop</input>
				<br />
				<input type="radio" value="background" name="subtype"> Background</input>
				<br />
				<input type="submit" value="Import" onclick='document.getElementById("video_maker").importerUploadComplete("importerUploadComplete"); document.getElementById("import_popup_container").style.display = "none";' id="submit" class="button_import" />
			</form>
		</div>
	</div>
</div>

<!-- Video Previewer -->
<div id="preview_popup_container" style="display:none">
	<div id="preview_popup">
		<h2 id="preview-video">Preview Video</h2>
		<p class="close-button" onclick="hidePreviewer()">X</p>
		<object data="http://localhost:6596/goapi/asset/animation/player.swf" type="application/x-shockwave-flash" id="preview_player">
			<!-- The flashvars are a huge mess, have fun looking at them. :) -->
			<param name="flashvars" value="apiserver=/&storePath=http://localhost:6596/goapi/asset/themes/<store>&isEmbed=1&ctc=go&ut=60&bs=default&appCode=go&page=&siteId=go&lid=13&isLogin=Y&retut=1&clientThemePath=http://localhost:6596/goapi/asset/static/<client_theme>&themeId=custom&tlang=en_US&isInitFromExternal=1&goteam_draft_only=1&isWide=1&collab=0&startFrame=previewStartFrame&autostart=1&nextUrl=../pages/html/list.html&tray=custom">
			<param name="allowScriptAccess" value="always">
			<param name="allowFullScreen" value="true">
		</object>
	</div>
</div>

<!-- Video Studio -->
<main>

<object data="http://localhost:6596/goapi/asset/animation/go_full.swf" type="application/x-shockwave-flash" id="video_studio">
	<!-- The flashvars are a huge mess, have fun looking at them. :) -->
	<param name="flashvars" value="apiserver=/&storePath=http://localhost:6596/goapi/asset/themes/<store>&isEmbed=1&ctc=go&ut=60&bs=default&appCode=go&page=&siteId=go&lid=13&isLogin=Y&retut=1&clientThemePath=http://localhost:6596/goapi/asset/static/<client_theme>&themeId=custom&tlang=en_US&presaveId=<?php include_once("../goapi/function/videoId.php"); if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo $id + 1; } ?><?php if (isset($_GET["video"])) { echo "&movieId={$_GET["video"]}"; } ?>&goteam_draft_only=1&isWide=1&collab=0&nextUrl=../pages/html/list.html&tray=custom">
	<param name="allowScriptAccess" value="always">
	<param name="allowFullScreen" value="true">
</object>

</main>

<!-- Keeps the page from reloading on form submission -->
<iframe style="display:none" name="dummy"></iframe>

<script>
	////
	//// This JS contains important Video Studio stuff
	////
	
	///
	/// Variables
	///
	var previewPlayerTempData = "";
	const fu = document.getElementById('fileupload'),
		sub = document.getElementById('submit');

	///
	/// Previewer
	///
	function initPreviewPlayer(dataXmlStr, startFrame, containsChapter, themeList) {
		// New variable to be used by loadPreviewer()
		movieDataXmlStr = dataXmlStr;
		// Movie XML
		filmXmlStr = dataXmlStr.split("<filmxml>")[1].split("</filmxml>")[0];
		// Show preview popup
		document.getElementById("preview_popup_container").style.display = "block";
		// Load the Video Previewer
		loadPreviewer();
	}
	function loadPreviewer() {
		// I think this is in case of an error??
		if (movieDataXmlStr === null) {
			return;
		}
		// I don't know
		savePreviewData(movieDataXmlStr);
	}
	function savePreviewData(a) {
		// Set temp data variable
		previewPlayerTempData = a
	}
	function retrievePreviewPlayerData() {
		// Store in separate variable
		var recentPreviewPlayerTempData = previewPlayerTempData;
		// Clear original variable
		previewPlayerTempData = "";
		// Return recent temp data
		return recentPreviewPlayerTempData;
	}

	///
	/// Importing
	///
	// Show upload window
	function showImporter() {
		document.getElementById("import_popup_container").style.display = "block";
	};

	///
	/// Other stuff
	///
	// Redirect to Video Browser on Video Studio exit
	function exitStudio() {
		window.location = "/videos/browse.php";
	}
	// Hide interactive tutorial
	interactiveTutorial = {
		neverDisplay: function() {
			return true
		}
	};
	// Hide Video Previewer popup
	function hidePreviewer() {
		document.getElementById("preview_popup_container").style.display = "none";
	}
	// Hide Asset Importer popup
	function hideImporter() {
		document.getElementById("import_popup_container").style.display = "none";
	}
</script>

</main>

</body></html>