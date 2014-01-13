<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connexion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('connexion_model','',TRUE);
		$this->load->library('form_validation');
		
	}


	public function index()
	{
		$this->load->view('users/loginform');
	}


	public function verifylogin()
	{
   //This method will have the credentials validation
   

   $this->form_validation->set_rules('nni', 'NNI', 'trim|required|xss_clean');
   $this->form_validation->set_rules('pwd_users', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     
      $this->load->view('users/loginform');
   }
   else
   {
     //Go to private area
     $users = $this->session->userdata('logged_in');
     $id = $users['id'];
     $this->load->model('connexion_model');
     $this->connexion_model->logip($id);
     redirect('accueil', 'refresh');
   }

   }

 function check_database ($password)
 {
   //Field validation succeeded.  Validate against database
   $nni = $this->input->post('nni');

   //query the database
   $result = $this->connexion_model->log($nni, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id_users,
         'nni' => $row->nni,
         'nom' => $row->nom_users,
         'prenom' => $row->prenom_users,
         'droits' => $row->droits_users
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'NNI ou mot de passe erroné');
     return false;
   }
 }

}

/* End of file connexion.php */
/* Location: ./application/controllers/connexion.php */