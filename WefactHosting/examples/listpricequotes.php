<?php
/**
 * Example for listPriceQuotes API command
 * 
 * @author WeFact B.V.
 * @copyright 2012
 * @version 1.07
 */
require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// List invoices
$parameters		= array(
						"Sort" 		=> "PriceQuoteCode",
						"Order" 	=> "ASC",
						"Search" 	=> "",
						"Debtor"	=> "",
						"DebtorCode" => "",
						"Status"	=> "",  // You can select multiple states by using a | as glue-character (e.g 3|4 for all accepted pricequotes) 
						//"StartDate" => "2011-08-01",
						//"EndDate"   => "2011-08-31"
						);

$pricequote_list 	= $api->listPriceQuotes('beveiligingscode', $parameters);

print_r($pricequote_list);

// On success, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => success
	//	    [Time] => 2011-01-01 12:00:00
	//		[IP] => 12.34.56.789
	//	    [Count] => 2
	//	    [Filter] => stdClass Object
	//	        (
	//	            [Sort] => InvoiceCode
	//	            [Order] => ASC
	//	            [Search] => 
	//	        )
	//	
	//	    [Result] => stdClass Object
	//	        (
	//	            [PriceQuotes] => Array
	//	                (
	//						[0] => stdClass Object
	//	                        (
	//	                            [Identifier] => 1
	//	                            [PriceQuoteCode] => OF0001
	//	                            [Date] => 2011-01-01
	//	                            [Debtor] => 1
	//	                            [DebtorCode] => DB0001
	//	                            [AmountExcl] => 100.00
	//	                            [AmountIncl] => 119.00
	//	                            [CompanyName] => Bedrijf B.V.
	//	                            [Initials] => A.B.C. 
	//	                            [SurName] => de Vries
	//	                            [Status] => 2
	//	                        )
	//	
	//	                    [1] => stdClass Object
	//	                        (
	//	                            [Identifier] => 2
	//	                            [PriceQuoteCode] => OF0002
	//	                            [Date] => 2011-01-01
	//	                            [Debtor] => 2
	//	                            [DebtorCode] => DB0002
	//	                            [AmountExcl] => 200.00
	//	                            [AmountIncl] => 238.00
	//	                            [CompanyName] => Bedrijf B.V.
	//	                            [Initials] => A.B.C. 
	//	                            [SurName] => de Vries
	//	                            [Status] => 0
	//	                        )
	//	                )
	//	
	//	        )
	//	
	//	)
?>