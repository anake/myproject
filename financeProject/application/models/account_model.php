<?php if(!defined('BASEPATH'))exit('no direct sripts allowed');

class Account_model extends CI_Model
{
	var $_table = 'account';
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function get_all_account()
	{
	//	$result = $this->db->select('id, nama_akun, Jumlah')->where(array('status'=>1, ''))->get($this->_table);
	}
	
	public function create_account()
	{
	
	}
}