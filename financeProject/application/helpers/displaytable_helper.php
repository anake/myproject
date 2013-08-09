<?php
function displayTable($html, $category)
{
	//call DOMDocument
	$dom = new DOMDocument();
	$dom->loadHTML($html);
	//call DOMXPath
	$xpath = new DOMXPath($dom);
	$tags = ($category == 'unitlink')? $xpath->query('//div[contains(@class, "fleft") and not(contains(@class, "cnormal")) and not(contains(@class, "tabel_35")) ]'):$xpath->query('//div[@class="tabel_nilai"]');
	//form the table
	$arr = array();
	foreach ($tags as $index => $tag) {		
			array_push($arr, $tag->nodeValue);
	}
	if($category == 'unitlink')
	{
		$table = "<div><table border='1'><tr><td>tanggal</td><td>nab</td></tr>";
		for($i=0;$i<count($arr);$i+=2)
		{
			$table .= "<tr><td>".$arr[$i]."</td><td>".$arr[$i+1]."</td></tr>";
		}
		$table .= "</table></div>";
	}
	else
	{
		$table = "<div><table border='1'><tr><td>tanggal</td><td>nab</td><td>daily return</td></tr>";
		for($i=0;$i<count($arr);$i+=4)
		{
			$table .= "<tr><td>".$arr[$i]."</td><td>".$arr[$i+1]."</td><td>".$arr[$i+3]."</td></tr>";
		}
		$table .= "</table></div>";
	}
	return $table;
}
?>