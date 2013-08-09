<?php if(!defined('BASEPATH'))exit('no direct sripts allowed');

class User_model extends CI_Model
{
	protected $_table = 'user';
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function check($username, $password)
	{
		$arrWhere = array('username'=>$username, 'password'=>$password, 'status'=>1);
		$query = $this->db->select('id, username, password')->where($arrWhere)->limit(1)->get($this->_table);
		return $query->num_rows();
	}
}