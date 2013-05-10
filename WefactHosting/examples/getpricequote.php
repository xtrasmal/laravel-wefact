<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Get invoice
$pricequote_id 		= 1;
$pricequote_info 	= $api->getPriceQuote('beveiligingscode', $pricequote_id);

print_r($pricequote_info);

// On success, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => success
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Count] => 1
	//	    [Result] => stdClass Object
	//	        (
	//	            [PriceQuote] => stdClass Object
	//	                (
	//	                    [Identifier] => 1
	//	                    [Debtor] => 1
	//	                    [PriceQuoteCode] => OF0004
	//	                    [Date] => 2011-01-01
	//	                    [Description] => Omschrijving offerte
	//	                    [Term] => 14
	//	                    [Discount] => 0
	//	                    [CompanyName] => 
	//	                    [Initials] => A.B.C.
	//	                    [SurName] => de Vries
	//	                    [Address] => Nieuwstraat 1
	//	                    [ZipCode] => 1111 AA
	//	                    [City] => Amsterdam
	//	                    [Country] => NL
	//	                    [EmailAddress] => info@wefact.nl
	//	                    [Authorisation] => Nee
	//	                    [PriceQuoteMethod] => 0
	//	                    [SentDate] => 0000-00-00 00:00:00
	//	                    [Sent] => 0
	//	                    [Status] => 1
	//	                    [PriceQuoteLines] => Array
	//                        (
	//                            [0] => stdClass Object
	//                                (
	//                                    [Debtor] => 1
	//                                    [PriceQuoteCode] => OF0004
	//                                    [Date] => 15-08-2011
	//                                    [Number] => 1
	//                                    [ProductCode] => DOM_AG
	//                                    [Description] => ag domeinnaam
	//                                    [PriceExcl] => 110.5
	//                                    [TaxPercentage] => 0.19
	//                                    [Periods] => 1
	//                                    [Periodic] => j
	//                                    [PeriodicID] => 0
	//                                    [StartPeriod] => 15-08-2011
	//                                    [EndPeriod] => 15-08-2012
	//                                )
	//                        )
	//	                )
	//	
	//	        )
	//	
	//	)

// On error, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => error
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Error] => Kon de offerte met ID 1 niet vinden
	//	)

?>