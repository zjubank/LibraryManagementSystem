<!DOCTYPE html>

<html lang="zh-CN">
<script type="text/javascript">
	window["_gaUserPrefs"] = { ioo : function() { return true; } }
</script>
<?php 
	require 'dbconnect.php';
	require 'authcheck.php';
?>

<?php
$result = mysql_query("SELECT * FROM card order by cno;");
?>

<head>
	<title>借书证管理</title>

	<!-- Bootstrap core CSS -->
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/bootstrap-theme.min.css" rel="stylesheet">
	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<!-- Custom styles for this template -->
	<!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.css">
  
	<!-- DataTables -->
	<script type="text/javascript" charset="utf8" src="DataTables-1.10.4/media/js/jquery.dataTables.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="/DataTables-1.10.4/media/css/jquery.dataTables.css">
	
	<!-- DataTables -->
	<script type="text/javascript" charset="utf8" src="/DataTables-1.10.4/media/js/jquery.dataTables.js"></script>
</head>

<body>
	<div class="container">
		<div class="row">
		<div class="column">
		
		 <form class="form-horizontal"> 
			
		
		</form>
		</div>
		</div>
	</div>
<?php require 'addcard.php'; ?>
<?php require 'delcard.php'; ?>
<!-- /container -->

<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>