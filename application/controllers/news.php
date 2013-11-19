<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	/**************************************************************************/

	public function ajouter()

	{

	$this->layout->view('news/news_ajouter');
	$this->form_validation->set_rules('titre', 'Titre', 'required');
    $this->form_validation->set_rules('content', 'Content', 'required');

    if ($this->form_validation->run() == FALSE) {

    	 echo form_error('titre', '<div id="error_news" class="alert alert-error" ><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>'); 
    	 echo form_error('content', '<div id="error_news" class="alert alert-error" ><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
    }else{

	$this->load->model('newsmodel'); 
	$submit = $this->input->post('submit');

            if($submit == "ajouter"){

                $this->newsmodel->ajouter_news();
                echo '<div class="alertnews" ><div class="alert alert-success">
    	<button type="button" class="close" data-dismiss="alert">&times;</button>
    	<strong></strong> Votre news a été enregistrée.
   	 	<p><a href="'.base_url().'">Retours à l\'accueil</a></p>
    	</div></div>'; 

                }
            }

         }  


   
            	
   

    /**************************************************************************/
	
	public function modifier()
	{

	$this->layout->view('/news/news_modifier');

	}
	
	/**************************************************************************/

	public function supprimer()
	{

	$this->load->model('newsmodel');
	$data['news']=$this->newsmodel->get_news();
	$id = $this->uri->segment(3);
    $this->layout->view('news/news_supprimer',$data);
    $submit = $this->input->post('submit');

	   if($submit == "supprimer")
	   			{
            	$this->newsmodel->supprimer_news($id);
            	// redirect to person list page
        		redirect('ecampus/index','refresh');
            	   	}

	}

	/**************************************************************************/

	public function ajaxsupprimer()
	{

	$this->load->model('newsmodel');
	$id = $this->uri->segment(3);
	$data['news'] = $this->newsmodel->get_news_where($id);
	$this->load->view('ajax/ajaxdelete',$data);
	
	}
	
	/**************************************************************************/


}