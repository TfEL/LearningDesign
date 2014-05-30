<?php

echo <<< EOF
<!-- HEAD -->
<!-- © 2013 Beaconsfield IT, all rights reserved. Created for Department for Education and Child Development. -->

<meta charset="UTF-8">
<title>Using TfEL for Learning Design</title>
<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; user-scalable=no; width=device-width">
<link href="css/master.css" rel="stylesheet" type="text/css">
<link href="css/jquery.mobile-1.3.1.min.css" rel="stylesheet" type="text/css">


<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
<script src="/js/jquery.stayInWebApp.min.js"></script>

<script type="application/javascript" src="/js/iscroll.js"></script>
<script type="text/javascript">
var myScroll;
function loaded() {
	setTimeout(function () {
		myScroll = new iScroll('wrapper');
	}, 100);
}
window.addEventListener('load', loaded, false);
</script>


<!-- Fix iPad leaving WebApp -->
<base target="_parent">

<!-- Get anonymous some statistics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3926180-8', 'learningdesign.sa.edu.au');
  ga('send', 'pageview');

</script>

<!-- Attempt to fix old browsers bugs -->
<script type "text/javascript" src="/ie8_fixes/modernizr.custom.33632.js"></script>
<script type "text/javascript" src="/js/jquery-1.9.1.js"></script>

<!-- END HEAD -->

EOF;

?>