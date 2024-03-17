<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Second_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$sdt['dssdt']= array('0946095534','0906170954','0943897062' );
		$this->load->view('second_view',$sdt);
	}

}

/* End of file Second_controller.php */
/* Location: ./application/controllers/Second_controller.php */