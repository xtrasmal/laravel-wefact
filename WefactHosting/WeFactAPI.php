<?php
header("Content-type: text/html; charset=utf-8");

/**
 * WeFactAPI
 * 
 * @author WeFact B.V.
 * @copyright 2011
 * @version 1.0
 * @access public
 */
class WeFactAPI
{
	private $client;
	private $securitykey;
	private $error;

	/**
	 * WeFactAPI::__construct()
	 * 
	 * @return
	 */
	function __construct(){
		try {
			$this->client		= @new SoapClient("http://www.uwdomein.nl/wefact/Pro/api/?wsdl&version=1.07");
			
			return true;
		} catch(Exception $e){
			$this->client		= null;
			$this->error 		= 'Exception: ' . $e->getMessage();
			return false;
		}
	}
	
	/**
	 * WeFactAPI::getDebtor()
	 * 
	 * Retrieve personal data from debtor.
	 * 
	 * @param string $security_code Security code for access to the API
	 * @param mixed $debtor_id Identifier of the debtor, can be obtained by using the listDebtors() function
	 */
	function getDebtor($security_code, $debtor_id){
		return $this->client->getDebtor($security_code, $debtor_id);
	}
	
	/**
	 * WeFactAPI::listDebtors()
	 * 
	 * List all debtors available in WeFact.
	 * Sort & Order arguments for sorting the results
	 * Search argument for searching in fields DebtorCode, CompanyName and SurName.
	 * 
	 * @param string $security_code Security code for access to the API
	 * @param mixed $filter Array with optional keys Sort (e.g. DebtorCode), Order (e.g. ASC) and Search (e.g. WeFact).
	 */
	function listDebtors($security_code, $filter = array()){
		return $this->client->listDebtors($security_code, $filter);	
	}
	
	/**
	 * WeFactAPI::addDebtor()
	 * 
	 * Create a new debtor in WeFact
	 * 
	 * @param string $security_code Security code for access to the API
	 * @param mixed $newDebtor Array with optional keys as mentioned in documentation
	 */
	function addDebtor($security_code, $newDebtor = array()){
		return $this->client->addDebtor($security_code, $newDebtor);
	}
	
	/**
	 * WeFactAPI::editDebtor()
	 * 
	 * Edit a debtor in WeFact
	 * 
	 * @param string $security_code Security code for access to the API
	 * @param int $debtor_id Debtor identifier
	 * @param mixed $editDebtor Array with optional keys as mentioned in documentation
	 */
	function editDebtor($security_code, $debtor_id, $editDebtor = array()){
		return $this->client->editDebtor($security_code, $debtor_id, $editDebtor);
	}
	
	/**
	 * WeFactAPI::deleteDebtor()
	 * 
	 * Delete a debtor in WeFact
	 * 
	 * @param mixed $security_code
	 * @param mixed $debtor_id
	 * @return
	 */
	function deleteDebtor($security_code, $debtor_id, $remove_subscriptions = false){
		return $this->client->deleteDebtor($security_code, $debtor_id, $remove_subscriptions);
	}
	
	/**
	 * WeFactAPI::getDebtorID()
	 * 
	 * Retrieve ID from debtor
	 * 
	 * @param mixed $security_code
	 * @param mixed $debtor_code
	 * @return
	 */
	function getDebtorID($security_code, $debtor_code){
		return $this->client->getDebtorID($security_code, $debtor_code);
	}
	
	/**
	 * WeFactAPI::checkLoginDebtor()
	 * 
	 * Check login credentials
	 * 
	 * @param mixed $security_code
	 * @param mixed $username
	 * @param mixed $password
	 * @return
	 */
	function checkLoginDebtor($security_code, $username, $password){
		return $this->client->checkLoginDebtor($security_code, $username, $password);
	}
	
	/**
	 * WeFactAPI::addSubscription()
	 * 
	 * Create a new subscription in WeFact
	 * 
	 * @param string $security_code Security code for access to the API
	 * @param mixed $newSubscription Array with optional keys as mentioned in documentation
	 */
	function addSubscription($security_code, $newSubscription = array()){
		return $this->client->addSubscription($security_code, $newSubscription);
	}

