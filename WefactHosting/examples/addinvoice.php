<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Add new invoice

// Example data for $newInvoice
$newInvoice = array(
					'InvoiceCode'		=> 'WF001',  
					'Debtor'			=> '',  // debtor identifier or debtor code is mandatory
					'DebtorCode'		=> 'DB0001',  // debtor identifier or debtor code is mandatory
					'Date'				=> '2011-02-01',
					'Term'				=> 14,
					'CompanyName'		=> 'WeFact B.V.',
					'Initials'			=> 'ABC',
					'SurName'			=> 'de Vries',
					'Address'			=> 'Nieuwstraat 1',
					'ZipCode'			=> '1111 AA',
					'City'				=> 'Amsterdam',
					'Country'			=> 'NL',
					'EmailAddress'		=> 'info@wefact.nl',
					'InvoiceMethod'		=> 1,  // 0,1,3 (resp e-mail, post, e-mail & post)
					'Authorisation'		=> 'no',
					'Status'			=> '2',  // 0 = concept, 1 = waiting , 2 = sent, 3 = partly paid, 4 = paid, 8 = creditinvoice, 9 = canceled invoice
					'InvoiceLines'		=> array(
						 // Invoice line where product data must be used
						array(
							'Number'		=> 1,
							'ProductCode'	=> 'P0001',
						),
						 // Custom invoice line
						array(
							'Date'			=> '2011-02-01',
							'Number'		=> 1,
							'ProductCode'	=> '',
							'Description'	=> 'Maatwerk website',
							'PriceExcl'		=> 450,
							'TaxPercentage'	=> 0.19
						)
					)
				);		
$invoice_info 	= $api->addInvoice('beveiligingscode', $newInvoice);

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
	//						[Identifier] => 1
	//	                    [Debtor] => 1
	//	                    [DebtorCode] => DB0001
	//	                    [InvoiceCode] => WF001
	//	                    [Date] => 2011-02-01
	//	                    [Term] => 14
	//	                    [Discount] => 0
	//	                    [CompanyName] => WeFact B.V.
	//	                    [Initials] => ABC
	//	                    [Address] => Nieuwstraat 1
	//	                    [ZipCode] => 1111 AA
	//	                    [City] => Amsterdam
	//	                    [Country] => NL
	//	                    [EmailAddress] => info@wefact.nl
	//	                    [Authorisation] => no
	//	                    [InvoiceMethod] => 1
	//	                    [Status] => 2
	//	                    [InvoiceLines] => Array
	//	                        (
	//	                            [0] => stdClass Object
	//	                                (
	//	                                    [Identifier] => 1
	//	                                    [Date] => 2011-01-18
	//	                                    [Number] => 1
	//	                                    [ProductCode] => P0001
	//	                                    [Description] => testproduct 1
	//	                                    [PriceExcl] => 30
	//	                                    [TaxPercentage] => 0.19
	//	                                    [Periods] => 1
	//	                                    [Periodic] => m
	//	                                    [PeriodicID] => 1
	//	                                )
	//	
	//	                            [1] => stdClass Object
	//	                                (
	//	                                    [Identifier] => 2
	//	                                    [Date] => 2011-02-01
	//	                                    [Number] => 1
	//	                                    [ProductCode] => 
	//	                                    [Description] => Maatwerk website
	//	                                    [PriceExcl] => 450
	//	                                    [TaxPercentage] => 0.19
	//	                                    [Periods] => 1
	//	                                    [Periodic] => 
	//	                                )
	//	
	//	                        )
	//	
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
	//	    [Error] => Fout bij het toevoegen van factuurregel 1: Geen of ongeldige debiteur gevonden.
	//	)
?>