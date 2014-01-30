<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Group_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function categorie_group($user)
	{
		$this->db->select('categorie');
		$this->db->from('users');
		$this->db->where('id_users', $user);	
		$query = $this->db->get();

		if ($query->num_rows() > 0) {

			return $query->result();

		}else{

			return FALSE;
		}
	}

	public function get_group($cat)
	{
		$a = array ('categorie','id_users','nom_users','prenom_users','email_users','tel_users','nni','picture_users','id_groupe','trig_groupe');
		$table = array ('users','groupe');
		$where = "categorie = $cat AND id_groupe = categorie";

		$this->db->distinct($a);
		$this->db->from($table);
		$this->db->where('categorie', $cat);
		$this->db->where($where);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {

			return $query->result_array();

		}else{

			return FALSE;
		}


	}

}

/* End of file group_model.php */
/* Location: ./application/models/group_model.php */