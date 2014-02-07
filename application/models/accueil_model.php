<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accueil_model extends CI_Model {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_news()
	{
		$this->db->from('news');
		$this->db->order_by('date_news', 'desc');
		$query = $this->db->get();
		if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
            {
                $data[] = $row;
            }
            return $data;
        } 
	}

	public function vote()
	{
		$ar = array('formation.ref_formation','users.nom_users','users.prenom_users','vote.date_vote','vote.commentaires','vote.vote');
		$table = array('formation','users','vote');
		$where = "vote.id_users = users.id_users AND vote.id_formations = formation.id_formation";

		$this->db->distinct($ar);
		$this->db->where($where);
		$this->db->order_by('date_vote');
		$query = $this->db->get($table, 5);

		if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
            {
                $donnee[] = $row;
            }
            return $donnee;
        } 
		
	}

	public function insertColor()
	{
		$color = $this->input->post('colors');
		$autor = $this->session->userdata('logged_in');
        $id = $autor['id'];
		$tab = array (
			'color' => $color,
			'id_users' => $id
			);
		$query = $this->db->query("SELECT * FROM configuration WHERE id_users = '$id'");

		if($query -> num_rows() == 0){

		$this->db->insert('configuration', $tab);

		}else{

		$this->db->where('id_users', $id);
		$this->db->update('configuration', $tab);
	
	}

	}

	public function getColor()
	{
		$autor = $this->session->userdata('logged_in');
        $id = $autor['id'];

        $where = ("id_users = '$id'");

        $this->db->select('*');
        $this->db->from('configuration');
        $this->db->where($where);
        $query = $this->db->get();

        return $query->result_array();


	}

}

/* End of file Accueil_model.php */
/* Location: ./application/models/Accueil_model.php */