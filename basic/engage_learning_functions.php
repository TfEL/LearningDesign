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
<div id="map_5_screen_functions_container"> 
<div id="map_1_screen_container_left">
			  <strong>Learning Design Map</strong>
			  <p>&bullet; <a href="map.php?old_browser=1:800">Home</a></p>
			  <strong>Ways into this idea using TfEL</strong>
			  <p>&bullet; <a href="engage_learning_functions.php?mode=engagingChallenging">Engaging, challenging and <br />&nbsp;&nbsp;supporting students' learning</a><br />
			  &bullet; <a href="engage_learning_functions.php?mode=conceptAttainment">Concept attainment</a><br />
			  &bullet; <a href="engage_learning_functions.php?mode=jigsawProcess">Jigsaw process</a><br />
			  &bullet; <a href="engage_learning_functions.php?mode=newMedia">Ten tips for teaching with new media</a><br />
			  &bullet; <a href="engage_learning_functions.php?mode=mindMap">Mind map</a><br />
			  &bullet; <a href="engage_learning_functions.php?mode=developingImagination">Developing imagination <br />&nbsp;&nbsp;in education</a></p>
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
			  <a href="resources_pack/want_more/5.pdf"><div id="want_more"></div></a></div>
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
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/conceptAttainment.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "jigsawProcess") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/jigsawProcess.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/jigsawProcess.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "newMedia") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/newMedia.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/newMedia.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "mindMap") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/mindMap.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/engage_learning/mindMap.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "developingImagination") {
			  		echo '<div id="map_1_video_container"><iframe width="640" height="360" src="http://www.youtube.com/embed/Isq1NglfhvA" frameborder="0" allowfullscreen></iframe></div>'; 
			  	}
			  ?>
<br /><i>This application was designed for use on Apple iPad and computers running Google Chrome or Apple Safari – for a better experience please upgrade.</i>
</div>
</body>
</html>
