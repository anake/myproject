<?php if(!defined('BASEPATH'))exit('no direct sripts allowed');\

class Mata_uang_model extends CI_Model
{
	protected $_table = 'mata_uang';
	
	function __construct()
	{
		parent::__construct();
	}
	
	function get_list_mata_uang()
	{
		$data = $this->db->select('id, nama_mata_uang, kode')->get($this->_table);
		return $data->result_array();
	}
}