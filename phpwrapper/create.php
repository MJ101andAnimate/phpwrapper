<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="/favicon.png" type="image/png">
	<title>Create</title>
	<meta name="description" content="PHPWrapper's Create page">
	<link rel="stylesheet" type="text/css" href="/pages/css/modern-normalize.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/global.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/create.css">
	<script>
		function characterThemes() {
			document.getElementById("creation_type").style.display = "none";
			document.getElementById("character_themes").style.display = "block";
			document.getElementById("back").style.display = "block";
		}
		function movieThemes() {
			document.getElementById("creation_type").style.display = "none";
			document.getElementById("movie_themes").style.display = "block";
			document.getElementById("back").style.display = "block";
		}
		function creationType() {
			document.getElementById("creation_type").style.display = "block";
			document.getElementById("character_themes").style.display = "none";
			document.getElementById("movie_themes").style.display = "none";
			document.getElementById("back").style.display = "none";
		}
		function showCredits() {
			document.getElementById("credits").style.display="block";
			document.getElementById("credits_button").style.display="none";
		}
	</script>
</head>
<body>

<header>
	<a href="/">
		<h1 style="margin:0"><img id="logo" src="/pages/img/list_logo.svg" alt="PHPWrapper"/></h1>
	</a>
	<nav id="headbuttons">
		<a class="button_small" id="back" onclick="creationType()" style="display: none">Back</a>
	</nav>
</header>

<main>
	
<div id="creation_type" style="display: unset">
	<h1 id="what-would-you-like-to-create">What would you like to create?</h1>

	<div id="column1">
		<div class="theme pick_creation">
			<div onclick="characterThemes()">
				<img src="/pages/img/themelist/Character.png" alt="Create a character">
				<div>
					<p class="pick_creation_type">Character</p>
					<p class="pick_creation_description">Custom Characters can be a great way to help advance the story you're telling.</p>
				</div>
			</div>
		</div>
		<div class="theme pick_creation">
			<div onclick="movieThemes()">
				<img src="/pages/img/themelist/Movie.png" alt="Create a video">
				<div>
					<p class="pick_creation_type">Video</p>
					<p class="pick_creation_description">Go create a video, movie, short story, tutorial, or whatever. The choice is yours.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="character_themes" style="display: none">
	<h1 id="select-a-theme-for-your-character">Select a theme for your character</h1>

	<h2 id="standard-themes">Standard themes</h2>
	<div id="column1">
		<div class="theme">
			<a href="http://localhost:4343/cc_browser?themeId=custom">
				<img src="/pages/img/themelist/Comedy_World.jpg" alt="Comedy World">
				<p>Comedy World</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/cc_browser?themeId=cc2">
				<img src="/pages/img/themelist/lil_Peepz.jpg" alt="Lil' Peepz">
				<p>Lil' Peepz</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/cc_browser?themeId=anime">
				<img src="/pages/img/themelist/Anime.jpg" alt="Anime">
				<p>Anime</p>
			</a>
		</div>
	</div><br />

	<div id="column3">
		<div class="theme">
			<a href="http://localhost:4343/cc_browser?themeId=ninjaanime">
				<img src="/pages/img/themelist/Ninja_Anime.jpg" alt="Ninja Anime">
				<p>Ninja Anime</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/cc_browser?themeId=spacecitizen">
				<img src="/pages/img/themelist/Space_Citizens.jpg" alt="Space Citizens">
				<p>Space Citizens</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/cc_browser?themeId=custom">
				<img src="/pages/img/themelist/Chibi_Peepz.jpg" alt="Chibi Peepz">
				<p>Chibi Peepz</p>
			</a>
		</div>
	</div><br />

	<div id="column4">
		<div class="theme">
			<a href="http://localhost:4343/cc_browser?themeId=ninja">
				<img src="/pages/img/themelist/Chibi_Ninjas.jpg" alt="Chibi Ninjas">
				<p>Chibi Ninjas</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/cc_browser?themeId=animal">
				<img src="/pages/img/themelist/Lil_Petz_World.jpg" alt="Lil" Petz World">
				<p>Lil" Petz World</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/cc_browser?themeId=space">
				<img src="/pages/img/themelist/Space_Peepz.jpg" alt="Space Peepz">
				<p>Space Peepz</p>
			</a>
		</div>
	</div><br />

	<h2 id="licensed-themes">Licensed themes</h2>
	<div id="column8">
		<div class="theme">
			<a href="http://localhost:4343/cc_browser?themeId=botdf">
				<img src="/pages/img/themelist/botdf.jpg" alt="Blood on the Dance Floor&#8482;">
				<p>Blood on the Dance Floor&#8482;</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/cc_browser?themeId=cctoonadv">
				<img src="/pages/img/themelist/Toon_Adventure.png" alt="Toon Adventure&#8482;">
				<p>Toon Adventure&#8482;</p>
			</a>
		</div>
	</div><br />
</div>

