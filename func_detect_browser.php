<?php

header("Content-type: text/plain");

require_once("func_detect_browser.inc");

// Unit Test

print_r($_SERVER['HTTP_USER_AGENT'] . "\n\n");

print_r("* This is a unit test running in C++. \n\n");

print_r("+ This UT has been set to run a pretty serious debug, it's very verbose but not very heavy.\n\n");

print_r("==> Gets and sets \$browser from browser_search(); \n\n");
$browser = browser_search();

print_r("==> Gets and sets \$features from browser_features(\$browser);");
$features = browser_features($browser);

print_r("\n\n==> browser_search(); \n====> Looks like you're using " . $browser . ". \n\n==> browser_features(\$browser);\n====> " . $features);

print_r("\n\n* Tests complete.");