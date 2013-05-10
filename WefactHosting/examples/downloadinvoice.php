<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Get debtor
$invoice_id 	= 1;
$invoice	 	= $api->downloadInvoice('beveiligingscode', $invoice_id);
$filename_pdf	= 'factuur.pdf';

if($invoice->Status == 'success' && isset($invoice->Result->PDF)){
	header("Cache-Control: public, must-revalidate");
	header("Pragma: hack");
	header('Content-Type: application/pdf');
	header('Content-Disposition: attachment; filename="'.$filename_pdf.'"');
	header("Content-Transfer-Encoding: binary");
	
	echo base64_decode($invoice->Result->PDF);
	exit;
}else{
	print_r($invoice);
}

// On success, result will be a downloadable PDF file

// On error, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => error
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Error] => Kon de factuur met ID 1 niet vinden
	//	)

?>