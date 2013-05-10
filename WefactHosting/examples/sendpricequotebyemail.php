<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Send pricequote
$pricequote_id 	= 1;
$pricequote	 	= $api->sendPriceQuoteByEmail('beveiligingscode', $pricequote_id);

print_r($pricequote);

// On success
	//	stdClass Object
	//	(
	//	    [Status] => success
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Count] => 1
	//	    [Result] => stdClass Object
	//	        (
	//	            [Value] => Succesvol verstuurd naar test@test.nl
	//	        )
	//	
	//	)
// On error, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => error
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Error] => Kon de offerte met ID 1 niet vinden
	//	)

?>