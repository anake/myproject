<?php
class goldData
{
	var $url = 'http://www.logammulia.com/gold-bar-id';
	
	private function connect()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);
		return $output;
	}
	
	private function parseData($html)
	{
		//call DOMDocument
		$dom = new DOMDocument();
		$dom->loadHTML($html);
		//call DOMXPath
		$xpath = new DOMXPath($dom);
		$tags = $xpath->query('//table[@id="table-goldprice"]/tbody/tr/td');
		$arr = array();
		foreach ($tags as $index => $tag) {		
				array_push($arr, $tag->nodeValue);
		}
		return $arr;
	}
	
	public function getData()
	{
		$html = $this->connect();
		$data = $this->parseData($html);
		return $data;
		//return $html;
	}
}
?>