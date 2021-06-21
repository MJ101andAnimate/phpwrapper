<!-- DOCTYPE html breaks it for some reason -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="/favicon.png" type="image/png">
	<title>Character List</title>
	<meta name="description" content="PHPWrapper's character browser">
	<link rel="stylesheet" type="text/css" href="/pages/css/modern-normalize.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/global.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/swf.css">
</head>
<body>

<header>
	<a href="/">
		<h1 style="margin:0"><img id="logo" src="/pages/img/list_logo.svg" alt="PHPWrapper"></h1>
	</a>
	<nav id="headbuttons">
		<a href="/videos/browse.php" class="button_small">My Videos</a>
		<a href="create.php" class="button_big">Create</a>
	</nav>
</header>

<main>

<object data="http://localhost:6596/goapi/asset/animation/cc_browser.swf" type="application/x-shockwave-flash" id="character_browser">
	<!-- The flashvars are a huge mess, have fun looking at them. :) -->
	<param name="flashvars" value="apiserver=/&storePath=http://localhost:6596/goapi/asset/themes/<store>&clientThemePath=http://localhost:6596/goapi/asset/static/<client_theme>&themeId=<?php if (isset($_GET["theme"])) { echo $_GET["theme"]; } else { echo "family"; } ?>&bs=<?php if (isset($_GET["type"])) { echo $_GET["type"]; } else { echo "adam"; } ?>&ut=60&presaveId=<?php include_once("../goapi/function/characterId.php"); if (isset($_GET["characterId"])) { echo $_GET["characterId"]; } else { echo $id + 1; } ?>&appCode=go&page=&siteId=go&m_mode=school&isLogin=Y&isEmbed=1&ctc=go&tlang=en_US&nextUrl=%2Fcc_browser">
	<param name="allowScriptAccess" value="always">
</object>

</main>

</body></html>