<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscription_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_inscrit()
	{
		$where = ("categorie = id_groupe");

		$this->db->select('*');
		$this->db->from('users,groupe');
		$this->db->where($where);
		$this->db->order_by('nom_users');
		$query = $this->db->get();

		return $query->result_array();

		}

		
                            

    public function select_formation()
    {
    	$auj = date('y-m-d');
    	$where = ("statut_formation = 'disponible' AND date_formation > '$auj'");
    	$this->db->select('*');
    	$this->db->from('formation');
    	$this->db->order_by('titre_formation');
    	$query = $this->db->get();

    	return $query->result_array();
    }

    public function inscription()
    {
    $agents = $this->input->post('choix_agent');
    $formations = $this->input->post('choix_formation');


    foreach($agents as $agent){
            foreach($formations as $formation){
                   
             $object[] = array(
                
               'id_formation' => $formation,
               'id_users' => $agent,
               'active' => '1');
         
             }
        }

        $this->db->insert_batch('suivi_formation', $object);
        
    }

    public function tri_formation($arg)
    {
        
        $date = date('y-m-d');

        $select = ("A.id_users,A.id_formation, B.id_users, B.nom_users,B.prenom_users,B.nni,c.titre_formation,c.date_formation, d.categorie_groupe,c.ref_formation");
        $where = ("A.id_users = B.id_users AND C.id_formation = A.id_formation AND D.id_groupe = B.categorie AND date_formation > $date ORDER BY $arg DESC");

        $this->db->from('suivi_formation AS A');
        $this->db->from('users AS B');
        $this->db->from('formation AS C');
        $this->db->from('groupe AS D');
        $this->db->where($where);
        $query = $this->db->get();

        return $query->result_array();
   }
 
}

/* End of file inscription_model.php */
/* Location: ./application/models/inscription_model.php */