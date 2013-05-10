<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Change status pricequote
$pricequote_id 	= 1;
$result 		= $api->changePriceQuoteStatus('beveiligingscode', $pricequote_id, 'true', 'true');

// #1 'false' = decline, 'true' = accept
// #2 'false' = do not make invoice, 'true' = make invoice

print_r($result);

// On success, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => success
	//	    [Time] => 2011-06-21 11:52:25
	//	    [IP] => 12.34.56.789
	//	)

// On error, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => error
	//	    [Time] => 2011-06-21 11:47:32
	//	    [IP] => 12.34.56.789
	//	    [Error] => Offerte kan niet op onbetaald gezet worden: ongeldige huidige status.
	//	)