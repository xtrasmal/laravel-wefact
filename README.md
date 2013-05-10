Laravel WeFact Hosting API
==============

Wefact is a company which offers you a billing system. There are two WeFact packages, Wefact Hosting and WeFact Basic. 
WeFact Hosting gives you the option to manage all you hosting billing. It can be connected to DirectAdmin and 
automates the billing process. 

This Bundle allows you to connect to the Wefact Hosting API and let you manage invoices, create new ones etc. Also 
allows you to create new customers.  Just think of the possibilities when building a CMS for a hosting company. 

WeFact is currently only availlable for Dutch customers, but in the Q2 of 2013 they are planning to release to 
English speaking countries. 

Self-explanatory functionality by functionname
============

Here are some of the many things you can do. Please check the examples folder for more info and samples.

Debitors
- getDebtorID
- getDebtor
- listDebtors
- addDebtor
- editDebtor
- deleteDebtor
- checkLoginDebtor
 
Products
- getProduct
- listProducts

Invoices
- getInvoiceID
- getInvoice
- listInvoices
- addInvoice
- addInvoiceLine
- changeInvoiceStatus
- downloadInvoice
- sendInvoiceByEmail

Estimates/Quotes
- getPriceQuoteID
- getPriceQuote
- listPriceQuotes
- addPriceQuote
- changePriceQuoteStatus
- downloadPriceQuote
- sendPriceQuoteByEmail

Subscriptions
- listSubscriptions
- addSubscription
- terminateSubscription


Installation
============

```php
php artisan bundle:install wefacthosting
```
Open bundles.php and add this

```php
'wefacthosting' => array('auto' => true),
```

Documentation
=============
https://www.wefact.nl/wefact-hosting/api/

Usage example
=============

```php
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
	$invoice_info 	= $api->addInvoice('securitycode', $newInvoice);

	print_r($invoice_info);
```

We @ Netbulae.eu love this package and hopefully you will find this bundle very handy :)