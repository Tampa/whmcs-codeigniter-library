<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Joe Parihar
* @version   v0.0.1
* @copyright 2013
*/

class whmcs{	

	function __construct(){		
		$dir = APPPATH.'libraries';
		require_once "{$dir}/whmcs/whmcs_base.php";
		require_once "{$dir}/whmcs/whmcs_client.php";
		require_once "{$dir}/whmcs/whmcs_domain_commands.php";
		require_once "{$dir}/whmcs/whmcs_miscellaneous.php";
		require_once "{$dir}/whmcs/whmcs_module_commands.php";
		require_once "{$dir}/whmcs/whmcs_order_handling.php";
		require_once "{$dir}/whmcs/whmcs_payments_billing.php";
		require_once "{$dir}/whmcs/whmcs_quotes.php";
		require_once "{$dir}/whmcs/whmcs_support.php";
	}

	/** Client Management **/

	public static function add_client($params){
		return whmcs_client::whmcs_add_client($params);
	}

	public static function update_client($params){
		return whmcs_client::whmcs_update_client($params);
	}

	public static function delete_client($params){		
		return whmcs_client::whmcs_delete_client($params);
	}

	public static function close_client($params){		
		return whmcs_client::whmcs_close_client($params);
	}

	public static function add_client_note($params){		
		return whmcs_client::whmcs_add_client_note($params);
	}

	public static function get_clients($params){		
		return whmcs_client::whmcs_get_clients($params);
	}

	public static function get_clients_details($params){		
		return whmcs_client::whmcs_get_clients_details($params);
	}

	public static function get_credits($params){		
		return whmcs_client::whmcs_get_credits($params);
	}

	public static function get_emails($params){		
		return whmcs_client::whmcs_get_emails($params);
	}

	public static function get_quotes_client($params){		
		return whmcs_client::whmcs_get_quotes($params);
	}

	public static function get_clients_password($params){		
		return whmcs_client::whmcs_get_clients_password($params);
	}

	public static function get_transactions_client($params){		
		return whmcs_client::whmcs_get_transactions($params);
	}

	public static function add_contact($params){		
		return whmcs_client::whmcs_add_contact($params);
	}
	
	public static function get_contacts($params){		
		return whmcs_client::whmcs_get_contacts($params);
	}

	public static function update_contact($params){		
		return whmcs_client::whmcs_update_contact($params);
	}

	public static function delete_contact($params){		
		return whmcs_client::whmcs_delete_contact($params);
	}

	public static function get_clients_products($params){		
		return whmcs_client::whmcs_get_clients_products($params);
	}

	public static function update_client_product($params){		
		return whmcs_client::whmcs_update_client_product($params);
	}

	public static function get_clients_addons($params){		
		return whmcs_client::whmcs_get_clients_addons($params);
	}

	public static function update_client_addon($params){		
		return whmcs_client::whmcs_update_client_addon($params);
	}

	public static function get_clients_domains($params){		
		return whmcs_client::whmcs_get_clients_domains($params);
	}

	public static function update_client_domain($params){		
		return whmcs_client::whmcs_update_client_domain($params);
	}

	public static function add_cancel_request($params){		
		return whmcs_client::whmcs_add_cancel_request($params);
	}

	public static function upgrade_product($params){		
		return whmcs_client::whmcs_upgrade_product($params);
	}

	public static function validate_login($params){		
		return whmcs_client::whmcs_validate_login($params);
	}

	public static function send_email($params){		
		return Whmcs_client::whmcs_send_email($params);
	}

	/** Domain Commands **/

	public static function domain_register($params){		
		return Whmcs_domain_commands::whmcs_domain_register($params);
	}

	public static function domain_renew($params){		
		return Whmcs_domain_commands::whmcs_domain_renew($params);
	}

	public static function domain_transfer($params){		
		return Whmcs_domain_commands::whmcs_domain_transfer($params);
	}

	public static function domain_release($params){		
		return Whmcs_domain_commands::whmcs_domain_release($params);
	}

	public static function domain_get_locking_status($params){		
		return Whmcs_domain_commands::whmcs_domain_get_locking_status($params);
	}

	public static function domain_get_name_servers($params){		
		return Whmcs_domain_commands::whmcs_domain_get_name_servers($params);
	}

	public static function domain_get_whois_info($params){		
		return Whmcs_domain_commands::whmcs_domain_get_whois_info($params);
	}

