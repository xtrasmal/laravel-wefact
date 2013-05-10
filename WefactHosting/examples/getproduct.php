<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Get product
$product_id 	= 1;
$product_info 	= $api->getProduct('beveiligingscode', $product_id);

print_r($product_info);

// On success, result looks like
	//stdClass Object
	//(
	//    [Status] => success
	//    [Time] => 2011-01-01 12:00:00
	//    [IP] => 12.34.56.789
	//    [Count] => 1
	//    [Result] => stdClass Object
	//        (
	//            [Product] => stdClass Object
	//                (
	//                    [Identifier] => 1
	//                    [ProductCode] => P001
	//                    [ProductName] => Hosting
	//                    [ProductKeyPhrase] => Standaard hosting
	//                    [ProductDescription] => 
	//                    [PriceExcl] => 120
	//                    [PricePeriod] => j
	//                    [TaxPercentage] => 0.19
	//                    [Cost] => 1
	//                    [Ordered] => 18
	//                    [Sold] => 19
	//                    [ProductType] => hosting
	//                    [ProductTld] => 
	//                )
	//
	//        )
	//
	//)

// On error, result looks like
	//stdClass Object
	//(
	//    [Status] => error
	//    [Time] => 2011-01-01 12:00:00
	//    [IP] => 12.34.56.789
	//    [Error] => Kon het product met ID 1 niet vinden
	//)

?>