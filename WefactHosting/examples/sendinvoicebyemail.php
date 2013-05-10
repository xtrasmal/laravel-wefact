<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Send invoice
$invoice_id 	= 1;
$invoice	 	= $api->sendInvoiceByEmail('beveiligingscode', $invoice_id);

print_r($invoice);

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
	//	    [Error] => Kon de factuur met ID 1 niet vinden
	//	)

?>