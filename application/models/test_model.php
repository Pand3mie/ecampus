<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

function get_data(){

$type = $this->input->post('type');
 
if($type != 1){
return array();
}
 
return array(
array(
'name' => 'Abigail',
'email' => 'ut.sem.Nulla@duinecurna.org',
'registered_date' => '01/17/2014'
),
array(
'name' => 'Ralph',
'email' => 'ultrices.posuere@Sed.org',
'registered_date' => '10/08/2013'
),
);
}
 }



/* End of file test_model.php */
/* Location: ./application/models/test_model.php */