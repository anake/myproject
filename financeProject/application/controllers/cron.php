<?php if(!defined('BASEPATH'))exit('no direct sripts allowed');

class Cron extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	//fungsi untuk mendapatkan kode mata uang
	/*public function get_data()
	{
		$params['url'] = 'http://www.bi.go.id/biweb/Templates/Moneter/kode2.aspx';
		$this->load->library('scrapper', $params);
		$data = $this->scrapper->getData('//td[@bgcolor="ffffff"]');
		for($i=0;$i<count($data);$i+=2)
		{
			$this->db->insert('mata_uang', array('nama_mata_uang'=>$data[$i+1], 'kode'=>$data[$i], 'status'=>1));
		}
	}*/
	
	public function get_gold_price()
	{
		error_reporting(1);
		$params['url'] = 'http://www.logammulia.com/gold-bar-id';
		$this->load->library('scrapper', $params);
		$data = $this->scrapper->getData('//table[@id="table-goldprice"]/tbody/tr/td');
		$this->db->insert('nilai_invest', array('id_inv'=>5,'tanggal'=>date('Y-m-d'), 'nilai'=>$data[46], 'status'=>1));
	}
	
	public function get_kurs()
	{
		error_reporting(1);
		$params['url'] = 'http://www.bni.co.id/id-id/informasivalas.aspx';
		$this->load->library('scrapper', $params);
		$this->load->model('mata_uang_model');
		$data = $this->scrapper->getData('//tr[@class="odd"]/td|//tr[@class="even"]/td');
		$data_kurs = $this->mata_uang_model->get_list_mata_uang();
		foreach($data_kurs as $item)
			$data_kurs2[$item['kode']] = $item['id'];
		for($i=0;$i<count($data);$i+=3)
		{
			$arr = array('id_mata_uang' => 23, 'id_mata_uang2' => $data_kurs2[$data[$i]], 'nilai_jual' => str_replace(",00","",str_replace(".", "", $data[$i+1])), 'nilai_beli' =>str_replace(",00","",str_replace(".", "", $data[$i+2])), 'tanggal' => date('Y-m-d'), 'status' =>1);
			$this->db->insert('nilai_kurs', $arr);
		}
	}
}