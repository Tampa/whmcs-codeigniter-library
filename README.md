whmcs-codeigniter-library
=========================

Codeigniter library for working with WHMCS API

Requires API identifier and secret. Generate them from the Setup->Staff Management->Manage API Credentials and put the identifier and secret into whmcs_base.php

Add the IP of the webserver to the Setup->General Settings->Security->API IP Access Restriction to allow the calls to be made remotely

Calls follow the codeigniter API from version 7.5  https://developers.whmcs.com/api-reference/


Fork from original, upgraded to latest codeigniter version 3.1.8 and whmcs 7.5, may not include all currently available API functions


Example for validating logins with whmcs remotely:

Controller:


	public function login()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() === false)
		{
			$this->load->view('webpanel/login');
		}
		else
		{
			$this->webpanel_model->login();
		}
		
	}

Model:

	public function login()
	{
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('whmcs');
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$login_data=array('email' => $email, 'password2' => $password);
		
		$attempt = $this->whmcs->validate_login($login_data);
		
		var_dump($attempt); //Should return success or what went wrong
		
	}

On success should return the json object as described in the whmcs api documentation
	

	
	
	
Provided as-is, no guarantee of security, stability or function