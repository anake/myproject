<?php if(!defined('BASEPATH'))exit('no direct sripts allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		if($this->session->userdata('is_login') != TRUE)
			redirect($this->config->base_url()."index.php/login");
		else
		{
			$this->load->library('kontan');
			$this->load->helper('displaytable');
			$datareksadana = $this->kontan->getdata('unitlink', 411571,  '2013-07-01', date('Y-m-d'), NULL,100);
			$data['tablereksa'] = displayTable($datareksadana, 'unitlink');
			$data['user'] = $this->session->userdata('username');
			$this->load->view('/home/main', $data);
		}
	}
	
	function create_account()
	{
		$account = $this->input->post('namaakun');
		$amount = $this->input->post('jumlah');
		$bank = $this->input->post('idbank');
		$this->db->insert('account', array('nama_akun'=>$account, 'Jumlah'=>$amount, 'id_bank'=>$bank, 'status'=>1));
		//echo $account;
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect($this->config->base_url()."index.php/login");
	}
}