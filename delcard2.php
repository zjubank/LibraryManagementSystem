<?php
	require 'dbconnect.php';
	require 'authcheck.php';
	$cno = $_POST["cno"];
	$query = mysql_query("SELECT cno FROM card WHERE cno='$cno';");
	$result = mysql_affected_rows();
	if( $result == 0 ){
		echo '<script>alert("查无此人！");'; 
		echo 'self.close(); </script>';
	}
	else{
		$query = mysql_query("SELECT * FROM borrow WHERE cno='$cno' and return_date is NULL");
		$result = mysql_affected_rows();
		if($result>0){
			echo '<script>alert("该用户有'.$result.'本书未还！");'; 
			echo 'self.close(); </script>';
		}
		else{
			$query1 = mysql_query("DELETE FROM borrow WHERE cno='$cno';");
			$result1 = mysql_affected_rows();
			$query2 = mysql_query("DELETE FROM card WHERE cno='$cno';");
			$result2 = mysql_affected_rows();
#echo $result1, $result2;
			if($result==0 or( $result1>0 and $result2>0 ) )
			{
				echo '<script>alert("删除成功！");'; 
				echo 'self.close(); </script>';
			}
			else
			{
				echo '<script>alert("删除失败！");'; 
				echo 'self.close(); </script>'; 
			}
		}
	}
?>