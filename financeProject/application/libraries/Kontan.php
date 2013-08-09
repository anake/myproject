<?php if(!defined('BASEPATH'))exit('no direct sripts allowed');

	class CI_Kontan
	{
		var $urlReksadana = 'http://pusatdata.kontan.co.id/reksadana/ajax/show_reksadana_table/';
		var $urlUnitLink = 'http://pusatdata.kontan.co.id/unitlink/ajax/nilai_produk_unitlink/';
		
		private function connectReksadana($postData)
		{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->urlReksadana);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
			$output = curl_exec($ch);
			curl_close($ch);
			return $output;
		}
		
		private function connectUnitLink($url)
		{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$output = curl_exec($ch);
			curl_close($ch);
			return $output;
		}
		
		public function getData($category, $productId, $startDate, $endDate, $period, $num = 1)
		{
			if($category == 'reksadana')
			{
				$post_data = array (  
				"id_mkt" => $productId,  
				"startdate" => $startDate,  
				"enddate" => $endDate,
				"period" => $period
				);
				$data = $this->connectReksadana($post_data);
			}
			else
			{
				$url = $this->urlUnitLink."?id=".$productId."&num=".$num."&tanggal_mulai=".$startDate."&tanggal_akhir=".$endDate."";
				$data = $this->connectUnitLink($url);
			}
			return $data;
		}
		public function geturl()
		{
			return $this->urlReksadana;
		}
	}
?>