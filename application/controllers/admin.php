<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function deconnexion()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('connexion','refresh');
		
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */