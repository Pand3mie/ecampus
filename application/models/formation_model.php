<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formation_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}


	// Ajouter une formation

	public function ajouter_formation($picture)
	{
	$statut = $this->input->post('check');
    if ($statut == 1) {
        $statut = 'disponible';
    } else {
        $statut = 'non disponible';
    }
    $autor = $this->session->userdata('logged_in');
	$tab = array(
   'ref_formation' => $this->input->post('refformation', TRUE),
   'titre_formation' => $this->input->post('titre_formation', TRUE),
   'motclef_formation' => $this->input->post('mcformation', TRUE),
   'contenu_formation' => $this->input->post('contenu_formation', TRUE),
   'statut_formation' => $statut,
   'date_formation' => $this->input->post('date_formation', TRUE),
   'autor_formation' => $autor['nom'].' '.$autor['prenom'],
   'niveau_formation' => $this->input->post('niveau_formation', TRUE),
   'fichierjoint' => $picture
	);
	$value = $this->input->post('refformation', TRUE);
	$this->db->select('ref_formation');
	$this->db->from('formation');
	$this->db->where('ref_formation', $value);
	$query = $this->db->get();

	if($query -> num_rows() == 0){

	$this->db->insert('formation', $tab);

	}else{

	return false;
	
	}
}

	public function check_formation($num)
	{
		$this->db->select('ref_formation');
		$this->db->from('formation');
		$this->db->where('ref_formation', $num);
		$query = $this->db->get();

		if($query -> num_rows() == 0){

			return true;

			}else{

			return false;
			
			}

	}
	// List des fonctions utilisateurs
	public function getfunction_users()
	{

	$query = $this->db->get('groupe');
	return $query->result();
	}

	public function get_formation($id)
	{
	return $this->db->get_where('formation', array('id_formation' => $id))->result_array();

	}

	public function formation()
	{
	return $this->db->get('formation')->result_array();
	}


	public function supprimer_formation($id)
	{
	$this->db->where('id_formation',$id);
    $this->db->delete('formation');

	}

	public function demandeformation($object, $message)
	{    

	$this->email->from('nicolasfouche.pro@hotmail.fr', 'Nicolas Fouché');
	$this->email->to('nicolasfouche.pro@hotmail.fr'); 
	$this->email->subject($object);
	$this->email->message($message);	
	$this->email->send();

	}
	public function modifformation()
	{


	$idf = $this->input->post('id_formation', TRUE);
	$ref = $this->input->post('refformation', TRUE);
	$titre = $this->input->post('titre_formation', TRUE);
	$motclef = $this->input->post('mcformation', TRUE);
	$niveau = $this->input->post('niveau_formation', TRUE);
	$texte = stripslashes(nl2br($this->input->post('contenu_formation', TRUE)));
	$date = $this->input->post('date_formation', TRUE);

	$data = array(
	               'ref_formation' => $ref,
	               'titre_formation' => $titre,
	               'motclef_formation' => $motclef,
	               'contenu_formation' => $texte,
	               'date_formation' => $date,
	               'niveau_formation' => $niveau
	            );
	$this->db->where('id_formation', $idf);
	$this->db->update('formation', $data); 
	}


}

/* End of file formation_model.php */
/* Location: ./application/models/formation_model.php */