<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<!-- Developed by Beaconsfield IT for Department for Education and Child Development South Australia -->
<!-- © 2013 Department for Education and Child Development, All Rights Reserved -->
<title>Using TfEL for Learning Design</title>

<!-- Setup for Apple Devices -->
<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; user-scalable=no; width=device-width">
<meta name="apple-itunes-app" content="app-id=805859202" />

<!-- Styles for launcher -->
<link href="/css/style_master.css" rel="stylesheet" type="text/css" />

<!-- Styles for Progress -->
<link href="css/progress_bar.css" media="screen" rel="stylesheet" type="text/css" />

<!-- Keyboard Shortcuts -->
<script type="text/javascript" src="/js/keyboard.js" charset="utf-8"></script>

<!-- JQuery Min -->
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<!-- Get some anonymous statistics from Desktop users (GA Installed in App Frames) -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3926180-8', 'learningdesign.sa.edu.au');
  ga('send', 'pageview');

</script>

<!-- JQuery Local Settings -->
<script type="text/javascript"> 
$(document).ready(function(){
    $("#app").hide();
});

KeyboardJS.on('ctrl + slash', function() {
    window.location.assign("https://learningdesign.sa.edu.au/about.php");
}, function() {
});

</script>
</head>

<body>
<div style="display:none;"><iframe src="https://learningdesign.sa.edu.au/api/0/reports/appstats/live/?initiateNewConnectionAsSocket=Browser"></iframe></div>
<!-- Internet Explorer, Firefox and Other Browser detection -->
<?php $IE6 = (ereg('MSIE 6',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
    $IE7 = (ereg('MSIE 7',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
    $IE8 = (ereg('MSIE 8',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
    $IE9 = (ereg('MSIE 9',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
    $IE10 = (ereg('MSIE 10',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
    $FX = (ereg('Firefox',$_SERVER['HTTP_USER_AGENT'])) ? true : false;

if (($IE6 == 1) || ($IE7 == 1) || ($IE8 == 1) || ($FX == 1) || ($IE9 == 1) || ($IE10 == 1)) {
 // Do fallback stuff that old browsers can do here
   echo "<meta http-equiv='refresh' content='0;URL=\"https://learningdesign.sa.edu.au/ie8.php\"'>";

} else { ?>
<!-- Detection for iPad/Android Browsers and the main window -->

<div class="container"></div>
<?php printf($_SERVER["X-FORWARDED-PROTO"]); ?>
<h1 id="header">Using TfEL for Learning Design</h1>

<?php 
	if(strstr($_SERVER['HTTP_USER_AGENT'],'Android')) { echo <<<EOF
<meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=0;"/>
<meta name="viewport" content="width=device-width, target-densityDpi=medium-dpi"/> 
<script type='text/javascript'>
document.location.href = 'android_frame.php';
</script>
EOF;
die();
} ?>

<?php 
	if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { 
	echo "<br /><center><a href='https://itunes.apple.com/au/app/tfel-for-learning-design/id805859202?mt=8'><img src='/downloadOnTheAppStore270-80@2x.png' width='270px' /></a></center>";	
	}
	else { ?>
			<p><h1><span><div class="button" id="button"><a onclick="location.href='https://itunes.apple.com/au/app/tfel-for-learning-design/id805859202?mt=8'">AppStore</a> <a onclick="toggle();">Online</a></div></h1></span></p> 
			
			<div id="app" style="display:; margin-left:auto; margin-right:auto; text-align: center; color: #ccc; font-size: 13px;">
			
			<iframe src="ipad_frame.php" id="framecontent" width="1024" height="768px" scrolling="no" frameborder="0"></iframe> <br /> 
			
			<p style='color:#949494;'>Want More: <a href="https://learningdesign.sa.edu.au/resources_pack/want_more/0.pdf">Guide</a> | <a href="https://itunes.apple.com/au/app/tfel-for-learning-design/id805859202?mt=8">Download on the AppStore</a></p></div>
			
			
		<?php }
?>
<?php } ?>

<?php $inprogress = false; if($inprogress == true) {?>
<!-- Switch for maintenance -->
	Maintenance Message.
<?php } ?>

<script>

  var toggle = function() {
  var mydiv = document.getElementById('app');
  var buttondiv = document.getElementById('button');
  var headerdiv = document.getElementById('header');
  if (mydiv.style.display === 'block' || mydiv.style.display === '')
    mydiv.style.display = 'none';
  else

  			buttondiv.style.display = 'none'
    	    headerdiv.style.display = 'none'   
    	    $("#app").fadeIn();

};

KeyboardJS.on('enter', function() {
    toggle();
}, function() {
});

</script>
</body>
</html>


