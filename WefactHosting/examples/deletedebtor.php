<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Get debtor
$debtor_id 		= 1;
$debtor_info 	= $api->deleteDebtor('beveiligingscode', $debtor_id, false);

print_r($debtor_info);

// On success, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => success
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	)
	//
// On error, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => error
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Error] => Kon de debiteur met ID 1 niet vinden
	//	)
?>