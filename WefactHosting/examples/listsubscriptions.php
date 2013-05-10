<?php
/**
 * Example for listSubscriptions API command
 * 
 * @author WeFact B.V.
 * @copyright 2012
 * @version 1.07
 */
require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// List subscriptions
$parameters		= array(
						"Sort" 			=> "NextDate",
						"Order" 		=> "ASC",
						"Search" 		=> "",
						"Debtor"		=> ""
						);
$subscription_list 	= $api->listSubscriptions('beveiligingscode', $parameters);

print_r($subscription_list);

// On success, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => success
	//	    [Time] => 2011-01-01 12:00:00
	//		[IP] => 12.34.56.789
	//	    [Count] => 2
	//    	[Filter] => stdClass Object
	//        (
	//            [Sort] => NextDate
	//            [Order] => ASC
	//            [Search] => 
	//            [Debtor] => 
	//        )
	//    	[Result] => stdClass Object
	//        (
	//            [Subscriptions] => Array
	//                (
	//                    [0] => stdClass Object
	//                        (
	//                            [Identifier] => 1
	//                            [Debtor] => 1
	//                            [ProductCode] => DOM_NL
	//                            [Description] => wefact.nl
	//                            [StartPeriod] => 16-02-2012
	//                            [EndPeriod] => 16-02-2013
	//                            [Periods] => 1
	//                            [Periodic] => j
	//                            [NextDate] => 01-02-2012
	//                            [PriceExcl] => 5.72
	//                            [TaxPercentage] => 0.19
	//                            [Number] => 1
	//                            [TerminationDate] => 
	//                        )
	//
	//                )
	//
	//        )
	//
	//	)

?>