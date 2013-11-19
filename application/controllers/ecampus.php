<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ecampus extends CI_Controller {

	public function __construct()
	{
            parent::__construct(); 
             $this->load->model('usersmodel');
             if($this->usersmodel->isLoggedIn()){
          redirect('admin/dashboard','refresh');
     } else {
          redirect('users/login','refresh');
     }
            
   	}

	/**************************************************************************/

	public function index()
	{

	$this->load->model('accueil');
	$data['resultat'] = $this->accueil->get_all_news();
    $this->layout->view('ecampus_accueil',$data);
    
  	}

  	/**************************************************************************/
	
	public function erreur()
	{

	header("HTTP/1.1 404 Not Found");
	$this->load->view('erreur');

	}

	/**************************************************************************/
}

/* End of file ecampus.php */
/* Location: ./application/controllers/ecampus.php */