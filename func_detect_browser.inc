<?php

// This is a function to detect the browser, it doesn't require input and it returns a 'text' string.

function browser_search() {

	$browser = $_SERVER['HTTP_USER_AGENT'];
	
    $IEO = (ereg('MSIE',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
    $FFX = (ereg('Firefox',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
    $OPE = (ereg('Opera',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
    $MOB = (ereg('Mobile', $_SERVER['HTTP_USER_AGENT'])) ? true : false;
    $WEB = (ereg('AppleWebKit', $_SERVER['HTTP_USER_AGENT'])) ? true : false;
	
	if($MOB == true) {
		// Mobile Safari tends to have some issues being detected, so we throw them as soon as we find them.
		$browser = 'Mobile';
		return $browser;
		exit();
	}
	
	if($IEO == true) {
		$browser = 'Trident';
	} elseif($FFX == true) {
		$browser = 'Gecko';
	} elseif($OPE == true) {
		$browser = 'Presto';
	} elseif($WEB == true) {
		$browser = 'WebKit';
	} else {
		$browser = 'Not Recognised';
	}
	
	return $browser;
}

// This is a function to tell the user the browser features, it's not actually used. It requires a browser input and returns a 'text' string.	

function browser_features($browser) {
	switch($browser) {
		case "WebKit":
				$browser = "WebKit supports all features of this website.";
			return $browser;
		break;
		case "Presto":
				$browser = "Presto supports minimal features of this website.";
			return $browser;
		break;
		case "Gecko":
				$browser = "Gecko supports some features of this website.";
			return $browser;
		break;
		case "Mobile":
				$browser = "Mobile supports some features of this website.";
			return $browser;
		break;
		case "Trident":
				$browser = "Trident supports no features of this website.";
			return $browser;
		break;
	}
}

?>