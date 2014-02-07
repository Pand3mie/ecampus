<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Color
{
  protected 	$ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function background()
	{
	$this->ci->load->model('accueil_model');
	$data['color'] = $this->ci->accueil_model->getColor();

		return $data;
	}

}

/* End of file color.php */
/* Location: ./application/libraries/color.php */
