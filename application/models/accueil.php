<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accueil extends CI_Model {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_news()
	{
		$this->db->from('news');
		$this->db->order_by("date_news", "desc");
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

}

/* End of file Accueil.php */
/* Location: ./application/models/Accueil.php */