	/**
	 * WeFactAPI::listSubscriptions()
	 * 
	 * Get a list of active subscriptions
	 * 
	 * @param mixed $security_code
	 * @param mixed $filter
	 * @return
	 */
	function listSubscriptions($security_code, $filter = array()){
		return $this->client->listSubscriptions($security_code, $filter);	
	}
	
	/**
	 * WeFactAPI::terminateSubscription()
	 * 
	 * Terminate a subscription
	 * 
	 * @param mixed $security_code
	 * @param mixed $subscription_id
	 * @param mixed $termination_date
	 * @return
	 */
	function terminateSubscription($security_code, $subscription_id, $termination_date = null, $agenda_item = false){
		return $this->client->terminateSubscription($security_code, $subscription_id, $termination_date, $agenda_item);
	}
	
	/**
	 * WeFactAPI::addInvoice()
	 * 
	 * Create a new invoice in WeFact
	 * 
	 * @param string $security_code Security code for access to the API
	 * @param mixed $newInvoice Array with optional keys as mentioned in documentation
	 */
	function addInvoice($security_code, $newInvoice = array()){	
		return $this->client->addInvoice($security_code, $newInvoice);
	}
	
	/**
	 * WeFactAPI::addInvoiceLine()
	 * 
	 * Add an extra invoice line to an existing invoice
	 * 
	 * @param mixed $security_code
	 * @param mixed $invoice_id
	 * @param mixed $newInvoiceLine
	 * @return
	 */
	function addInvoiceLine($security_code, $invoice_id, $newInvoiceLine = array()){	
		return $this->client->addInvoiceLine($security_code, $invoice_id, $newInvoiceLine);
	}
		
	/**
	 * WeFactAPI::getError()
	 * 
	 * @return
	 */
	function getError(){
		return $this->error;
	}
	
	/**
	 * WeFactAPI::listInvoices()
	 * 
	 * List all invoices available in WeFact.
	 * Sort & Order arguments for sorting the results
	 * Search argument for searching in fields InvoiceCode, CompanyName and SurName
	 * 
	 * @param string $security_code Security code for access to the API
	 * @param mixed $filter Array with optional keys Sort (e.g. InvoiceCode), Order (e.g. ASC) and Search (e.g. WeFact).
	 */
	function listInvoices($security_code, $filter = array()){
		return $this->client->listInvoices($security_code, $filter);	
	}
	
	/**
	 * WeFactAPI::getInvoice()
	 * 
	 * Retrieve general data from invoice.
	 * 
	 * @param string $security_code Security code for access to the API
	 * @param mixed $invoice_id Identifier of the invoice, can be obtained by using the listInvoices() function
	 */
	function getInvoice($security_code, $invoice_id){
		return $this->client->getInvoice($security_code, $invoice_id);
	}
	
	/**
	 * WeFactAPI::getInvoiceID()
	 * 
	 * Retrieve general data from invoice.
	 * 
	 * @param string $security_code Security code for access to the API
	 * @param mixed $invoice_id Identifier of the invoice, can be obtained by using the listInvoices() function
	 */
	function getInvoiceID($security_code, $invoice_id){
		return $this->client->getInvoiceID($security_code, $invoice_id);
	}
	
	/**
	 * WeFactAPI::downloadInvoice()
	 * 
	 * Download PDF file
	 * 
	 * @param string $security_code Security code for access to the API
	 * @param mixed $invoice_id Identifier of the invoice, can be obtained by using the listInvoices() function
	 */
	function downloadInvoice($security_code, $invoice_id){
		return $this->client->downloadInvoice($security_code, $invoice_id);
	}
	
	/**
	 * WeFactAPI::sendInvoice()
	 * 
	 * Send invoice via e-mail
	 * 
	 * @param string $security_code Security code for access to the API
	 * @param mixed $invoice_id Identifier of the invoice, can be obtained by using the listInvoices() function
	 */
	function sendInvoiceByEmail($security_code, $invoice_id){
		return $this->client->sendInvoiceByEmail($security_code, $invoice_id);
	}
	
