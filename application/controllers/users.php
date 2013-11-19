<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('layout');
        $this->load->helper(array('url', 'assets', 'html', 'form'));
        $this->load->model('usersmodel');
	}

	public function index()
	{
     if($this->usersmodel->isLoggedIn()){
          redirect('ecampus','refresh');
     } else {
          redirect('users/login','refresh');
     }
	}

	public function login(){

     if($this->usersmodel->isLoggedIn()){
          redirect('ecampus','refresh');
     } else {
          //on charge la validation de formulaires
          $this->load->library('form_validation');

          //on définit les règles de succès
          $this->form_validation->set_rules('nni','Login','trim|required|xss_clean');
          $this->form_validation->set_rules('pwd','Mot de passe','trim|required|matches[passconf]|md5');

          //si la validation a échouée on redirige vers le formulaire de login
          if(!$this->form_validation->run()){
               $this->load->view('users/loginform');
          } else {
               $username = $this->input->post('nni');
               $password = $this->input->post('pwd');
               $validCredentials = $this->usersmodel->validCredentials($username,$password);

               if($validCredentials){
                    redirect('ecampus','refresh');
               } else {
                    $data['error_credentials'] = 'Wrong Username/Password';
                    $this->load->view('users/loginform',$data);
               }
          }
          $inscription = $this->input->post('inscription');

          if($inscription == 'envoyer'){

				$agent =$this->input->post('mail', TRUE);
				$nni =$this->input->post('nni', TRUE);
				$name = $this->input->post('name', TRUE);
				$this->email->from($agent, 'Administrateur');
				$this->email->to('nicolasfouche.pro@hotmail.fr');
				$this->email->subject('Demande d\'inscription Ecampus');
				$this->email->message('<html><head><title>Un titre ici</title></head><body>Demande de formation de '.$agent.'<p>NNI = '.$nni.'</p><p>NOM = '.utf8_decode($name).'</p></body></html>');
    			$this->email->send(); 

     }
 }
}


	public function dashboard(){
     if($this->usersmodel->isLoggedIn())
          $this->load->view('ecampus');
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