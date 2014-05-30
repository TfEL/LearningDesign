<!doctype html>
<html>
<head>
<?php require("header.inc"); ?>
<?php require("func_detect_browser.php"); $browser = browser_search(); ?>
</head>

<body>
<div id="map_2_screen_functions_container"> 
<div id="map_1_screen_container_left">
			  <strong>Learning Design Map</strong>
			  <p>&bullet; <a href="/ld_map.php">Home</a></p>
			  <strong>Ways into this idea using TfEL</strong>
			  <p>&bullet; <a href="/they_bring_functions.php?mode=shiftingTheFocus">Shifting the focus to the learner</a><br />
			  &bullet; <a href="/they_bring_functions.php?mode=beginWithWhatWeKnow">Begin with what we know</a><br />
			  &bullet; <a href="/they_bring_functions.php?mode=unpackMetaphors">Unpacking metaphors</a><br />
			  &bullet; <a href="/they_bring_functions.php?mode=questioningForUnderstanding">Questioning for understanding</a><br />
			  &bullet; <a href="/they_bring_functions.php?mode=learningStrenghts">Learning strengths</a><br />
			  &bullet; <a href="/they_bring_functions.php?mode=hearingAllVoices">Hearing all voices</a></p>
			  <?php
			  	if ($_GET['mode'] == "shiftingTheFocus") {
				  	echo '<div class="desctext">A school principal talks about shifting the focus to the learner so that students are able to talk honestly about their needs as learners.</div>';
			  	}
			  	if ($_GET['mode'] == "beginWithWhatWeKnow") {
				  	echo '<div class="desctext">One teacher’s experience in designing powerful learning by starting with her students’ prior knowledge and understandings.</div>';
			  	}
			  	if ($_GET['mode'] == "unpackMetaphors") {
				  	echo '<div class="desctext">A process for delving deeply into students’ current understandings and provoking new ways of thinking.</div>';
			  	}
			  	if ($_GET['mode'] == "questioningForUnderstanding") {
				  	echo '<div class="desctext">Using the six facets of understanding to dig deeply into what students bring to new learning.</div>';
			  	}
			  	if ($_GET['mode'] == "learningStrenghts") {
				  	echo '<div class="desctext">A survey to help teachers think about what their students bring by analysing their behaviour and preferences as learners.</div>';
			  	}
			  	if ($_GET['mode'] == "hearingAllVoices") {
				  	echo '<div class="desctext">A strategy for facilitating learning conversations to elicit students’ understandings, attitudes, interests and knowledge. (For more structured dialogue strategies please refer to the ‘Want more?’ section).</div>';
			  	}
			  ?>
			  <a href="/resources_pack/want_more/2.pdf"><div id="want_more"></div></a></div>

			  <?php 
			  	if ($_GET['mode'] == "video") { 
			  		echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/JtfZh3Wplw0" frameborder="0" allowfullscreen></iframe></div>'; 
			  	} 
			  	if ($_GET['mode'] == "shiftingTheFocus") {
				  	echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/cTSxzA5BIm0" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "beginWithWhatWeKnow") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/beginWithWhatWeKnow.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/beginWithWhatWeKnow.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "unpackMetaphors") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/unpackMetaphors.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/unpackMetaphors.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "questioningForUnderstanding") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/questioningForUnderstanding.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/questioningForUnderstanding.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "learningStrenghts") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/learningStrenghts.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/learningStrenghts.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "hearingAllVoices") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/hearingAllVoices.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/hearingAllVoices.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  ?>
</div>
</body>
</html>
