<?php
/**
 * Example for checkLoginDebtor API command
 * 
 * @author WeFact B.V.
 * @copyright 2012
 * @version 1.07
 */
require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Check debtor login credentials
$username 		= 'gebruikersnaam';
$password		= 'wachtwoord';
$debtor_info 	= $api->checkLoginDebtor('beveiligingscode', $username, $password);

print_r($debtor_info);

// On success, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => success
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Count] => 1
	//	    [Result] => stdClass Object
	//	        (
	//	            [Debtor] => stdClass Object
	//	                (
	//	                    [Identifier] => 1
	//	                    [DebtorCode] => DB0001
	//	                )
	//	
	//	        )
	//	)
	//
// On error, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => error
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Error] => Kon de debiteur niet vinden
	//	)
?>