<!doctype html>
<html>
<head>
<?php require("header.inc"); ?>
<?php require("func_detect_browser.php"); $browser = browser_search(); ?>
</head>

<body>
<div id="map_5_screen_functions_container"> 
<div id="map_1_screen_container_left">
			  <strong>Learning Design Map</strong>
			  <p>&bullet; <a href="/ld_map.php">Home</a></p>
			  <strong>Ways into this idea using TfEL</strong>
			  <p>&bullet; <a href="/engage_learning_functions.php?mode=engagingChallenging">Engaging, challenging and <br />&nbsp;&nbsp;supporting students' learning</a><br />
			  &bullet; <a href="/engage_learning_functions.php?mode=conceptAttainment">Concept attainment</a><br />
			  &bullet; <a href="/engage_learning_functions.php?mode=jigsawProcess">Jigsaw process</a><br />
			  &bullet; <a href="/engage_learning_functions.php?mode=newMedia">Ten tips for teaching with <br />&nbsp;&nbsp;new media</a><br />
			  &bullet; <a href="/engage_learning_functions.php?mode=mindMap">Mind map</a><br />
			  &bullet; <a href="/engage_learning_functions.php?mode=developingImagination">Developing imagination <br />&nbsp;&nbsp;in education</a></p>
			  <?php 
			  	if ($_GET['mode'] == "engagingChallenging") {
				  	echo '<div class="desctext">Students and teachers talk about what engages, challenges and supports them as learners.</div>';
			  	}
			  	if ($_GET['mode'] == "conceptAttainment") {
				  	echo '<div class="desctext">Concept attainment is used to check for deep understanding. For detailed instructions, please refer to the ‘Want more?’ section.</div>';
			  	}
			  	if ($_GET['mode'] == "jigsawProcess") {
				  	echo '<div class="desctext">The jigsaw process is an effective way to encourage students to share their point of view and challenge them to consider other ways of thinking. </div>';
			  	}
			  	if ($_GET['mode'] == "newMedia") {
				  	echo '<div class="desctext">Make the most of new media to engage, challenge and support student learning.</div>';
			  	}
			  	if ($_GET['mode'] == "mindMap") {
				  	echo '<div class="desctext">This is a strategy to support students in identifying current ideas and making connections to new ideas.</div>';
			  	}
			  	if ($_GET['mode'] == "developingImagination") {
			  		echo '<div class="desctext">Sir Ken Robinson challenges us to rethink the role of imagination, which he considers to be a critical capacity needed by learners today.</div>'; 
			  	}
			  ?>
			  <a href="/resources_pack/want_more/5.pdf"><div id="want_more"></div></a></div>
			  <?php 
			  	if ($_GET['mode'] == "video") {
			  		echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/0JoQlgfgtB8" frameborder="0" allowfullscreen></iframe></div>'; 
			  	} 
			  	if ($_GET['mode'] == "engagingChallenging") {
				  	echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/1Tk1_JRURtA?list=PLBPCwWjTVEcsPrlyaN6x9gdVZ_1yythk2" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "conceptAttainment") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/conceptAttainment.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/conceptAttainment.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "jigsawProcess") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/jigsawProcess.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/jigsawProcess.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "newMedia") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/newMedia.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/newMedia.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "mindMap") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/mindMap.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/mindMap.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "developingImagination") {
			  		echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/Isq1NglfhvA" frameborder="0" allowfullscreen></iframe></div>'; 
			  	}
			  ?>
</div>
</body>
</html>
