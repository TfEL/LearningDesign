<!doctype html>
<html>
<head>
<base target="_parent">
<meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script src="/js/jquery.stayInWebApp.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>


<script type "text/javascript">

  $(document).ready(function() {
      $(function() {
          $.stayInWebApp('a.stay');
      });
  });
  
  $(function() {
    $.stayInWebApp();
  });
  
  $(document).bind('touchmove', false);

  

  
  
  function stopScrolling( touchEvent ) { touchEvent.preventDefault(); }
  document.addEventListener( 'touchstart' , stopScrolling , false );
  document.addEventListener( 'touchmove' , stopScrolling , false );


         function calcHeight()
         {
         //find the height of the internal page
         var the_height=
         document.getElementById('iframe').contentWindow.
         document.body.scrollHeight;

         //change the height of the iframe
         document.getElementById('iframe').height= the_height;
         }



var w = $(window).width();
var h = $(window).height();

alert('Attempting to conform for ' + w + 'x' + h + '.');


$(document).ready(function() {
	getElementById('iframe').height = $(window).height();
	getElementById('iframe').width = $(window).width();
} );

</script>
  
<style type="text/css">
<!--
html, body { height: }
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background: #7e7e7e;
}

@media (min-width:500px) {
/* Nexus 7 (or 7" tablets) */
iframe { 
  overflow: hidden;
  -moz-transform: scale(0.60, 0.60); 
  -webkit-transform: scale(0.60, 0.60); 
  -o-transform: scale(0.60, 0.60);
  -ms-transform: scale(0.60, 0.60);
  transform: scale(0.60, 0.60); 
  -moz-transform-origin: top left;
  -webkit-transform-origin: top left;
  -o-transform-origin: top left;
  -ms-transform-origin: top left;
  transform-origin: top left;
}
}

@media (min-width:801px) {
/* Nexus 10 (or 10" tablets) */
iframe { 
  overflow: hidden;
  -moz-transform: scale(1.0, 1.0); 
  -webkit-transform: scale(1.0, 1.0); 
  -o-transform: scale(1.0, 1.0);
  -ms-transform: scale(1.0, 1.0);
  transform: scale(1.0, 1.0); 
  -moz-transform-origin: top left;
  -webkit-transform-origin: top left;
  -o-transform-origin: top left;
  -ms-transform-origin: top left;
  transform-origin: top left; 
}
}

/* if you're using a desktop on android?? */
@media (min-width:1024px) {
 iframe { 
  overflow: hidden;  
} }


@media (min-width:1225px) {
 iframe { 
  overflow: hidden;
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
  -webkit-transform-origin: 0 0; 
  -moz-transform: scale(1.2); 
  -moz-transform-origin: 0 0; 
  -o-transform: scale(1.2); 
  -o-transform-origin: 0 0; 
  -ms-transform: scale(1.2); 
  -ms-transform-origin: 0 0;
  
} }

-->
</style>
</head>
<body style="margin:0px;padding:0px;overflow:hidden">

	<iframe name="ipad" src="/splash.php" width="1024px" height="768px" scrolling="no" frameborder="0"> </iframe>

</body>
</html>