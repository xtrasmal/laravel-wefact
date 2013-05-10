<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Get debtor
$debtor_code	= 'DB0001';
$debtor_info 	= $api->getDebtorID('beveiligingscode', $debtor_code);

print_r($debtor_info);

// On success, result looks like
	//	
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
	//	    [Error] => Kon de debiteur met debiteurnummer DB0001 niet vinden
	//	)

?>