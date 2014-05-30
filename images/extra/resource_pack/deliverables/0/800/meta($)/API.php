<?php 

	header("Content-Type: text/plain");
	
?>

. log - Access from HTTP client detected. Running readme.

=============================================================================
	LEARNINGDESIGN META API FOR THE TFEL FOR LEARNING DESIGN APP 
=============================================================================

This API supports meta queries for new content (when updated) and handles
data download URI's sent back to the client as absoute URI.

This API was designed for internal use for the LD app, if you're seeing
large traffic hits to this address thats because someone on your net is
using the TfEL LD app on their iOS device.

The website its self doesn't use the API, it just hits the SQL directly.

Supported queries: 

	--> compare(version('$resource_local', '$resource_remote'), flags('$new', '$replace'))
		===> returns (ex.) (local#, remote#, new_URI, NeedsReplaceBOOL) 
	--> get(version('$resource_remote'), flags('update/replace/download/new'))
		===> returns (ex.) (remote#, uri)
	
	
. log - Initialised, wait.
. log - Nothing left to do.