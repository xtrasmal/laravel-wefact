<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Add new subscription

// Example data for $newSubscription
$newSubscription = array(
						'Debtor' 			=> 1,
						'ProductCode' 		=> 'P0001',
						'Description' 		=> 'Service abonnement',
						'StartPeriod' 		=> '2011-02-01',
						'NextDate' 			=> '2011-01-15', 
						'Periods' 			=> 1,
						'Periodic' 			=> 'j',
						'PriceExcl' 		=> 37.50,
						'TaxPercentage' 	=> 0.19,
						'Number' 			=> 1,
						'TerminationDate' 	=> ''
					);
$subscription_info 	= $api->addSubscription('beveiligingscode', $newSubscription);

print_r($subscription_info);

// On success, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => success
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Count] => 1
	//	    [Result] => stdClass Object
	//	        (
	//	            [Subscription] => stdClass Object
	//	                (
	//						[Identifier] => 1
	//	                    [Debtor] => 1
	//	                    [ProductCode] => P0001
	//	                    [Description] => Service abonnement
	//	                    [StartPeriod] => 2011-02-01
	//	                    [EndPeriod] => 2012-02-01
	//	                    [Periods] => 1
	//	                    [Periodic] => j
	//	                    [NextDate] => 2011-01-15
	//	                    [PriceExcl] => 37.50
	//	                    [TaxPercentage] => 0.19
	//	                    [Number] => 1
	//	                    [TerminationDate] => 
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
	//	    [Error] => Ongeldig kenmerk voor debiteur meegegeven.
	//	)
?>