<div id="movie_themes" style="display: none">
	<h1 id="select-a-theme-for-your-video">Select a theme for your video</h1>
	
	<h2 id="standard-themes">Standard themes</h2>
	<div id="column1">
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=custom">
				<img src="/pages/img/themelist/Comedy_World.jpg" alt="Comedy World">
				<p>Comedy World</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=action">
				<img src="/pages/img/themelist/lil_Peepz.jpg" alt="Lil' Peepz">
				<p>Lil' Peepz</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=retro">
				<img src="/pages/img/themelist/Cartoon_Classics.jpg" alt="Cartoon Classics">
				<p>Cartoon Classics</p>
			</a>
		</div>
	</div><br />

	<div id="column2">
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=politic2">
				<img src="/pages/img/themelist/Election_2012.jpg" alt="Election 2012">
				<p>Election 2012</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=stick">
				<img src="/pages/img/themelist/Stick_Figure.jpg" alt="Stick Figure">
				<p>Stick Figure</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=anime">
				<img src="/pages/img/themelist/Anime.jpg" alt="Anime">
				<p>Anime</p>
			</a>
		</div>
	</div><br />

	<div id="column3">
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=ninjaanime">
				<img src="/pages/img/themelist/Ninja_Anime.jpg" alt="Ninja Anime">
				<p>Ninja Anime</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=spacecitizen">
				<img src="/pages/img/themelist/Space_Citizens.jpg" alt="Space Citizens">
				<p>Space Citizens</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=chibi">
				<img src="/pages/img/themelist/Chibi_Peepz.jpg" alt="Chibi Peepz">
				<p>Chibi Peepz</p>
			</a>
		</div>
	</div><br />

	<div id="column4">
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=ninja">
				<img src="/pages/img/themelist/Chibi_Ninjas.jpg" alt="Chibi Ninjas">
				<p>Chibi Ninjas</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=animal">
				<img src="/pages/img/themelist/Lil_Petz_World.jpg" alt="Lil' Petz World">
				<p>Lil' Petz World</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=space">
				<img src="/pages/img/themelist/Space_Peepz.jpg" alt="Space Peepz">
				<p>Space Peepz</p>
			</a>
		</div>
	</div><br />

	<div id="column5">
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=fullenergy">
				<img src="/pages/img/themelist/Full_Energy.png" alt="Full Energy">
				<p>Full Energy</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=politic">
				<img src="/pages/img/themelist/Politics_and_Celebrity.png" alt="Politics & Celebrity">
				<p>Politics & Celebrity</p>
			</a>
		</div>
	</div><br />

	<h2 id="seasonal-themes">Seasonal themes</h2>
	<div id="column7">
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=christmas">
				<img src="/pages/img/themelist/Holiday_and_Seasonal.png" alt="Holiday & Seasonal">
				<p>Holiday & Seasonal</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=monstermsh">
				<img src="/pages/img/themelist/Monsters_Mayhem.png" alt="Monsters Mayhem">
				<p>Monsters Mayhem</p>
			</a>
		</div>
	</div><br />

	<h2 id="licensed-themes">Licensed themes</h2>
	<div id="column8">
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=akon">
				<img src="/pages/img/themelist/Akon.jpg" alt="AKON&#8482;">
				<p>AKON&#8482;</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=ben10">
				<img src="/pages/img/themelist/Ben_10.png" alt="Ben 10&#8482;">
				<p>Ben 10&#8482;</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=botdf">
				<img src="/pages/img/themelist/botdf.jpg" alt="Blood on the Dance Floor&#8482;">
				<p>Blood on the Dance Floor&#8482;</p>
			</a>
		</div>
	</div><br />

	<div id="column9">
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=bunny">
				<img src="/pages/img/themelist/Happy_Bunny.png" alt="It's Happy Bunny&#8482;">
				<p>It's Happy Bunny&#8482;</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=chowder">
				<img src="/pages/img/themelist/Chowder.png" alt="Chowder&#8482;">
				<p>Chowder&#8482;</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=domo">
				<img src="/pages/img/themelist/Domo.png" alt="Domo&#8482;">
				<p>Domo&#8482;</p>
			</a>
		</div>
	</div><br />

	<div id="column10">
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=monkeytalk">
				<img src="/pages/img/themelist/SuperRica_&_Rashy.png" alt="SuperRica & Rashy&#8482;">
				<p>SuperRica & Rashy&#8482;</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=sf">
				<img src="/pages/img/themelist/Street_Fighter.png" alt="Street Fighter&#8482;">
				<p>Street Fighter&#8482;</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=startrek">
				<img src="/pages/img/themelist/Star_Trek_Quags.JPG" alt="Star Trek&#8482; Quogs">
				<p>Star Trek&#8482; Quogs</p>
			</a>
		</div>
	</div><br />

	<div id="column11">
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=toonadv">
				<img src="/pages/img/themelist/Toon_Adventure.png" alt="Toon Adventure&#8482;">
				<p>Toon Adventure&#8482;</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=underdog">
				<img src="/pages/img/themelist/UnderDog.png" alt="Underdog&#8482;">
				<p>Underdog&#8482;</p>
			</a>
		</div>
		<div class="theme">
			<a href="http://localhost:4343/go_full?tray=willie">
				<img src="/pages/img/themelist/Willie_Nelson.jpg" alt="Willie Nelson&#8482;">
				<p>Willie Nelson&#8482;</p>
			</a>
		</div>
	</div><br />

	<h2 id="developer-themes">Developer themes</h2>
	<div class="theme">
		<a href="http://localhost:4343/go_full?tray=street">
			<img src="/pages/img/themelist/Street.png" alt="Street">
			<p>Street</p>
		</a>
	</div>
	<div class="theme">
		<a href="http://localhost:4343/go_full?tray=yme">
			<img src="/pages/img/themelist/yme.png" alt="yme babe theme">
			<p>yme</p>
		</a>
	</div><br />
</div>

</main>

<footer>
	<nav id="foot-left">
		<span title="Wrapper: Offline vWRAPPER_VER, build WRAPPER_BLD">vWRAPPER_VER</span>
		<a href="https://localhost:4664/faq.html">FAQ</a>
		<a href="https://discord.gg/b7YSRkg">Wrapper Hub</a>
	</nav>

	<nav id="foot-right">
		<a href="https://localhost:4664">Server Page</a>
		<a href="https://localhost:4664/caillou.html">Caillou</a>
	</nav>
</footer>

</body></html>
