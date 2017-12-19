<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Pmb extends MX_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$html=$this->load->view('html');
		// $this->output->set_output($html);l

	}
}

/* End of file pmb.php */
/* Location: ./application/modules/pmb/controllers/pmb.php */
 ?>