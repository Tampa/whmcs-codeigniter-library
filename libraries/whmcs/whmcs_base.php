<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* WHMCS API
*
* @author    Joe Parihar
* @version   v0.0.1
* @copyright 2013
*/


define('WHMCS_URL', 'YOUR_URL/includes/api.php');
define('WHMCS_IDENTIFIER', 'API_IDENTIFIER'); // username
define('WHMCS_SECRET', 'API_SECRET'); //password should be in md5 


class whmcs_base{

		public static function send_request($params = array()){

		if ( ! isset($params['action'])) {
	      trigger_error("No API action set");
	      exit;
	    }

	    if ( ! defined('WHMCS_IDENTIFIER') || ! defined('WHMCS_SECRET') || ! defined('WHMCS_URL')) {
	      trigger_error("Must set WHMCS_IDENTIFIER, WHMCS_SECRET, and WHMCS_URL constants");
	      exit;
	    }

	    $url=WHMCS_URL;
	    $params['identifier'] = WHMCS_IDENTIFIER;
	    $params['secret'] = WHMCS_SECRET;	
	    //$params['accesskey'] = 's9!e8@c7u6r5e'; //secrete key
		$params["responsetype"] = "json";
		 
		$query_string = "";
		foreach ($params AS $k=>$v) $query_string .= "$k=".urlencode($v)."&";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$jsondata = curl_exec($ch);
		if (curl_error($ch)) die("Connection Error: ".curl_errno($ch).' - '.curl_error($ch));
		curl_close($ch);

		return $arr = json_decode($jsondata); # Decode JSON String

		print_r($arr); # Output XML Response as Array

		/*
		Debug Output - Uncomment if needed to troubleshoot problems
		echo "<textarea rows=50 cols=100>Request: ".print_r($postfields,true);
		echo "\nResponse: ".htmlentities($jsondata)."\n\nArray: ".print_r($arr,true);
		echo "</textarea>";
		*/
	}	
}