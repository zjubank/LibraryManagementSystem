<?php
	require 'dbconnect.php';
	require 'authcheck.php';
	$filename = $_FILES['file']['tmp_name']; 
	if (empty ($filename)) { 
		echo '<script>alert("请选择要导入的CSV文件！");</script>'; 
		//echo 'self.close(); ';
	} 
	$handle = fopen($filename, 'r'); 
	$result = input_csv($handle);
	$len_result = count($result); 
	if($len_result==0){ 
		echo '<script>alert("没有任何数据！");</script>'; 
		//echo 'self.close(); ';
	} 
	$data_values = "";
	for ($i = 0; $i < $len_result; $i++) {
		$bno = iconv("GB2312", "UTF-8", $result[$i][0]);
		$category = iconv("GB2312", "UTF-8", $result[$i][1]); 
		$title = iconv("GB2312", "UTF-8", $result[$i][2]); 
		$press = iconv("GB2312", "UTF-8", $result[$i][3]);
		$year = intval($result[$i][4]);
		$author = iconv("GB2312", "UTF-8", $result[$i][5]);
		$price = $result[$i][6];
		$total = $result[$i][7];
		$data_values .= "('$bno', '$category', '$title', '$press', $year, '$author', $price, $total, $total),"; 
	} 
	$data_values = substr($data_values, 0, -1);
	fclose($handle); 
	$query = mysql_query("INSERT INTO book (bno, category, title, press, year, author, price, total, stock) VALUES $data_values");
	if($query){ 
			echo '<script>alert("导入成功！");</script>'; 
			//echo 'self.close(); ';
	} else { 
			echo '<script>alert("导入失败！");</script>';
			//echo 'self.close(); '; 
	}	
	
	function input_csv($handle) { 
		$out = array (); 
		$n = 0; 
		while ($data = fgetcsv($handle, 10000)) { 
			$num = count($data); 
			for ($i = 0; $i < $num; $i++) { 
				$out[$n][$i] = $data[$i]; 
			} 
			$n++; 
		} 
		return $out; 
	} 
?>