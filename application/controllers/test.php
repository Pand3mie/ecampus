<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
	{
		 parent::__construct();
		 $this->load->helper('url');
	}

/*
* show list as a table, get data from "test_model"
* */
function get_list_view(){
 
$this->load->model('test_model');
 
$data = array();
 
$data['title'] = 'Lorem ipsum';
$data['list'] = $this->test_model->get_data();
 
$this->load->view('sample_table', $data);
 
}
 
function index(){
$this->load->view('test_page');
}
 
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */