<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Joe Parihar
* @version   v0.0.1
* @copyright 2013
*/


require_once "whmcs_base.php";
class whmcs_order_handling extends whmcs_Base{
	/**
	*  Add a new order to the system.
	*
	*  Parameters:
	*
	* clientid - client id for order
	* pid - product id
	* domain - domain name
	* billingcycle - onetime, monthly, quarterly, semiannually, etc..
	* domaintype - set for domain registration - register or transfer
	* regperiod = 1,2,3,etc...
	* eppcode - if domain transfer
	* nameserver1 - first nameserver (req for domain reg only)
	* paymentmethod - paypal, authorize, etc..	 
	*
	*  Optional Parameters:
	*
	* customfields - a base64 encoded serialized array of custom field values
	* configoptions - a base64 encoded serialized array of configurable product options
	* priceoverride - allows you to pass in a custom price override for the product
	* promocode - pass coupon code to apply to the order
	* affid - affiliate ID if you want to assign the order to an affiliate
	* noinvoice - set true to not generate an invoice for this order
	* noinvoiceemail - set true to generate but not send the invoice notification email
	* noemail - set true to surpress the order confirmation email
	* clientip - can be used to pass the customers IP
	* addons - comma seperated list of addon ids For domain reg only
	*
	* For domain reg only
	*
	* contactid - the ID of a contact to use for the domain registrant details
	* dnsmanagement - true to enable
	* domainfields - a base64 encoded serialized array of the TLD specific field values
	* emailforwarding - true to enable
	* idprotection - true to enable
	* nameserver2 - second nameserver
	* nameserver3 - third nameserver
	* nameserver4 - fourth nameserver
	*
	* For domain renewals
	*
	* domainrenewals - This is a name -> value array of domain -> regperiod
	*
	* See:
    *
    * http://docs.whmcs.com/API:Add_Order
    */

	public static function whmcs_add_order($params = array()) {
	    $params['action'] = 'addorder';
	    return Whmcs_base::send_request($params);
  	}

  	//-------------------------------------------------------------

	/**
	* This command is used to generate list of orders
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	* 
	* id - to get a specific order ID only
	* userid - to get all orders for a specific client ID
	* status - to get all orders in a specific status: Pending, Active, Fraud, Cancelled
	* limitstart - The record number to start at (default = 0)
	* limitnum - The number of order records to return (default = 25)
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Orders
	*/

	public static function whmcs_get_orders($params = array()) {
		$params['action'] = 'getorders';
		return Whmcs_base::send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command can be used to retrieve product details.
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	* 
	* pid - can be used to just retrieve the details of a specific product ID
	* gid - can be passed to just retrieve products in a specific group
	* module - can be passed to just retrieve products assigned to a specific module
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Products
	*/

	public static function whmcs_get_products($params = array()) {
		$params['action'] = 'getproducts';
		return Whmcs_base::send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command can be used to retrieve the details of all promotions or a specific promotion code.
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	* 
	* code - the specific promotion code to return information for
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Promotions
	*/

	public static function whmcs_get_promotions($params = array()) {
		$params['action'] = 'getpromotions';
		return Whmcs_base::send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command is used to generate an XML list of order statuses and their counts
	*
	* Parameters:
	*
	* None
	*
	* Optional Parameters:
	* 
	* none
	*
	* See:
	*
	* http://docs.whmcs.com/API:Get_Order_Statuses
	*/

	public static function whmcs_get_order_statuses($params = array()) {
		$params['action'] = 'getorderstatuses';
		return Whmcs_base::send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command is used to accept a pending order in the system.
	*
	* Parameters:
	*
	* orderid - the Order ID to be accepted
	*
	* Optional Parameters:
	* 
	* serverid - the Server ID to provision any hosting products in the order to, overrides default
	* serviceusername - the Username to assign for provisioning, overrides default
	* servicepassword - the Password to assign for products being provisioned, overrides auto generation
	* registrar - the domain registrar module to assign any domains to
	* autosetup - true/false - determines whether product provisioning and/or domain registration is performed
	* sendemail - true/false - sets if welcome emails for products and registration confirmation emails for domains should be sent
	*
	* See:
	*
	* http://docs.whmcs.com/API:Accept_Order
	*/

	public static function whmcs_accept_order($params = array()) {
		$params['action'] = 'acceptorder';
		return Whmcs_base::send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command is used to change an order state to pending
	*
	* Parameters:
	*
	* orderid - the id from tblorders
	*
	* Optional Parameters:
	* 
	* none
	*
	* See:
	*
	* http://docs.whmcs.com/API:Pending_Order
	*/

	public static function whmcs_pending_order($params = array()) {
		$params['action'] = 'pendingorder';
		return Whmcs_base::send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command is used to cancel a pending order in the system.
	*
	* Parameters:
	*
	* orderid - client id for order
	*
	* Optional Parameters:
	* 
	* none
	*
	* See:
	*
	* http://docs.whmcs.com/API:Cancel_Order
	*/

	public static function whmcs_cancel_order($params = array()) {
		$params['action'] = 'cancelorder';
		return Whmcs_base::send_request($params);
	}


	//-------------------------------------------------------------

	/**
	* This command is used to set an order to the Fraud status in the system.
	*
	* Parameters:
	*
	* orderid - client id for order
	*
	* Optional Parameters:
	* 
	* none
	*
	* See:
	*
	* http://docs.whmcs.com/API:Fraud_Order
	*/

	public static function whmcs_fraud_order($params = array()) {
		$params['action'] = 'fraudorder';
		return Whmcs_base::send_request($params);
	}

	//-------------------------------------------------------------

	/**
	* This command is used to delete an order
	*
	* Parameters:
	*
	* orderid - id of the order in tblorders
	*
	* Optional Parameters:
	* 
	* none
	*
	* See:
	*
	* http://docs.whmcs.com/API:Delete_Order
	*/

	public static function whmcs_delete_order($params = array()) {
		$params['action'] = 'deleteorder';
		return Whmcs_base::send_request($params);
	}

}