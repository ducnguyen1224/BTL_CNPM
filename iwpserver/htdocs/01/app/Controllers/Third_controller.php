<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Third_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('third_view');
	}

}

/* End of file Third_controller.php */
/* Location: ./application/controllers/Third_controller.php */