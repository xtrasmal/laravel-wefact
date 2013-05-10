<?php
require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Add new invoiceline
$invoice_id = 1;
// Example data for $newInvoiceLine
$newInvoiceLine = array(
						'Date'			=> date('Y-m-d'),
						'Number'		=> 100,
						'ProductCode'	=> '',
						'Description'	=> 'Versturen SMS bericht',
						'PriceExcl'		=> 0.10,
						'TaxPercentage'	=> 0.19
				);		
$invoice_info 	= $api->addInvoiceLine('beveiligingscode', $invoice_id, $newInvoiceLine);

echo "<pre>";
print_r($invoice_info);
// On success, result looks like getinvoice
		
// On error, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => error
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Error] => Er is geen omschrijving en geen product opgegeven.
	//	)
?>