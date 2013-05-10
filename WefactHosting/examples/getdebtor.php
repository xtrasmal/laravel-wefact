<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Get debtor
$debtor_id 		= 1;
$debtor_info 	= $api->getDebtor('beveiligingscode', $debtor_id);

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
	//	                    [CompanyName] => Bedrijf B.V.
	//	                    [CompanyNumber] => 12345678
	//	                    [TaxNumber] => NL172073480B01
	//	                    [LegalForm] => Besloten Vennootschap
	//	                    [Sex] => m
	//	                    [Initials] => A.B.C.
	//	                    [SurName] => de Vries
	//	                    [Address] => Nieuwstraat 1
	//	                    [ZipCode] => 1111 AA
	//	                    [City] => Amsterdam
	//	                    [Country] => NL
	//	                    [CountryLong] => Nederland
	//	                    [EmailAddress] => info@wefact.nl
	//	                    [SecondEmailAddress] => 
	//	                    [PhoneNumber] => 
	//	                    [FaxNumber] => 
	//	                    [Comment] => 
	//	                    [InvoiceMethod] => Per post
	//	                    [InvoiceInitials] => 
	//	                    [InvoiceSurName] => 
	//	                    [InvoiceAddress] => 
	//	                    [InvoiceZipCode] => 
	//	                    [InvoiceCity] => 
	//	                    [InvoiceCountry] => NL
	//	                    [InvoiceCountryLong] => Nederland
	//	                    [InvoiceEmailAddress] => 
	//	                    [InvoiceAuthorisation] => Ja
	//	                    [AccountNumber] => 123.456.78.90
	//	                    [AccountIban] => 
	//	                    [AccountSwift] => 
	//	                    [AccountName] => A de Vries
	//	                    [AccountBank] => Regionale bank
	//	                    [AccountCity] => Amsterdam
	//						[Mailing] => yes
	//						[Taxable] => auto
	//						[Username] => mdevries
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
	//	    [Error] => Kon de debiteur met ID 1 niet vinden
	//	)
?>