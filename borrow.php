<!DOCTYPE html>

<?php
if(!isset($_SESSION)){  
   session_start();  
} 
$bno=$_POST["bno"];
$cno=$_SESSION["cno"];
$aid=$_SESSION["aname"];
 ?>
	 
<html lang="zh-CN">
<script type="text/javascript">
  window["_gaUserPrefs"] = { ioo : function() { return true; } }
</script>
<?php 
	require 'dbconnect.php';
	require 'authcheck.php';
?>
  <title>图书借阅</title>

  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/bootstrap-theme.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap.min.js"></script>
 

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>



<?php

$query = mysql_query("select stock from book where bno='$bno';");
$result = mysql_affected_rows();
$stock = mysql_fetch_array($query,0);
if($stock>0)
{
	mysql_query("update book set stock=stock-1 where bno='$bno';");
	mysql_query("insert into borrow(cno, bno, borrow_date, aid) values ('$cno', '$bno',NOW(), '$aid' );");
	
	echo"<script>alert('借书成功！');";
	echo "self.close();</script>";
	
}
else
{
	if($result<=0)
	{
		echo "<script>alert('书库中无此书');";
		echo "self.close();</script>";
	}
	else
	{
		$rt=mysql_query("select DATE_ADD(min(borrow_date), INTERVAL 90 DAY) AS exptday from borrow where bno=$bno;");
		$res = mysql_fetch_array($rt);
		$exptday = $res["exptday"];
		echo "<script>alert('该书无库存,最近归还时间：$exptday');";
		echo "self.close();</script>";
	}
	
}

?>

</body>
</html>