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
<div id="map_6_screen_functions_container"> 
<div id="map_1_screen_container_left">
			  <strong>Learning Design Map</strong>
			  <p>&bullet; <a href="map.php?old_browser=1:800">Home</a></p>
			  <!-- <strong>Our PLC discussion</strong><p>&bullet; <a href="?mode=video">Video</a></p> -->
			  <strong>Ways into this idea using TfEL</strong>
			  <p>&bullet; <a href="design_tlp_functions.php?mode=learningDesign">Learning Design</a><br />
			  &bullet; <a href="design_tlp_functions.php?mode=primaryConnections">TfEL and primary connections </a><br />
			  &bullet; <a href="design_tlp_functions.php?mode=guidedExperiences">Guided experiences <br />&nbsp;&nbsp;presentation cycle</a><br />
			  &bullet; <a href="design_tlp_functions.php?mode=teachingCycle">ESL teaching cycle</a><br />
			  &bullet; <a href="design_tlp_functions.php?mode=learningArea">Working in the yellow learning area</a><br />
			  &bullet; <a href="design_tlp_functions.php?mode=learnerFeedback">Learner feedback </a></p>
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
			  <a href="resources_pack/want_more/6.pdf"><div id="want_more"></div></a>
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
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/learningDesign.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "primaryConnections") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/primaryConnections.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/primaryConnections.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "guidedExperiences") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/guidedExperiences.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/guidedExperiences.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "teachingCycle") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/teachingCycle.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/teachingCycle.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "learningArea") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/learningArea.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/learningArea.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "learnerFeedback") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/learnerFeedback.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/design_tlp/learnerFeedback.pdf">Download this resource</a></div>';
			  	}
			  ?>
</div>	
<br /><i>This application was designed for use on Apple iPad and computers running Google Chrome or Apple Safari – for a better experience please upgrade.</i>
</body>
</html>
