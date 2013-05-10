<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Edit a debtor
$debtor_id = 110;

// Example data for $editDebtor, only pass elements to change
$editDebtor = array(
				'DebtorCode'			=> 'DB9088',
				'CompanyName'			=> 'WeFact B.V.', 
			    'CompanyNumber'			=> '123456789', 
			    'TaxNumber'				=> 'NL123456789', 
			    'LegalForm'				=> 'BV',  //see documentation
			    'Sex'					=> 'm',  //'m' for male or 'v' for female
			    'Initials'				=> 'ABC', 
				'SurName'				=> 'de Vries',
			    'Address'				=> 'Nieuwstraat 1',
			    'ZipCode'				=> '1111 AA',
			    'City'					=> 'Amsterdam',
			    'Country'				=> 'nl',  //see documentation
			    'EmailAddress'			=> 'info@wefact.nl',
			    'SecondEmailAddress'	=> '',
			    'PhoneNumber'			=> '010-1111111',
			    'FaxNumber'				=> '010-2222222',
			    'Comment'				=> '',
			    'InvoiceMethod'			=> 0,  //0,1,3 (resp e-mail, post, e-mail & post)
			    'InvoiceInitials'		=> 'ABC',
			    'InvoiceSurName'		=> 'de Vries',
			    'InvoiceAddress'		=> 'Nieuwstraat 1',
			    'InvoiceZipCode'		=> '1111 AA',
			    'InvoiceCity'			=> 'Amsterdam',
			    'InvoiceCountry'		=> 'NL',
			    'InvoiceEmailAddress'	=> 'info@wefact.nl', // valid emailaddress
			    'InvoiceAuthorisation'	=> 'yes', // no or yes
			    'AccountNumber'			=> '123456789',
			    'AccountIban'			=> '123456789',
			    'AccountSwift'			=> '123456789',
			    'AccountName'			=> 'ABC de Vries',
			    'AccountBank'			=> 'Regionale bank',
			    'AccountCity'			=> 'Amsterdam'
		      
			);
$debtor_info 	= $api->editDebtor('beveiligingscode', $debtor_id, $editDebtor);

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
	//	                    [CompanyName] => WeFact B.V.
	//	                    [CompanyNumber] => 123456789
	//	                    [TaxNumber] => NL123456789
	//	                    [LegalForm] => BV
	//	                    [Sex] => m
	//	                    [Initials] => ABC
	//	                    [SurName] => de Vries
	//	                    [Address] => Nieuwstraat 1
	//	                    [ZipCode] => 1111 AA
	//	                    [City] => Amsterdam
	//	                    [Country] => NL
	//	                    [EmailAddress] => info@wefact.nl
	//	                    [SecondEmailAddress] => 
	//	                    [PhoneNumber] => 010-1111111
	//	                    [FaxNumber] => 010-2222222
	//	                    [Comment] => 
	//	                    [InvoiceMethod] => 0
	//	                    [InvoiceInitials] => ABC
	//	                    [InvoiceSurName] => de Vries
	//	                    [InvoiceAddress] => Nieuwstraat 1
	//	                    [InvoiceZipCode] => 1111 AA
	//	                    [InvoiceCity] => Amsterdam
	//	                    [InvoiceCountry] => NL
	//	                    [InvoiceEmailAddress] => info@wefact.nl
	//	                    [InvoiceAuthorisation] => no
	//	                    [AccountNumber] => 123456789
	//	                    [AccountIban] => 123456789
	//	                    [AccountSwift] => 123456789
	//	                    [AccountName] => ABC de Vries
	//	                    [AccountBank] => Regionale bank
	//	                    [AccountCity] => Amsterdam
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
	//	    [Error] => Ongeldige waarde voor rechtsvorm: verkeerde_waarde
	//	)
?>