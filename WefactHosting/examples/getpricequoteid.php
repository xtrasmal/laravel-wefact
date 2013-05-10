<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Get invoice
$pricequote_code 	= 'OF001';
$pricequote_info 	= $api->getPriceQuoteID('beveiligingscode', $pricequote_code);

print_r($pricequote_info);

// On success, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => success
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Count] => 1
	//	    [Result] => Array
	//	        (
	//	            [Value] => 1
	//	        )
	//	
	//	)

// On error, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => error
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Error] => Kon de offerte met offertenr OF0001 niet vinden
	//	)

?>