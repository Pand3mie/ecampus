<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statistiques extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->layout->view('statistiques/statistiques',TRUE);
	}

	public function test()
	{
		$this->load->view('statistiques/func');
	}

}

/* End of file statistiques.php */
/* Location: ./application/controllers/statistiques.php */
