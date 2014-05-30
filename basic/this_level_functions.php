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
<div id="map_3_screen_functions_container"> 
<div id="map_1_screen_container_left">
			  <strong>Learning Design Map</strong>
			  <p>&bullet; <a href="map.php?old_browser=1:800">Home</a></p>
			  <strong>Ways into this idea using TfEL</strong>
			  <p>&bullet; <a href="this_level_functions.php?mode=smoothSlope">Learning is more like a <br />&nbsp;&nbsp;wavy line than a smooth slope</a><br />
			  &bullet; <a href="this_level_functions.php?mode=pairsLook">What does learning in pairs look like?</a><br />
			  &bullet; <a href="this_level_functions.php?mode=rubrics">Assessment rubrics</a><br />
			  &bullet; <a href="this_level_functions.php?mode=expertInterviews">Expert interviews</a><br />
			  &bullet; <a href="this_level_functions.php?mode=bloomsTaxonomy">Bloom’s Taxonomy</a><br />
			  &bullet; <a href="this_level_functions.php?mode=starWork">5 star work</a></p>
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
			  <a href="resources_pack/want_more/3.pdf"><div id="want_more"></div></a></div>
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
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/this_level/rubrics.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "expertInterviews") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/this_level/guide42.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/this_level/guide42.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "bloomsTaxonomy") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/this_level/bloomstaxonomy.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/this_level/bloomstaxonomy.pdf">Download this resource</a></div>';
			  	}
			  	if ($_GET['mode'] == "starWork") {
			  	if($browser == "Mobile") { 
				  	echo '<div style="margin-left:550px;padding-top:350px;"><a href="http://www.learningdesign.sa.edu.au/resources_pack/this_level/5starwork.pdf"><img src="http://learningdesign.sa.edu.au/images/mobileSafariPatches/download@2x.gif" width="236px" height="41" /></a></div>';
				  	exit();
			  	}
				  	echo '<div id="iframe_container"><a href="http://www.learningdesign.sa.edu.au/resources_pack/this_level/5starwork.pdf">Download this resource</a></div>';
			  	}
			  ?>
			  <br /><i>This application was designed for use on Apple iPad and computers running Google Chrome or Apple Safari – for a better experience please upgrade.</i>

</div>
</body>
</html>
