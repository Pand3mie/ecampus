<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('layout');
        $this->load->helper(array('url', 'assets', 'html', 'form'));
        $this->load->model('usersmodel');
        if(!$this->session->userdata('logged_in'))
   	{ 	redirect('connexion','refresh');} 
      
	}

	
	public function rechercher()
	{
		
		$this->layout->view('users/users_rechercher');
		
	}
	public function userssearch()
	{
		$this->load->model('usersmodel');
		$data['rows'] = $this->usersmodel->ajaxusers();
		$this->load->view('ajax/ajax_users_rechercher',$data);

	}
	public function ajouter()
	{
		$this->load->model('usersmodel');
		$data['groupe'] = $this->usersmodel->getgroupe();
		$this->layout->view('users/users_ajouter',$data);
		$saveUsers = $this->input->post('saveUsers', TRUE);
		if (isset($saveUsers)) {
			$this->usersmodel->newuser();
		}

	}
	public function supprimer()
	{


	}

	public function details()
	{

		$this->load->model('usersmodel');
		$data['getid'] = $this->usersmodel->getuser();
		$data['formation'] = $this->usersmodel->getformation();
		$this->load->view('ajax/ajax_details',$data);
	}

}

/* End of file users.php */
/* Location: ./application/controllers/users.php */