	public static function domain_request_epp($params){		
		return Whmcs_domain_commands::whmcs_domain_request_epp($params);
	}

	public static function domain_toggle_id_protect($params){		
		return Whmcs_domain_commands::whmcs_domain_toggle_id_protect($params);
	}

	public static function domain_update_locking_status($params){		
		return Whmcs_domain_commands::whmcs_domain_register($params);
	}

	public static function domain_update_name_servers($params){		
		return Whmcs_domain_commands::whmcs_domain_update_name_servers($params);
	}

	public static function domain_update_whois_info($params){		
		return Whmcs_domain_commands::whmcs_domain_update_whois_info($params);
	}

	public static function domain_whois($params){		
		return Whmcs_domain_commands::whmcs_domain_whois($params);
	}

	/** Miscellaneous **/

	public static function get_activity_log($params){		
		return Whmcs_miscellaneous::whmcs_get_activity_log($params);
	}

	public static function get_admin_details($params){		
		return Whmcs_miscellaneous::whmcs_get_admin_details($params);
	}

	public static function update_admin_notes($params){		
		return Whmcs_miscellaneous::whmcs_update_admin_notes($params);
	}

	public static function get_currencies($params){		
		return Whmcs_miscellaneous::whmcs_get_currencies($params);
	}

	public static function get_promotions($params){		
		return Whmcs_miscellaneous::whmcs_get_promotions($params);
	}

	public static function get_client_groups($params){		
		return Whmcs_miscellaneous::whmcs_get_client_groups($params);
	}

	public static function get_email_templates($params){		
		return Whmcs_miscellaneous::whmcs_get_email_templates($params);
	}

	public static function get_todo_items($params){		
		return Whmcs_miscellaneous::whmcs_get_todo_items($params);
	}

	public static function get_todo_item_statuses($params){		
		return Whmcs_miscellaneous::whmcs_get_todo_item_statuses($params);
	}

	public static function update_todo_item($params){		
		return Whmcs_miscellaneous::whmcs_update_todo_item($params);
	}

	public static function get_staff_online($params){		
		return Whmcs_miscellaneous::whmcs_get_staff_online($params);
	}

	public static function get_stats($params){		
		return Whmcs_miscellaneous::whmcs_get_stats($params);
	}

	public static function encrypt_password($params){		
		return Whmcs_miscellaneous::whmcs_encrypt_password($params);
	}

	public static function decrypt_password($params){		
		return Whmcs_miscellaneous::whmcs_decrypt_password($params);
	}

	public static function add_banned_ip($params){		
		return Whmcs_miscellaneous::whmcs_add_banned_ip($params);
	}

	public static function add_product($params){		
		return Whmcs_miscellaneous::whmcs_add_product($params);
	}

	public static function log_activity($params){		
		return Whmcs_miscellaneous::whmcs_log_activity($params);
	}

	public static function send_admin_email($params){		
		return Whmcs_miscellaneous::whmcs_send_admin_email($params);
	}
	



	/** Module Commands **/

	public static function module_create($params){		
		return Whmcs_module_commands::whmcs_module_create($params);
	}

	public static function module_suspend($params){		
		return Whmcs_module_commands::whmcs_module_suspend($params);
	}



    public static function module_unsuspend($params){		
		return Whmcs_module_commands::whmcs_module_unsuspend($params);
	}


    public static function module_terminate($params){		
		return Whmcs_module_commands::whmcs_module_terminate($params);
	}

	public static function module_change_package($params){
 		return Whmcs_module_commands::whmcs_module_change_package($params);
	}


    public static function module_change_password($params){		
		return Whmcs_module_commands::whmcs_module_change_password($params);
	}

	/** order handling **/

	public static function add_order($params){		
		return Whmcs_order_handling::whmcs_add_order($params);
	}

	public static function get_orders($params){		
		return Whmcs_order_handling::whmcs_get_orders($params);
	}

	public static function get_products($params){		
		return Whmcs_order_handling::whmcs_get_products($params);
	}

	public static function get_promotions_orderhandling($params){		
		return Whmcs_order_handling::whmcs_get_promotions($params);
	}

	public static function get_order_statuses($params){		
		return Whmcs_order_handling::whmcs_get_order_statuses($params);
	}

	public static function accept_order($params){		
		return Whmcs_order_handling::whmcs_accept_order($params);
	}

	public static function pending_order($params){		
		return Whmcs_order_handling::whmcs_pending_order($params);
	}

	public static function cancel_order($params){		
		return Whmcs_order_handling::whmcs_cancel_order($params);
	}

	public static function fraud_order($params){		
		return Whmcs_order_handling::whmcs_fraud_order($params);
	}

	public static function delete_order($params){		
		return Whmcs_order_handling::whmcs_delete_order($params);
	}


   /** Payments Billing **/




	public static function get_invoices($params){		
		return Whmcs_payments_billing::whmcs_get_invoices($params);
	}

	public static function get_invoice($params){		
		return Whmcs_payments_billing::whmcs_get_invoice($params);
	}

	public static function create_invoice($params){		
		return Whmcs_payments_billing::whmcs_create_invoice($params);
	}

	public static function update_invoice($params){		
		return Whmcs_payments_billing::whmcs_update_invoice($params);
	}

	public static function add_invoice_payment($params){		
		return Whmcs_payments_billing::whmcs_add_invoice_payment($params);
	}

	public static function capture_payment($params){		
		return Whmcs_payments_billing::whmcs_capture_payment($params);
	}

    public static function apply_credit($params){		
		return Whmcs_payments_billing::whmcs_apply_credit($params);
	}

	public static function add_billable_item($params){		
		return Whmcs_payments_billing::whmcs_add_billable_item($params);
	}

    public static function add_credit($params){		
		return Whmcs_payments_billing::whmcs_add_credit($params);
	}

     public static function add_transaction($params){		
		return Whmcs_payments_billing::whmcs_add_transaction($params);
	}

   public static function get_transactions_payments_billing($params){		
		return Whmcs_payments_billing::whmcs_get_transactions($params);
	}

    public static function update_transaction($params){		
		return Whmcs_payments_billing::whmcs_update_transaction($params);
	}

    public static function get_payment_methods($params){		
		return Whmcs_payments_billing::whmcs_get_payment_methods($params);
	}



   /**Quotes **/

 
    public static function create_quote($params){		
		return Whmcs_quotes::whmcs_create_quote($params);
	}
    public static function update_quote($params){		
		return Whmcs_quotes::whmcs_update_quote($params);
	}

    public static function delete_quote($params){		
		return Whmcs_quotes::whmcs_delete_quote($params);
	}

    public static function send_quote($params){		
		return Whmcs_quotes::whmcs_send_quote($params);
	}

    public static function accept_quote($params){		
		return Whmcs_quotes::whmcs_accept_quote($params);
	}

    public static function get_quotes($params){		
		return Whmcs_quotes::whmcs_get_quotes($params);
	}



  /** Support **/



    public static function create_ticket($params){		
		return Whmcs_support::whmcs_create_ticket($params);
	}

    public static function ticket_reply($params){		
		return Whmcs_support::whmcs_ticket_reply($params);
	}

    public static function get_tickets($params){		
		return Whmcs_support::whmcs_get_tickets($params);
	}

    public static function get_ticket($params){		
		return Whmcs_support::whmcs_get_ticket($params);
	}

    public static function update_ticket($params){		
		return Whmcs_support::whmcs_update_ticket($params);
	}

    public static function delete_ticket($params){		
		return Whmcs_support::whmcs_delete_ticket($params);
	}

    public static function add_ticket_note($params){		
		return Whmcs_support::whmcs_add_ticket_note($params);
	}

    public static function get_ticket_notes($params){		
		return Whmcs_support::whmcs_get_ticket_notes($params);
	}

    public static function delete_ticket_note($params){		
		return Whmcs_support::whmcs_delete_ticket_note($params);
	}

    public static function whmcs_get_support_departments($params){		
		return Whmcs_support::whmcs_get_support_departments($params);
	}

    public static function get_support_statuses($params){		
		return Whmcs_support::whmcs_get_support_statuses($params);
	}

    public static function get_ticket_predefined_categories($params){		
		return Whmcs_support::whmcs_get_ticket_predefined_categories($params);
	}

    public static function get_ticket_predefined_replies($params){		
		return Whmcs_support::whmcs_get_ticket_predefined_replies($params);
	}

    public static function add_announcement($params){		
		return Whmcs_support::whmcs_add_announcement($params);
	}

    public static function delete_announcement($params){		
		return Whmcs_support::whmcs_delete_announcement($params);
	}

    public static function update_announcement($params){		
		return Whmcs_support::whmcs_update_announcement($params);
	}

    public static function get_announcements($params){		
		return Whmcs_support::whmcs_get_announcements($params);
	}

}