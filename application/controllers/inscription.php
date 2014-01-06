<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscription extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->layout->view('inscription/inscription');
	}

	public function listing()
	{

	}

}

/* End of file inscription.php */
/* Location: ./application/controllers/inscription.php */