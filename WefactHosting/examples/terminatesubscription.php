<?php
require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

$subscription_id	= 1;
$termination_date	= '2012-01-01'; // Do not invoice after this date
$agenda_item		= true;
$subscription_info 	= $api->terminateSubscription('beveiligingscode', $subscription_id, $termination_date, $agenda_item);

print_r($subscription_info);

// On success, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => success
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
    //		[Result] => stdClass Object
	//    	(
	//    	    [Value] => U dient eventuele domeinnamen of hostingaccounts nog handmatig te verwijderen.
	//    	)
	//	)


// On error, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => error
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Error] => Ongeldig kenmerk voor abonnement meegegeven.
	//	)
?>