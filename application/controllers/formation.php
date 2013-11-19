<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	//methode ajouter une formation////////////////////////////////////////////////
	//
	public function ajouter()

	{
		$this->load->model('formation_model');
		$data['fonction'] = $this->formation_model->getfunction_users();
		$this->layout->view('formation/formation_ajouter',$data);
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		$submit = $this->input->post('confirm_ajouter');
	      

	            	if ( ! $this->upload->ajouter())
			{
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('formation/formation_ajouter', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				 $this->formation_model->ajouter_formation();
	                	echo '<div class="alertnews" ><div class="alert alert-success">
					    	<button type="button" class="close" data-dismiss="alert">&times;</button>
					    	<strong></strong> Votre Formation a été enregistrée.
					   	 	<p><a href="'.base_url().'">Retours à l\'accueil</a></p>
					    	</div></div>'; 

				$this->load->view('formation/formation_ajouter', $data);
			}
	
	}

	//methode modifier une formation////////////////////////////////////////////////
	//
	public function modifier()

	{
   		 $this->layout->view('formation/formation_modifier');

	}

		//methode ajax modifier une formation////////////////////////////////////////////////
		//
	public function ajaxmodifierformation()

	{
		$this->load->model('formation_model');
		$id = $this->uri->segment(3);
		$data['id'] = $this->formation_model->get_formation($id);
		$this->load->view('ajax/ajax_modifier_formation',$data);
	}


	//methode supprimer une formation////////////////////////////////////////////////
	//
	public function supprimer()

	{
		$this->load->model('formation_model');
		$data['formation'] = $this->formation_model->formation();
		$this->layout->view('formation/formation_supprimer',$data);
		$submit = $this->input->post('submit');
		$id = $this->input->post('id_formation', TRUE);
		if($submit == "supprimer")
			{

		$this->formation_model->supprimer_formation($id);
		redirect('formation/supprimer','refresh');
		   	}
   
	}

	//methode ajax supprimer une formation////////////////////////////////////////////////
	//
	public function ajaxsupprimer()

	{
		$this->load->model('formation_model');
		$id = $this->uri->segment(3);
		$data['get'] = $this->formation_model->get_formation($id);
		$this->load->view('ajax/ajax_delete_formation',$data);

	}



	//methode recherche une formation////////////////////////////////////////////////
	//
	public function rechercher()

	{
    $this->layout->view('formation/formation_rechercher');

	}



	//methode demande une formation////////////////////////////////////////////////
	//
	public function demande()

	{
		$mail = $this->input->post('confirm_mail');

		if (isset($mail)){

		$message = $this->input->post('message_formation', TRUE);
		$object = $this->input->post('Objet_demande', TRUE);
		$this->load->model('formation_model');
		$method = $this->formation_model->demandeformation($object, $message);
			//=====Envoi de l'e-mail.

	    if ($method) {
	        echo '    <div class="alertmail" ><div class="alert alert-success">
	        <button type="button" class="close" data-dismiss="alert">&times;</button>
	        <strong></strong> Votre message à été enregistré.
	        <p><a href="accueil.php">Retours à l\'accueil</a></p>
	        </div></div>';
	    } else {
	        echo 'Le message n\'a pu être envoyé';
	    }
		}
		
	    $this->layout->view('formation/formation_demande');
	}

	//methode choisir une formation////////////////////////////////////////////////
	//
	public function choix()

	{
    	$this->layout->view('formation/formation_choix');

	}

	//methode historique d'une formation////////////////////////////////////////////////
	//
	public function historique()

	{
    	$this->layout->view('formation/formation_historique');

	}

	//methode liste d'une formation////////////////////////////////////////////////
	//
	public function liste()

	{
    	$this->layout->view('formation/formation_liste');

	}


}

/* End of file ecampus_formation.php */
/* Location: ./application/controllers/ecampus_formation.php */