<!doctype html>
<html>
<head>
<base target="_parent">
<meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script src="/js/jquery.stayInWebApp.min.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

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

</script>
  
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background: #7e7e7e;
}
iframe { 
	overflow: hidden;
}
-->
</style>
</head>
<body>
<iframe name="ipad" src="/splash.php" width="1024px" height="768px" scrolling="no" frameborder="0"> </iframe>
</body>
</html>