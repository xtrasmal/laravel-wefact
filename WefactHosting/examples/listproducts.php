<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// List invoices
$parameters		= array(
						"Sort" 			=> "ProductCode",
						"Order" 		=> "DESC",
						"ProductCode"	=> "",
						"ProductType"	=> "",
						"Search"		=> ""
						);

$product_list 	= $api->listProducts('beveiligingscode', $parameters);

print_r($product_list);

// On success, result looks like
//stdClass Object
//	(
//	[Status] => success
//	[Time] => 2011-01-01 12:00:00
//	[IP] => 12.34.56.789
//	[Count] => 1
//	[Filter] => stdClass Object
//	    (
//	        [Sort] => ProductCode
//	        [Order] => DESC
//	        [Search] => 
//	        [ProductCode] => P001
//	        [ProductType] => 
//	    )
//	
//	[Result] => stdClass Object
//	    (
//	        [Products] => Array
//	            (
//	                [0] => stdClass Object
//	                    (
//	                        [Identifier] => 1
//	                        [ProductCode] => P001
//	                        [ProductName] => Hosting
//	                        [ProductKeyPhrase] => Standaard hosting
//	                        [ProductDescription] => 
//	                        [PriceExcl] => 120
//	                        [PricePeriod] => j
//	                        [TaxPercentage] => 0.19
//	                        [Cost] => 1
//	                        [Ordered] => 18
//	                        [Sold] => 19
//	                        [ProductType] => hosting
//	                        [ProductTld] => 
//	                    )
//	
//	            )
//	
//	    )
//
//	
	
	
?>