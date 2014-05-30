<!doctype html>
<html>
<head>
<?php require("header.inc"); ?>
<?php require("func_detect_browser.inc"); $browser = browser_search(); ?>
</head>

<body>
<div id="map_6_screen_functions_container"> 
<div id="map_1_screen_container_left">
			  <strong>Learning Design Map</strong>
			  <p>&bullet; <a href="/ld_map.php">Home</a></p>
			  <!-- <strong>Our PLC discussion</strong><p>&bullet; <a href="?mode=video">Video</a></p> -->
			  <strong>Ways into this idea using TfEL</strong>
			  <p>&bullet; <a href="/design_tlp_functions.php?mode=learningDesign">Learning Design</a><br />
			  &bullet; <a href="/design_tlp_functions.php?mode=primaryConnections">TfEL and primary connections </a><br />
			  &bullet; <a href="/design_tlp_functions.php?mode=guidedExperiences">Guided experiences <br />&nbsp;&nbsp;presentation cycle</a><br />
			  &bullet; <a href="/design_tlp_functions.php?mode=teachingCycle">ESL teaching cycle</a><br />
			  &bullet; <a href="/design_tlp_functions.php?mode=learningArea">Working in the yellow <br />&nbsp;&nbsp;learning area</a><br />
			  &bullet; <a href="/design_tlp_functions.php?mode=learnerFeedback">Learner feedback </a></p>
			  <?php 
			  	if ($_GET['mode'] == "learningDesign") {
				  	echo '<div class="desctext">Templates to support teachers with designing learning.</div>';
			  	}
			  	if ($_GET['mode'] == "primaryConnections") {
				  	echo '<div class="desctext">Using the 5Es teaching cycle to design learning.</div>';
			  	}
			  	if ($_GET['mode'] == "guidedExperiences") {
				  	echo '<div class="desctext">A model for designing learning experiences that promote deep learning.</div>';
			  	}
			  	if ($_GET['mode'] == "teachingCycle") {
				  	echo '<div class="desctext">A cycle for teaching NESB or New Arrival students to write in a specific genre in English.</div>';
			  	}
			  	if ($_GET['mode'] == "learningArea") {
				  	echo '<div class="desctext">One school’s approach for organising learning that supports and challenges students to engage in rigorous, engaging and meaningful learning.</div>';
			  	}
			  	if ($_GET['mode'] == "learnerFeedback") {
				  	echo '<div class="desctext">Using the TfEL review tools to incorporate learner feedback in the learning design process. (For a wider range of review tools please refer to the TfEL Review Tools tab on the DVD).</div>';
			  	}
			  ?>
			  <a href="/resources_pack/want_more/6.pdf"><div id="want_more"></div></a>
			  </div>
			  <?php 			  
			  	if ($_GET['mode'] == "video") { 
			  		echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/1AOBSd9B83I" frameborder="0" allowfullscreen></iframe></div>'; 
			  	} 
			  	if ($_GET['mode'] == "learningDesign") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/learningDesign.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/learningDesign.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "primaryConnections") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/primaryConnections.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/primaryConnections.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "guidedExperiences") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/guidedExperiences.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/guidedExperiences.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "teachingCycle") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/teachingCycle.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/teachingCycle.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "learningArea") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/learningArea.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/learningArea.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "learnerFeedback") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/learnerFeedback.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/learnerFeedback.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  ?>
</div>	
</body>
</html>
