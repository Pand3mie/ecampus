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
		$data = $this->color->background();
		$this->load->model('formation_model');
		

// completion Select et passage data
		
		$data['fonction'] = $this->formation_model->getfunction_users();
		$this->layout->view('formation/formation_ajouter',$data);
		$formulaire = $this->input->post('confirm_ajouter', TRUE);

		if ($formulaire)
		{
     
// Controle si Numéro formation Existe deja
		$num = $this->input->post('refformation', TRUE);
		$query = $this->formation_model->check_formation($num);

	if(!$query)
	{
		
			echo '<div class="alertnews" ><div class="alert alert-success">
	    		<button type="button" class="close" data-dismiss="alert">&times;</button>
	    		<strong></strong> La Formation '.$num.' existe deja.Merci de saisir un autre numéro
	   	 		<p><a href="'.site_url("accueil").'">Retours à l\'accueil</a></p>
	    		</div></div>';

	}else{

		//Appel fonction codeigniter upload

		$config['upload_path'] = './upload/formation/';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['file_name'] = $this->input->post('mydoc');
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->set_allowed_types('*');
 		$this->upload->do_upload('mydoc');
 		$pic = $this->upload->data();
		$picture = $pic ['file_name'];
	    $this->formation_model->ajouter_formation($picture);
	  
    		echo '<div class="alertnews" ><div class="alert alert-success">
	    		<button type="button" class="close" data-dismiss="alert">&times;</button>
	    		<strong></strong> Votre Formation a été enregistrée.
	   	 		<p><a href="'.site_url("accueil").'">Retours à l\'accueil</a></p>
	    		</div></div>'; 

	    	
						}

		}
			
// Fin de Validation Formaulaire
	}

	
	public function modifier()

	{
		$data = $this->color->background();
		 $this->load->model('formation_model');
		 $data['allformation'] = $this->formation_model->allformation();	
   		 $this->layout->view('formation/formation_modifier',$data);
   		 if ($this->input->post('confirm_modif'))
   		 {	
   		 	$this->load->model('formation_model');
   		 	$this->formation_model->modifformation();
   		 	redirect('accueil','refresh');
   		 }

	}

	
	public function ajaxmodifierformation()

	{
		$data = $this->color->background();
		$this->load->model('formation_model');
		$id = $this->uri->segment(3);
		$data['id'] = $this->formation_model->get_formation($id);
		$this->load->view('ajax/ajax_modifier_formation',$data);
	}


	public function supprimer()

	{
		$data = $this->color->background();
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
		$data = $this->color->background();
		$this->load->model('formation_model');
		$id = $this->uri->segment(3);
		$data['get'] = $this->formation_model->get_formation($id);
		$this->load->view('ajax/ajax_delete_formation',$data);

	}

	public function rechercher()

	{
	$data = $this->color->background();
    $this->layout->view('formation/formation_rechercher',$data);
	}

	public function ajax_recherche()
	{
	$data = $this->color->background();
	$this->load->model('formation_model');
	$value = $this->uri->segment(3);
	$data['getValue'] = $this->formation_model->search_formation($value);
	$this->load->view('ajax/ajax_search_formation',$data);

	}

	public function ajax_affiche_formations()
	{
		$data = $this->color->background();
		$this->load->model('formation_model');
		$id = $this->uri->segment(3);
		$this->formation_model->update_count_formation($id);
		$data['stars'] = $this->formation_model->formation_stars($id);
		$data['get'] = $this->formation_model->get_formation($id);
		$this->load->view('ajax/ajax_affiche_formations',$data);
		
	}

	public function demande()

	{
		$data = $this->color->background();
		$mail = $this->input->post('confirm_mail');

		if ($mail == 'Envoyer'){

		$message = $this->input->post('message_formation', TRUE);
		$object = $this->input->post('Objet_demande', TRUE);
		$this->load->model('formation_model');
		$method = $this->formation_model->demandeformation($object, $message);
			//=====Envoi de l'e-mail.
		redirect('accueil','refresh');
	    
	        //echo '    <div class="alertmail" ><div class="alert alert-success">
	        //<button type="button" class="close" data-dismiss="alert">&times;</button>
	        //<strong></strong> Votre message à été enregistré.
	        //<p><a href="accueil.php">Retours à l\'accueil</a></p>
	        //</div></div>';

	    }
	   		
	    $this->layout->view('formation/formation_demande',$data);
	}

	
	public function choix()

	{	
		$data = $this->color->background();
		$this->load->model('formation_model');
		$data['dispo'] = $this->formation_model->liste_formation();
		$data['count'] = $this->formation_model->choixformation();
    	$this->layout->view('formation/formation_choix',$data);
    	//$this->output->enable_profiler(TRUE);


	}

	public function ajax_choix_formation()
	{
		$data = $this->color->background();
		$this->load->model('formation_model');
		$this->formation_model->ajaxChoixFormation();
		$this->output->enable_profiler(TRUE);
		//$this->layout->view('ajax/ajax_choix_formation');
	}

	public function historique()

	{
		$data = $this->color->background();
		$user = $this->session->userdata('logged_in');
		$data['users'] = $user['id'];
		$this->load->model('formation_model');
		$data['histo'] = $this->formation_model->histoformation();
    	$this->layout->view('formation/formation_historique',$data);
    		$this->load->model('formation_model');
		$submit = $this->input->post('voteformation');
		//$this->output->enable_profiler(TRUE);
		if($submit == "update"){
		$this->formation_model->insert_comment();
		$this->formation_model->update_comment();
		redirect('accueil','refresh');

		}

	}

	public function ajaxcomment()
	{
		$data = $this->color->background();
		$data['id'] = $this->input->post('id', TRUE);
		$data['users'] = $this->input->post('users', TRUE);
		$data['titre'] = $this->input->post('titre', TRUE);
		$this->load->view('ajax/ajax_comment',$data);


	}



	public function liste()

	{	
		$data = $this->color->background();
		$user = $this->session->userdata('logged_in');
		$data['droits'] = $user['droits'];
		$this->load->model('formation_model');
		$data['getFormation'] = $this->formation_model->allformation();
    	$this->layout->view('formation/formation_liste',$data);

	}

	public function changestatut()
	{
		$data = $this->color->background();
		$this->load->model('formation_model');
		$this->formation_model->changestatut();
		$statut = $this->input->post('statutinfo', TRUE);
		redirect('formation/liste','refresh');
		if($statut == 1){
                echo '<div class="alert alert-success dispo">disponible</div>';
                    }else{
                echo '<div class="alert alert-error dispo">non disponible</div>'; }


	}


}

/* End of file ecampus_formation.php */
/* Location: ./application/controllers/ecampus_formation.php */