<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newsmodel extends CI_Model {

	public $variable;

	public function __construct()

	{

	parent::__construct();
	
		
	}


	/**************************************************************************/

	public function get_news()
	{

	return $this->db->get('news')->result_array();

	}

	/**************************************************************************/

	public function get_news_where()
	{

	$id=$this->uri->segment(3); 
	return $this->db->get_where('news', array('id_news' => $id))->result_array();

	}

	/**************************************************************************/


	public function ajouter_news()
	{

	$titre = $this->input->post('titre');
	$contenu = $this->input->post('contenu');
	$data = array('titre_news' => $titre,
				  'content_news' => $contenu);
	$this->db->insert('news',$data);

	}

	/**************************************************************************/

	public function supprimer_news($id)
	{

	$this->db->where('id_news',$id);
    $this->db->delete('news');

	}

	/**************************************************************************/

}

/* End of file newsModel.php */
/* Location: ./application/models/newsmodel.php */