<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Logs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in'))
   	{ 	redirect('connexion','refresh');} 
      
	}

	public function index()

	{
		$this->load->model('model_logs');
		$data['log'] = $this->model_logs->get_ip();

		$this->layout->view('logs/Vlogs',$data);
		$check = $this->input->post('valider', TRUE);

		   if ($check == 'run'){

                $idlog =  $this->input->post('supp_logs');
                $this->model_logs->supp_ip($idlog);
                redirect('logs', 'refresh');
                
               	
            }

	}




}

/* End of file logs.php */
/* Location: ./application/controllers/logs.php */