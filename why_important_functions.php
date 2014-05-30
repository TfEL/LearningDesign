<!doctype html>
<html>
<head>
<?php require("header.inc"); ?>
<?php require("func_detect_browser.php"); $browser = browser_search(); ?>
</head>

<body>
<div id="map_1_screen_functions_container"> 
<div id="map_1_screen_container_left">
			  <strong>Learning Design Map</strong>
			  <p>&bullet; <a href="/ld_map.php">Home</a></p>
			  <strong>Ways into this idea using TfEL</strong>
			  <p>&bullet; <a href="/why_important_functions.php?mode=facilitatingRealPurposes">Facilitating real purposes <br />&nbsp;&nbsp;for student learning</a><br />
			  &bullet; <a href="/why_important_functions.php?mode=muDictionary">Mu dictionary</a><br />
			  &bullet; <a href="/why_important_functions.php?mode=fiveWhys">5 whys</a><br />
			  &bullet; <a href="/why_important_functions.php?mode=keyActionsTeachers">Key actions: Teachers</a><br />
			  &bullet; <a href="/why_important_functions.php?mode=questionWall">Question wall</a><br />
			  &bullet; <a href="/why_important_functions.php?mode=howDoesThisFitWithMe">How does this fit with me<br />&nbsp;&nbsp;now or later?</a></p>
			  <?php
			  	if ($_GET['mode'] == "facilitatingRealPurposes") {
				  	echo '<div class="desctext">A school principal talks about the powerful learning that can happen when teachers and students have a deep understanding of what the intended learning is and why it is important.</div>';
			  	}
			  	if ($_GET['mode'] == "muDictionary") {
				  	echo '<div class="desctext">A process used in professional learning communities for teachers to develop a shared understanding of the intended learning by expressing meaning in 4 different ways of knowing.</div>';
			  	}
			  	if ($_GET['mode'] == "fiveWhys") {
				  	echo '<div class="desctext">A useful process for teachers to use in professional learning communities to dig deeply into why the intended learning is important to students rather than just skimming the surface. </div>';
			  	}
			  	if ($_GET['mode'] == "keyActionsTeachers") {
				  	echo '<div class="desctext">What do we see teachers doing when they are explicitly teaching students how to learn? </div>';
			  	}
			  	if ($_GET['mode'] == "questionWall") {
				  	echo '<div class="desctext">A strategy for helping students tune in to the intended learning and why it is important to them in their current and future lives.</div>';
			  	}
			  	if ($_GET['mode'] == "howDoesThisFitWithMe") {
				  	echo '<div class="desctext">A strategy for teachers to use in professional learning communities or with students to examine how new learning fits with students’ current lives and why it is important.</div>';
			  	}
			  ?>
			  <a href="/resources_pack/want_more/1.pdf"><div id="want_more"></div></a></div>
			  <?php 
			  	if ($_GET['mode'] == "video") { 
			  		echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/mYyNR74rtK0" frameborder="0" allowfullscreen></iframe></div>'; 
			  	} 
			  	if ($_GET['mode'] == "facilitatingRealPurposes") {
				  	echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/9QzN7nyKPeQ" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "muDictionary") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/why_important/muDictionary.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/why_important/muDictionary.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "fiveWhys") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/why_important/fiveWhys.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/why_important/fiveWhys.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "keyActionsTeachers") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/why_important/keyActionsTeachers.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/why_important/keyActionsTeachers.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "questionWall") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/why_important/questionWall.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/why_important/questionWall.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "howDoesThisFitWithMe") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/why_important/howDoesThisFitWithMe.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/why_important/howDoesThisFitWithMe.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  ?>
</div>
</body>
</html>
