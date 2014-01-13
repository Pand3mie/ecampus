<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_logs extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_ip()
	
	{
		$this->db->select('*');
		$this->db->from('logs A');
		$this->db->join('users B', 'A.id_users = B.id_users');
		$this->db->order_by('time_connect', 'desc');
		$this->db->limit(30);
		return $this->db->get()->result_array();
	     //Requete d'origine;		
		 //$sql = mysql_query("SELECT * FROM logs AS a, users AS b WHERE a.id_users = b.id_users ORDER BY time_connect LIMIT 30");
	}

	public function supp_ip($idlog)
	{
	             
        if($idlog == 'all'){

        	$this->db->empty_table('logs');

               }else{

           	$this->db->empty_table('logs');
           	$this->db->order_by('id_logs', 'desc');
           	$this->db->limit($idlog);
    
            }
               
                         

	}

}

/* End of file model_logs.php */
/* Location: ./application/models/model_logs.php */
