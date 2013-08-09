<?php if(!defined('BASEPATH'))exit('no direct sripts allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->userdata('is_login') == TRUE)
		{
			$data['user'] = $this->session->userdata('user');
			$this->load->view('home/main', $data);
		}
		else
		{
			$data['user'] = 'anonymouse';
			$this->load->view('login/main', $data);
		}
	}
	
	public function check_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('user_model');
			$result = $this->user_model->check($username, $password);
			if($result == 1)
			{
				$this->session->set_userdata(array('username'=>$username, 'is_login'=>TRUE));
				redirect($this->config->base_url()."index.php/home");			
			}
			else
				$this->session->set_flashdata('error', 'Username and password do not match');
				redirect($this->config->base_url()."index.php/login");
		}
		else
			$this->load->view('login/main');
	}
}