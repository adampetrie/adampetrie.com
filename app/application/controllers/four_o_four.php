<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Four_o_four extends CI_Controller 
{
	private $data = array();

	public function index()
	{
		$this->data['error'] = TRUE;
	
		$this->load->view('includes/header', $this->data);
		$this->load->view('four_o_four');
		$this->load->view('includes/footer');
	}
}

/* End of file four_o_four.php */
/* Location: ./application/controllers/four_o_four.php */