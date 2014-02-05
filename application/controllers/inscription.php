<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscription extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('inscription_model');
	}

	public function index()
	{
		
		$data['inscrit'] = $this->inscription_model->get_inscrit();
		$data['formation'] = $this->inscription_model->select_formation();
		$this->layout->view('inscription/inscription',$data);

		$inscription = $this->input->post('inscription');

		if ($inscription == 'valide')
		{
		$this->inscription_model->inscription();
		redirect('accueil','refresh');
		//$this->output->enable_profiler(TRUE);

		}else{

			return FALSE;
			
		}
	}

	public function listing()
	{
	$tri = $this->input->post('tri_formation');	
	$data['triData'] = $this->inscription_model->tri_formation($tri);
	$this->layout->view('inscription/listinginscription',$data);
	//$this->output->enable_profiler(TRUE);
	}

}

/* End of file inscription.php */
/* Location: ./application/controllers/inscription.php */