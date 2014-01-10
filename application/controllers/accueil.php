<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Accueil extends CI_Controller {
	
	
	public function __construct()
	{
	    parent::__construct();
	    if(!$this->session->userdata('logged_in'))
   	{ 	redirect('connexion','refresh');} 
      
 	}
            
   	

	/**************************************************************************/

	public function index()
	{
	
	$this->load->model('accueil_model');
	$data['resultat'] = $this->accueil_model->get_all_news();
	$data['vote'] = $this->accueil_model->vote();
	$this->layout->view('ecampus_accueil',$data);
	//$this->output->enable_profiler(TRUE);
    
  	}

  	/**************************************************************************/
	
	public function erreur()
	{

	header("HTTP/1.1 404 Not Found");
	$this->load->view('erreur');

	}

	/**************************************************************************/
}

/* End of file accueil.php */
/* Location: ./application/controllers/accueil.php */