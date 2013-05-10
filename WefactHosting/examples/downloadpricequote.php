<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Get debtor
$pricequote_id 	= 1;
$pricequote	 	= $api->downloadPriceQuote('beveiligingscode', $pricequote_id);
$filename_pdf	= 'offerte.pdf';

if($pricequote->Status == 'success' && isset($pricequote->Result->PDF)){
	header("Cache-Control: public, must-revalidate");
	header("Pragma: hack");
	header('Content-Type: application/pdf');
	header('Content-Disposition: attachment; filename="'.$filename_pdf.'"');
	header("Content-Transfer-Encoding: binary");
	
	echo base64_decode($pricequote->Result->PDF);
	exit;
}else{
	print_r($pricequote);
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