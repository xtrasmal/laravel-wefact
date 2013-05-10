<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// List debtors
$parameters		= array(
						"Sort" 		=> "DebtorCode",
						"Order" 	=> "DESC",
						"Search" 	=> ""
						);
$debtor_list 	= $api->listDebtors('beveiligingscode', $parameters);

print_r($debtor_list);

// On success, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => success
	//	    [Time] => 2011-01-01 12:00:00
	//		[IP] => 12.34.56.789
	//	    [Count] => 2
	//	    [Filter] => stdClass Object
	//	        (
	//	            [Sort] => DebtorCode
	//	            [Order] => ASC
	//	            [Search] => DB101
	//	        )
	//	
	//	    [Result] => stdClass Object
	//	        (
	//	            [Debtors] => Array
	//	                (
	//	                    [0] => stdClass Object
	//	                        (
	//	                            [Identifier] => 1010
	//	                            [DebtorCode] => DB1010
	//	                            [CompanyName] => Schilders & zoon
	//	                            [Sex] => m
	//	                            [Initials] => A.B.C.
	//	                            [SurName] => de Vries
	//	                            [EmailAddress] => info@wefacttest.nl
	//	                        )
	//	
	//	                    [1] => stdClass Object
	//	                        (
	//	                            [Identifier] => 1011
	//	                            [DebtorCode] => DB1011
	//	                            [CompanyName] => WeFact B.V.
	//	                            [Sex] => m
	//	                            [Initials] => Jeroen
	//	                            [SurName] => Blox
	//	                            [EmailAddress] => j.blox@wefact.nl
	//	                        )
	//	                )
	//	
	//	        )
	//	
	//	)
?>