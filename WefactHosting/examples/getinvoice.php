<?php
/**
 * Example for getInvoice API command
 * 
 * @author WeFact B.V.
 * @copyright 2012
 * @version 1.07
 */
require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Get invoice
$invoice_id 	= 1;
$invoice_info 	= $api->getInvoice('beveiligingscode', $invoice_id);

print_r($invoice_info);

// On success, result looks like
	//	stdClass Object
	//	(
	//	    [Status] => success
	//	    [Time] => 2011-01-01 12:00:00
	//	    [IP] => 12.34.56.789
	//	    [Count] => 1
	//	    [Result] => stdClass Object
	//	        (
	//	            [Invoice] => stdClass Object
	//	                (
	//	                    [Identifier] => 1
	//	                    [Debtor] => 1
	//	                    [InvoiceCode] => F0001
	//	                    [Date] => 2011-01-01
	//	                    [Description] => Omschrijving factuur
	//	                    [Term] => 14
	//	                    [Discount] => 0
	//	                    [ReferenceNumber] => 
	//	                    [CompanyName] => 
	//	                    [Initials] => A.B.C.
	//	                    [SurName] => de Vries
	//	                    [Address] => Nieuwstraat 1
	//	                    [ZipCode] => 1111 AA
	//	                    [City] => Amsterdam
	//	                    [Country] => NL
	//	                    [EmailAddress] => info@wefact.nl
	//	                    [Authorisation] => Nee
	//	                    [InvoiceMethod] => 0
	//	                    [SentDate] => 0000-00-00 00:00:00
	//	                    [Sent] => 0
	//	                    [Reminders] => 0
	//	                    [RemiderDate] => 0000-00-00
	//	                    [Summations] => 0
	//	                    [SummationDate] => 0000-00-00
	//	                    [PaymentMethod] => wire
	//	                    [PaymentLink] => 
	//	                    [Paid] => 0
	//						[PayDate] => 0000-00-00
	//	                    [TransactionID] => 
	//	                    [Status] => 1
	//	                    [AmountExcl] => 100.00
	//	                    [AmountIncl] => 119.00
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
	//	    [Error] => Kon de factuur met ID 1 niet vinden
	//	)

?>