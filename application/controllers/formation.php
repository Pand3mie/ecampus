<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//session_start();

class Formation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

// Controle de Session
// 		
		if(!$this->session->userdata('logged_in'))
   			{ 	
   				redirect('connexion','refresh');
   			}
   	 }
      
	
	public function ajouter()

	{
// appel model 
		
		$this->load->model('formation_model');


// completion Select et passage data
		
		$data['fonction'] = $this->formation_model->getfunction_users();
		$this->layout->view('formation/formation_ajouter',$data);
		

		
//Appel fonction codeigniter upload
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		
				      
// Validation du formulaire


		$config = array(
               array(
                     'field'   => 'titre_formation', 
                     'label'   => 'Titre', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'contenu_formation', 
                     'label'   => 'Contenu', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'refformation', 
                     'label'   => 'Référence Formation', 
                     'rules'   => 'required'
                  )
            );
		
			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE)
			{
				$error = array('error' => $this->upload->display_errors());

				$data['errors'] = $error;
			}

			else

			{

// Controle si Numéro formation Existe deja
				
				$query = $this->formation_model->ajouter_formation();

					if(!$query)
					{
						$num = $this->input->post('refformation', TRUE);
							echo '<div class="alertnews" ><div class="alert alert-success">
					    		<button type="button" class="close" data-dismiss="alert">&times;</button>
					    		<strong></strong> La Fromation '.$num.' existe deja.Merci de saisir un autre numéro
					   	 		<p><a href="'.base_url().'">Retours à l\'accueil</a></p>
					    		</div></div>';

					}else{

				 		$data = array('upload_data' => $this->upload->data());
					    $this->formation_model->ajouter_formation();
	                		echo '<div class="alertnews" ><div class="alert alert-success">
					    		<button type="button" class="close" data-dismiss="alert">&times;</button>
					    		<strong></strong> Votre Formation a été enregistrée.
					   	 		<p><a href="'.base_url().'">Retours à l\'accueil</a></p>
					    		</div></div>'; 
					    	
						}
// Fin de Controle Num Formation
			}
// Fin de Validation Formaulaire
	}

	
	public function modifier()

	{
   		 $this->layout->view('formation/formation_modifier');

	}

	
	public function ajaxmodifierformation()

	{
		$this->load->model('formation_model');
		$id = $this->uri->segment(3);
		$data['id'] = $this->formation_model->get_formation($id);
		$this->load->view('ajax/ajax_modifier_formation',$data);
	}


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
	
	public function ajaxsupprimer()

	{
		$this->load->model('formation_model');
		$id = $this->uri->segment(3);
		$data['get'] = $this->formation_model->get_formation($id);
		$this->load->view('ajax/ajax_delete_formation',$data);

	}

	public function rechercher()

	{
    $this->layout->view('formation/formation_rechercher');

	}

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

	
	public function choix()

	{
    	$this->layout->view('formation/formation_choix');

	}


	public function historique()

	{
    	$this->layout->view('formation/formation_historique');

	}

	public function liste()

	{
		$data['droits'] = $this->session->userdata('droits');
    	$this->layout->view('formation/formation_liste',$data);

	}


}

/* End of file ecampus_formation.php */
/* Location: ./application/controllers/ecampus_formation.php */