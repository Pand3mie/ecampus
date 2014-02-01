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

	public function allformation()
	{
		return $this->db->get('formation')->result();
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
		return true;
	}


	public function search_formation($value)
	{

		$this->db->select('*');
		$this->db->like('motclef_formation',$value);
		$this->db->or_like('titre_formation',$value);
		$this->db->or_like('contenu_formation',$value);
		$this->db->from('formation');
		$query = $this->db->get();

		return $query->result_array();

	}

	public function update_count_formation($id)
	{
		$this->db->where('id_formation', $id);
		$this->db->set('nbre_vue_formation','nbre_vue_formation + 1', FALSE);
		$this->db->update('formation');
		return true;
	}
	public function formation_stars($id)
	{
		$this->db->select('vote,id_formations');
		$this->db->where('id_formations', $id);
		$this->db->from('vote');
		$query = $this->db->get();
		return $query->result_array();
		
		
	}

	public function choixformation()
	{
		$dateC = date('Y-m-d');
		$autor = $this->session->userdata('logged_in');
        $utilisateur = $autor['id'];
        $array = array('date_choix' => $dateC, 'id_users' =>  $utilisateur);

		$this->db->where($array);
		$this->db->from('choix_formation'); 
		$query = $this->db->get();

		if($query -> num_rows() == 0){

			return true;

			}else{

			return false;
			
			}

           

	}

	public function histoformation()
	{

	$autor = $this->session->userdata('logged_in');
    $users = $autor['id'];
    $array = array ('suivi_formation.id_users',
	'suivi_formation.id_formation',
	'suivi_formation.vote_dispo',
	'formation.id_formation',
	'formation.ref_formation',
	'formation.titre_formation',
	'formation.date_formation',
	'formation.contenu_formation',
	'formation.titre_formation');
	$where = "suivi_formation.id_formation = formation.id_formation AND suivi_formation.id_users = '$users'" ;

    $this->db->distinct();
    $this->db->select($array);
    $this->db->from('suivi_formation,formation');                  
    $this->db->where($where);

    $query = $this->db->get();
    return $query->result_array();
    }

    public function insert_comment()
    {
        	$score = $this->input->post('score', TRUE);
            $users = $this->input->post('users', TRUE);
            $id = $this->input->post('id', TRUE);
            $commentaire = $this->input->post('commentaireF', TRUE);
            $date = date('Y-m-d');

            $data = array(
            	'vote' => $score,
            	'commentaires' => $commentaire,
            	'id_users' => $id,
            	'id_formations' => $users,
            	'date_vote' => $date
            	);
            $this->db->insert('vote', $data);
    }

    public function update_comment()
    {

    	$users = $this->input->post('users', TRUE);
        $id = $this->input->post('id', TRUE);
        $data = array(
               'vote_dispo' => '1',
               
            );
        $where = "id_users = '$id' AND id_formation = '$users' ";
		$this->db->where($where);
		$this->db->update('suivi_formation', $data); 
		return true;
    	
    }

    public function changestatut()
    {
    	$id = $this->input->post('getidformation', TRUE);
		$statut = $this->input->post('statutinfo', TRUE);
		 if($statut == 1){
     		$statut = 'non disponible';
 		}else{
     		$statut = 'disponible';
		}
		$where = "id_formation = '$id'";
		$data = array('statut_formation' => $statut);

		$this->db->where($where);
		$this->db->update('formation',$data);
		return true;
    }

}

/* End of file formation_model.php */
/* Location: ./application/models/formation_model.php */