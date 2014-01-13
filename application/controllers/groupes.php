<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	session_start();
class Groupes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in'))
   	{ 	redirect('connexion','refresh');} 
      
	}

	/**************************************************************************/

	public function ajouter()
	{


	}


	/**************************************************************************/

	public function supprimer()
	{


	}

	/**************************************************************************/

}

/* End of file groupes.php */
/* Location: ./application/controllers/groupes.php */