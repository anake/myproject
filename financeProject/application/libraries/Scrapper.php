<?php if(!defined('BASEPATH'))exit('no direct sripts allowed');

class CI_Scrapper
{
	var $url;
	
	public function __construct($params)
	{
		$this->url = $params['url'];
	}
	
	private function connect()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);
		return $output;
	}
	
	private function parseData($html, $query)
	{
		//call DOMDocument
		$dom = new DOMDocument();
		$dom->loadHTML($html);
		//call DOMXPath
		$xpath = new DOMXPath($dom);
		$tags = $xpath->query($query);
		//print_r($tags);exit;
		$arr = array();
		foreach ($tags as $index => $tag) {		
				array_push($arr, $tag->nodeValue);
				//echo $tag->nodeValue; 
		}
		return $arr;
	}
	
	public function getData($queryTag)
	{
		$html = $this->connect();
		//echo $html;exit;
		$data = $this->parseData($html, $queryTag);
		return $data;
	}
}