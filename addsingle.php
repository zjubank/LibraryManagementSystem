<?php
	require 'dbconnect.php';
	require 'authcheck.php';
	$bno = $_POST["bno"];
	$category = $_POST["category"];
	$title = $_POST["title"];
	$press = $_POST["press"];
	$year = $_POST["year"];
	$author = $_POST["author"];
	$price = $_POST["price"];
	$total = $_POST["total"];
	$data_values = "('$bno', '$category', '$title', '$press', $year, '$author', $price, $total, $total)";
	
	$query = mysql_query("SELECT bno FROM book where bno='$bno';");
	$result = mysql_affected_rows();
	if($result==0)
	{
		$query = mysql_query("INSERT INTO book (bno, category, title, press, year, author, price, total, stock) VALUES $data_values;");
		if($query){ 
			echo '<script>alert("添加成功！");'; 
			echo 'self.close(); </script>';
		} else { 
			echo '<script>alert("添加失败！");'; 
			echo 'self.close(); </script>'; 
		}	
	}
	else
	{
		$query = mysql_query("UPDATE book SET total=total+'$total', stock=stock+'$total' where bno='$bno';");
		if($query){ 
			echo '<script>alert("更新成功！");'; 
			echo 'self.close(); </script>';
		} else { 
			echo '<script>alert("更新失败！");'; 
			echo 'self.close(); </script>'; 
		}
	}
?>