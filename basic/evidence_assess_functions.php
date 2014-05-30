<!doctype html>
<html>
<head>
<style type="text/css">
body,td,th {
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-style: normal;
	font-weight: normal;
	font-size: medium;
	color: #333;
}
body {
	background-color: #FFF;
	margin-left: 30%;
	margin-top: 0px;
	margin-right: 30%;
	margin-bottom: 0px;
	min-width: 500px;
	background: #F0F0F0;
}
</style>
<!-- Get some anonymous statistics from Desktop users (GA Installed in App Frames) -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3926180-8', 'learningdesign.sa.edu.au');
  ga('send', 'pageview');

</script>
</head>
<body>
<h1>Learning Design</h1>
<div id="map_4_screen_functions_container"> 
<div id="map_1_screen_container_left">
			  <strong>Learning Design Map</strong>
			  <p>&bullet; <a href="map.php?old_browser=1:800">Home</a></p>
			  <strong>Ways into this idea using TfEL</strong>
			  <p>&bullet; <a href="evidence_assess_functions.php?mode=negotiateAssessment">Negotiate assessment</a><br />
			  &bullet; <a href="evidence_assess_functions.php?mode=journalWriting">Journal writing</a><br />
			  &bullet; <a href="evidence_assess_functions.php?mode=assessmentTool">Questioning as an assessment tool</a><br />
			  &bullet; <a href="evidence_assess_functions.php?mode=roundTableAssessment">Round table assessment</a><br />
			  &bullet; <a href="evidence_assess_functions.php?mode=strategiesAssessment">Five key strategies for <br />&nbsp;&nbsp;assessment</a><br />
			  &bullet; <a href="evidence_assess_functions.php?mode=reflectionPartners">Reflection partners</a></p>
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
			  <a href="resources_pack/want_more/4.pdf"><div id="want_more"></div></a></div>
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
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/journalWriting.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "assessmentTool") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/assessmentTool.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/assessmentTool.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "roundTableAssessment") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/roundTableAssessment.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/roundTableAssessment.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "strategiesAssessment") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/strategiesAssessment.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/strategiesAssessment.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "reflectionPartners") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/reflectionPartners.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/evidence_assess/reflectionPartners.pdf">Download this resource</a></div>';
			  	}
			  ?>
<br /><i>This application was designed for use on Apple iPad and computers running Google Chrome or Apple Safari – for a better experience please upgrade.</i>
</div>
</body>
</html>
