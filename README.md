whmcs-codeigniter-library
=========================

Codeigniter library for working with WHMCS API


Simple example of usage:

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


Provided as-is, no guarantee of security, stability or function