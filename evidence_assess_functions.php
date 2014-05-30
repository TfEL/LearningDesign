<!doctype html>
<html>
<head>
<?php require("header.inc"); ?>
<?php require("func_detect_browser.php"); $browser = browser_search(); ?>
</head>

<body>
<div id="map_4_screen_functions_container"> 
<div id="map_1_screen_container_left">
			  <strong>Learning Design Map</strong>
			  <p>&bullet; <a href="/ld_map.php">Home</a></p>
			  <strong>Ways into this idea using TfEL</strong>
			  <p>&bullet; <a href="/evidence_assess_functions.php?mode=negotiateAssessment">Negotiate assessment</a><br />
			  &bullet; <a href="/evidence_assess_functions.php?mode=journalWriting">Journal writing</a><br />
			  &bullet; <a href="/evidence_assess_functions.php?mode=assessmentTool">Questioning as an assessment <br />&nbsp;&nbsp;tool</a><br />
			  &bullet; <a href="/evidence_assess_functions.php?mode=roundTableAssessment">Round table assessment</a><br />
			  &bullet; <a href="/evidence_assess_functions.php?mode=strategiesAssessment">Five key strategies for <br />&nbsp;&nbsp;assessment</a><br />
			  &bullet; <a href="/evidence_assess_functions.php?mode=reflectionPartners">Reflection partners</a></p>
			  <?php 
			  	if ($_GET['mode'] == "negotiateAssessment") {
				  	echo '<div class="desctext">A teacher tells how she negotiates with her students about how they will demonstrate their learning.</div>';
			  	}
			  	if ($_GET['mode'] == "journalWriting") {
				  	echo '<div class="desctext">Different types of journal writing support students to think in different ways, record what and how they are learning, and link to what they already know. (For more strategies for recording and facilitating ongoing formative assessment please refer to the ‘Want more?’ section).</div>';
			  	}
			  	if ($_GET['mode'] == "assessmentTool") {
				  	echo '<div class="desctext">Developing a classroom environment and questions which foster deep understanding and provide teachers with formative assessment information. (For more questioning techniques, please refer to the ‘Want more?’ section).</div>';
			  	}
			  	if ($_GET['mode'] == "roundTableAssessment") {
				  	echo '<div class="desctext">One school’s approach using round table assessment to provide an authentic opportunity for students to demonstrate and share their learning achievements, knowledge, skills and understandings, through presentations to a panel.</div>';
			  	}
			  	if ($_GET['mode'] == "strategiesAssessment") {
				  	echo '<div class="desctext">Using evidence of learning to adapt instruction in real time to meet students immediate learning needs.</div>';
			  	}
			  	if ($_GET['mode'] == "reflectionPartners") {
				  	echo '<div class="desctext">Students work with a partner to reflect on their learning.</div>';
			  	}
			  ?>
			  <a href="/resources_pack/want_more/4.pdf"><div id="want_more"></div></a></div>
			  <?php 
			  	if ($_GET['mode'] == "video") { 
			  		echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/Ew2LJt5UcYg" frameborder="0" allowfullscreen></iframe></div>'; 
			  	} 
			  	if ($_GET['mode'] == "negotiateAssessment") {
				  	echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/9hKWJT49Rng" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "journalWriting") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/journalWriting.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/journalWriting.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "assessmentTool") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/assessmentTool.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/assessmentTool.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "roundTableAssessment") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/roundTableAssessment.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/roundTableAssessment.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "strategiesAssessment") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/strategiesAssessment.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/strategiesAssessment.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  	if ($_GET['mode'] == "reflectionPartners") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/reflectionPartners.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><iframe src="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/reflectionPartners.pdf" frameborder="0" allowfullscreen></iframe></div>';
			  	}
			  ?>
</div>
</body>
</html>