	/**
	 * WeFactAPI::changeInvoiceStatus()
	 * 
	 * Retrieve general data from invoice.
	 * 
	 * @param string $security_code Security code for access to the API
	 * @param mixed $invoice_id Identifier of the invoice, can be obtained by using the listInvoices() function
	 * @param string $paid 'true' = paid or 'false' = not paid
	 * @param string $date You can parse the paydate
	 */
	function changeInvoiceStatus($security_code, $invoice_id, $paid, $date = ''){
		return $this->client->changeInvoiceStatus($security_code, $invoice_id, $paid, $date);
	}
	
	/**
	 * WeFactAPI::addPriceQuote()
	 * 
	 * @param mixed $security_code
	 * @param mixed $newPriceQuote
	 * @return
	 */
	function addPriceQuote($security_code, $newPriceQuote = array()){
		return $this->client->addPriceQuote($security_code, $newPriceQuote);
	}
	
	/**
	 * WeFactAPI::listPriceQuotes()
	 * 
	 * @param mixed $security_code
	 * @param mixed $filter
	 * @return
	 */
	function listPriceQuotes($security_code, $filter = array()){
		return $this->client->listPriceQuotes($security_code, $filter);	
	}
	
	/**
	 * WeFactAPI::getPriceQuote()
	 * 
	 * @param mixed $security_code
	 * @param mixed $pricequote_id
	 * @return
	 */
	function getPriceQuote($security_code, $pricequote_id){
		return $this->client->getPriceQuote($security_code, $pricequote_id);
	}
	
	/**
	 * WeFactAPI::getPriceQuoteID()
	 * 
	 * @param mixed $security_code
	 * @param mixed $pricequote_code
	 * @return
	 */
	function getPriceQuoteID($security_code, $pricequote_code){
		return $this->client->getPriceQuoteID($security_code, $pricequote_code);
	}
	
	/**
	 * WeFactAPI::downloadPriceQuote()
	 * 
	 * @param mixed $security_code
	 * @param mixed $pricequote_id
	 * @return
	 */
	function downloadPriceQuote($security_code, $pricequote_id){
		return $this->client->downloadPriceQuote($security_code, $pricequote_id);
	}
	
	/**
	 * WeFactAPI::sendPriceQuote()
	 * 
	 * Send pricequote via e-mail
	 * 
	 * @param string $security_code Security code for access to the API
	 * @param mixed $pricequote_id Identifier of the pricequote, can be obtained by using the listPriceQuotes() function
	 */
	function sendPriceQuoteByEmail($security_code, $pricequote_id){
		return $this->client->sendPriceQuoteByEmail($security_code, $pricequote_id);
	}
	
	/**
	 * WeFactAPI::changePriceQuoteStatus()
	 * 
	 * @param mixed $security_code
	 * @param mixed $pricequote_id
	 * @param mixed $accept
	 * @param mixed $makeinvoice
	 * @return
	 */
	function changePriceQuoteStatus($security_code, $pricequote_id, $accept, $makeinvoice = 'false'){
		return $this->client->changePriceQuoteStatus($security_code, $pricequote_id, $accept, $makeinvoice);
	}
	
	/**
	 * WeFactAPI::getProduct()
	 * 
	 * Retrieve general data from product
	 * 
	 * @param mixed $security_code
	 * @param mixed $product_id
	 * @return
	 */
	function getProduct($security_code, $product_id){
		return $this->client->getProduct($security_code, $product_id);
	}
	
	/**
	 * WeFactAPI::listProducts()
	 * 
	 * List all products available in WeFact.
	 * Sort & Order arguments for sorting the results
	 * Search argument for searching in fields ProductCode, ProductName, ProductKeyPhrase, ProductDescription
	 * 
	 * @param mixed $security_code
	 * @param mixed $filter
	 * @return
	 */
	function listProducts($security_code, $filter = array()){
		return $this->client->listProducts($security_code, $filter);	
	}

}
?>