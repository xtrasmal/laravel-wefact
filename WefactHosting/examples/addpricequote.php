<?php

require_once "../api_demo.php";

// Start API
$api = new WeFactAPI();

// Add new pricequote

// Example data for $newPriceQuote
$newPriceQuote = array(
					'PriceQuoteCode'	=> 'OF8991',  // needed when status is not 0
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
					'PriceQuoteMethod'	=> 1,  // 0,1,3 (resp e-mail, post, e-mail & post)
					'Authorisation'		=> 'no',
					'Status'			=> '2',  // 0 = concept, 1 = pending, 2 = sent, 3 = accepted, 4 = invoice created, 8 = not accepted
					'Description'		=> 'Omschrijving offerte',
					'PriceQuoteLines'	=> array(
						 // PriceQuote line where product data must be used
						array(
							'Number'		=> 1,
							'ProductCode'	=> 'P001',
						),
						 // Custom pricequote line
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
	
$pricequote_info 	= $api->addPriceQuote('beveiligingscode', $newPriceQuote);

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
	//                (
	//					  [Identifier] => 1
	//                    [Debtor] => 1
	//                    [DebtorCode] => DB0001
	//                    [PriceQuoteCode] => OF8991
	//                    [Date] => 2011-02-01
	//                    [Description] => Omschrijving offerte
	//                    [Term] => 14
	//                    [Discount] => 0
	//                    [CompanyName] => WeFact B.V.
	//                    [Initials] => ABC
	//                    [SurName] => de Vries
	//                    [Address] => Nieuwstraat 1
	//                    [ZipCode] => 1111 AA
	//                    [City] => Amsterdam
	//                    [Country] => NL
	//                    [EmailAddress] => info@wefact.nl
	//                    [Authorisation] => no
	//                    [PriceQuoteMethod] => 1
	//                    [Status] => 2
	//                    [PriceQuoteLines] => Array
	//                        (
	//                            [0] => stdClass Object
	//                                (
	//                                    [Identifier] => 62
	//                                    [Date] => 2011-09-12
	//                                    [Number] => 1
	//                                    [ProductCode] => P001
	//                                    [Description] => Standaard hosting
	//                                    [PriceExcl] => 120
	//                                    [TaxPercentage] => 0.19
	//                                    [Periods] => 1
	//                                    [Periodic] => j
	//                                )
	//
	//                            [1] => stdClass Object
	//                                (
	//                                    [Identifier] => 63
	//                                    [Date] => 2011-02-01
	//                                    [Number] => 1
	//                                    [ProductCode] => 
	//                                    [Description] => Maatwerk website
	//                                    [PriceExcl] => 450
	//                                    [TaxPercentage] => 0.19
	//                                    [Periods] => 1
	//                                    [Periodic] => 
	//                                )
	//
	//                        )
	//
	//                )
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
	//	    [Error] => Fout bij het toevoegen van offerteregel 1: Geen of ongeldige debiteur gevonden.
	//	)
?>