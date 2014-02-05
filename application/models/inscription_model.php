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
}

/* End of file inscription_model.php */
/* Location: ./application/models/inscription_model.php */