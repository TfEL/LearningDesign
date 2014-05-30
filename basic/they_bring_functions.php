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
<div id="map_2_screen_functions_container"> 
<div id="map_1_screen_container_left">
			  <strong>Learning Design Map</strong>
			  <p>&bullet; <a href="map.php?old_browser=1:800">Home</a></p>
			  <strong>Ways into this idea using TfEL</strong>
			  <p>&bullet; <a href="they_bring_functions.php?mode=shiftingTheFocus">Shifting the focus to the learner</a><br />
			  &bullet; <a href="they_bring_functions.php?mode=beginWithWhatWeKnow">Begin with what we know</a><br />
			  &bullet; <a href="they_bring_functions.php?mode=unpackMetaphors">Unpacking metaphors</a><br />
			  &bullet; <a href="they_bring_functions.php?mode=questioningForUnderstanding">Questioning for understanding</a><br />
			  &bullet; <a href="they_bring_functions.php?mode=learningStrenghts">Learning strengths</a><br />
			  &bullet; <a href="they_bring_functions.php?mode=hearingAllVoices">Hearing all voices</a></p>
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
			  <a href="resources_pack/want_more/2.pdf"><div id="want_more"></div></a></div>

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
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/beginWithWhatWeKnow.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "unpackMetaphors") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/unpackMetaphors.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/unpackMetaphors.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "questioningForUnderstanding") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/questioningForUnderstanding.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/questioningForUnderstanding.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "learningStrenghts") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/learningStrenghts.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/learningStrenghts.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "hearingAllVoices") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/hearingAllVoices.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/they_bring/hearingAllVoices.pdf">Download this resource</a></div>';
			  	}
			  ?>
			  <br /><i>This application was designed for use on Apple iPad and computers running Google Chrome or Apple Safari – for a better experience please upgrade.</i>
</div>
</body>
</html>
