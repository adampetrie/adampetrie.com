<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{
	private $data = array();

	public function index()
	{
		$this->load->view('home');
	}
	
	// ------------------------------------------------------------------------
	
	public function submit_contact()
	{
		$this->load->library('form_validation');
		
		//Vaidation rules
		$this->form_validation->set_rules('name', 'Username', 'callback_name');
		$this->form_validation->set_rules('email', 'Email', 'callback_email');
		$this->form_validation->set_rules('message', 'Message', 'callback_message');
		$this->form_validation->set_rules('captcha', 'Captcha', 'callback_captcha');
	
	
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('contact_form');
		}
		else
		{
			$this->load->library('email');
			
			$this->email->from($this->input->post('email'), $this->input->post('name'));
			$this->email->to('contact@adampetrie.com');
			
			$this->email->subject('Contact From Submission');
			$this->email->message($this->input->post('message'));
			
			$this->email->send();
			
			$this->load->view('thank_you');		
		}
	}
	
	// ------------------------------------------------------------------------
	
	public function name($name)
	{
		if(trim($name) == '')
		{
			$this->form_validation->set_message('name', "Please provide a name. I don't care for anonymous emails.");
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	// ------------------------------------------------------------------------
	
	public function email($email)
	{
		$this->load->helper('email');
	
		if(trim($email) == '')
		{
			$this->form_validation->set_message('email', "Please provide a email address. Come on!");
			return FALSE;
		}
		elseif( ! valid_email($email))
		{
			$this->form_validation->set_message('email', "Something's not right, please enter a valid email address.");
			return FALSE;
		}
		else
		{
			return TRUE;
		}	
	}
	
	// ------------------------------------------------------------------------
	
	public function message($message)
	{
		if(trim($message) == '')
		{
			$this->form_validation->set_message('message', "If you're not going to send a message, what's the point?");
			return FALSE;
		}
		else
		{
			return TRUE;
		}	
	}
	
	// ------------------------------------------------------------------------
	
	public function captcha($captcha)
	{
		if(strcasecmp(trim($captcha), 'blue') != 0)
		{
			$this->form_validation->set_message('captcha', "You missed the skill testing question. Hint: The answer is blue.");
			return FALSE;
		}
		else
		{
			return TRUE;
		}	
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */