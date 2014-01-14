<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usersmodel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('array');
		$this->load->library('encrypt');
		
	}

	public function ajaxusers()

	{
			$rows = array();
			$name = $this->input->post('name');
			$this->db->select('*');
			$this->db->from('users');
			$this->db->like('nom_users',$name);
			$this->db->or_like('prenom_users',$name);
		    $this->db->or_like('nni',$name);
		    $query = $this->db->get();
		    
		     if($query->num_rows() > 0)
		   {
		        
		        foreach($query->result_array() as $row)
				    {    
				        $rows[] = $row; //add the fetched result to the result array;
				    }

   					return $rows; // returning rows, not row

		        
		    }
		    else
		    {
		        return FALSE;
		    }
					
			}

	public function getuser()

	{
		$getid = $this->input->post('getid');
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('groupe', 'users.categorie = groupe.id_groupe');
		$this->db->where('users.id_users', $getid);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {

			return $query->result_array();

		}else{

			return FALSE;
		}

	}

	public function getformation()
	{
		$getid = $this->input->post('getid');
		$this->db->select('*');
		$this->db->from('suivi_formation');
		$this->db->join('formation', 'suivi_formation.id_formation = formation.id_formation');
		$this->db->where('suivi_formation.id_users', $getid);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {

			return $query->result_array();

		}else{

			return FALSE;
		}

	}
	public function getgroupe()
	{
		$query = $this->db->get('groupe');
		return $query->result_array();

	}


	public function newuser($picture)
	{
		$insert = array (
  			'nom_users' => $this->input->post('nom'),
  			'prenom_users' => $this->input->post('prenom'),
  			'categorie' => $this->input->post('user_select'),
  			'nni' => $this->input->post('nni'),
  			'email_users' => $this->input->post('mail'),
  			'picture_users' => $picture,
  			'tel_users' => $this->input->post('tel')
  		);

  		$this->db->insert('users', $insert);
	}
}

/* End of file usersmodel.php */
/* Location: ./application/models/usersmodel.php */