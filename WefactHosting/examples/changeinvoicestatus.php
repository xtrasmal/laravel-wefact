<?php
/**
 * Example for changeInvoiceStatus API command
 * 
 * @author WeFact B.V.
 * @copyright 2012
 * @version 1.07
 */
require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Change status invoice
$invoice_id = 1;
$date 		= date('Y-m-d');
$result 	= $api->changeInvoiceStatus('beveiligingscode',$invoice_id, 'true', $date); // 'false' = not paid, 'true' = paid

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
	//	    [Error] => Factuur kan niet op onbetaald gezet worden: ongeldige huidige status.
	//	)