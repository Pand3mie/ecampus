<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	session_start();
class Groupes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in'))
   	{ 	redirect('connexion','refresh');} 
      
	}

	public function afficher()
	{	
		$user = $this->session->userdata('logged_in');
		$users = $user['id'];
		$this->load->model('group_model');
		$requete = $this->group_model->categorie_group($users);
		foreach($requete as $k):
			$e = $k->categorie;
		endforeach;
		$data['users'] = $users;
		$data['group'] = $this->group_model->get_group($e);
		$this->layout->view('groupe',$data);
		
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