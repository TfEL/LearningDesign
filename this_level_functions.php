<!doctype html>
<html>
<head>
<?php require("header.inc"); ?>
<?php require("func_detect_browser.php"); $browser = browser_search(); ?>
</head>

<body>
<div id="map_3_screen_functions_container"> 
<div id="map_1_screen_container_left">
			  <strong>Learning Design Map</strong>
			  <p>&bullet; <a href="/ld_map.php">Home</a></p>
			  <strong>Ways into this idea using TfEL</strong>
			  <p>&bullet; <a href="/this_level_functions.php?mode=smoothSlope">Learning is more like a <br />&nbsp;&nbsp;wavy line than a smooth slope</a><br />
			  &bullet; <a href="/this_level_functions.php?mode=pairsLook">What does learning <br />&nbsp;&nbsp;in pairs look like?</a><br />
			  &bullet; <a href="/this_level_functions.php?mode=rubrics">Assessment rubrics</a><br />
			  &bullet; <a href="/this_level_functions.php?mode=expertInterviews">Expert interviews</a><br />
			  &bullet; <a href="/this_level_functions.php?mode=bloomsTaxonomy">Bloom’s Taxonomy</a><br />
			  &bullet; <a href="/this_level_functions.php?mode=starWork">5 star work</a></p>
			  <?php 
			  	if ($_GET['mode'] == "smoothSlope") {
				  	echo '<div class="desctext">One teacher explains how she talks explicitly to her students about what learning looks like. </div>';
			  	}
			  	if ($_GET['mode'] == "pairsLook") {
				  	echo '<div class="desctext">One teacher describes how she explicitly teaches students to work in pairs and reach a shared understanding of effective learning.</div>';
			  	}
			  	if ($_GET['mode'] == "rubrics") {
				  	echo '<div class="desctext">Developing assessment rubrics with students for a shared understanding of what constitutes quality learning.</div>';
			  	}
			  	if ($_GET['mode'] == "expertInterviews") {
				  	echo '<div class="desctext">Students uncover what the intended learning looks like when experts apply it.</div>';
			  	}
			  	if ($_GET['mode'] == "bloomsTaxonomy") {
				  	echo '<div class="desctext">A structured questioning method that allows teachers to set clear expectations with students about the depth of response required to demonstrate learning.</div>';
			  	}
			  	if ($_GET['mode'] == "starWork") {
				  	echo '<div class="desctext">A process to define quality criteria for any product or process.</div>';
			  	}
			  ?>
			  <a href="/resources_pack/want_more/3.pdf"><div id="want_more"></div></a></div>
			  <?php 
			  	if ($_GET['mode'] == "video") { 
			  		echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/kWWTfDamscU" frameborder="0" allowfullscreen></iframe></div>'; 
			  	} 
			  	if ($_GET['mode'] == "smoothSlope") {
				  	echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/68BMeU8GFf8" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "pairsLook") {
				  	echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/1LZmNw_omg4" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "rubrics") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/this_level/rubrics.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/this_level/rubrics.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "expertInterviews") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/this_level/guide42.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/this_level/guide42.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "bloomsTaxonomy") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/this_level/bloomstaxonomy.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/this_level/bloomstaxonomy.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "starWork") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/this_level/5starwork.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/this_level/5starwork.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  ?>
</div>
</body>
</html>
