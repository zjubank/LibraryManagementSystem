<!DOCTYPE html>
<?php 
  require 'dbconnect.php';
  require 'authcheck.php';

	$bno=$_POST["bno"];
	$cno=$_SESSION["cno"];

#	echo "'$bno','$cno'";
?>
	
<html lang="zh-CN">
<script type="text/javascript">
  window["_gaUserPrefs"] = { ioo : function() { return true; } }
</script>
<?php 
  require 'dbconnect.php';
  require 'authcheck.php';
?>
<head>
  <title>图书归还</title>

  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/bootstrap-theme.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>


<?php
$isbro=mysql_query("select * from borrow where ( bno='$bno' and cno='$cno' and return_date is NULL);");
$result = mysql_affected_rows();
if($result<=0)
{
	echo"<script>alert('该书未借出');";
	echo "self.close();</script>";
}
else
{
	mysql_query("UPDATE book SET stock=stock+1 WHERE bno='$bno';");
	mysql_query("UPDATE borrow SET return_date = NOW() WHERE bno='$bno' and cno='$cno' and return_date is NULL order by borrow_date limit 1");
	echo"<script>alert('还书成功！');";
	echo "self.close();</script>";
}

?>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
</body>
</html>