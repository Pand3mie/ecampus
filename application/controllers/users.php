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
		
		$save = $this->input->post('saveUsers');

		if ($this->form_validation->run() == TRUE)
		{
	
		$base = base_url();
		$config['upload_path'] = $base.'assets/upload/users/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['file_name'] = $this->input->post('myimage', TRUE);
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->set_allowed_types('*');
		$this->upload->do_upload('myimage');
		$pic = $this->upload->data();
		$picture = $pic ['file_name'];

		$this->load->model('usersmodel');
		$this->usersmodel->newuser($picture);
		$this->output->enable_profiler(TRUE);

		}
		else
		{
			
			return false;
		
		}

	}

	public function supprimerGroupe()
	{


	}

	public function details()
	{

		$this->load->model('usersmodel');
		$data['getid'] = $this->usersmodel->getuser();
		$data['formation'] = $this->usersmodel->getformation();
		$this->load->view('ajax/ajax_details',$data);
	}
	public function ajouterGroupe()
	{
		
		$this->load->model('usersmodel');
		$data['groupe'] = $this->usersmodel->getgroupe();
		$this->layout->view('users/users_ajouterGroupe',$data);
		
		if ($this->form_validation->run() == TRUE)
		{
			$this->usersmodel->insertGroupe();
			redirect('accueil','refresh');
			$this->output->enable_profiler(TRUE);
		}else{

			return FALSE;
			$this->output->enable_profiler(TRUE);
		}

	}


}

/* End of file users.php */
/* Location: ./application/controllers/users.php */