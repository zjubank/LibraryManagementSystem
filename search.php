<!DOCTYPE html>
<html lang="zh-CN">

<script type="text/javascript">
  window["_gaUserPrefs"] = { ioo : function() { return true; } }
</script>

<?php
	if(!isset($_SESSION)){  
   session_start();  
}  
	require 'dbconnect.php';
?>

<?php
	require 'navbar.php';
?>

<head>
	<title>图书查询 - 图书管理系统</title>
	<!-- Bootstrap core CSS -->
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/bootstrap-theme.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->

	<!-- Custom styles for this template -->
	<!-- DataTables CSS -->
  
	<!-- DataTables -->


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="container-fluid">
	<div class="page-header">
		<h1>图书管理系统</h1>
	</div>
	
	<div class="row-fluid">
		<div class="column">
			<form class="form-horizontal" action="searchresult.php" method="post">
				<fieldset>
					<div id="legend" class="">
						<legend class="">图书查询</legend>
					</div>
					
					<div class="form-group">		
						<label class="col-sm-2 control-label">类别</label>
						<div class="col-sm-10">
							<input name="category" type="text" placeholder="类别" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">书名</label>
						<div class="col-sm-10">
							<input name="title" type="text" placeholder="书名" class="form-control">
						</div>
					</div>
					<div class="form-group">			
						<label class="col-sm-2 control-label">出版社</label>
						<div class="col-sm-10">
							<input name="press" type="text" placeholder="出版社" class="form-control">
						</div>
					</div>
					<div class="form-group">				 
						<label class="col-sm-2 control-label">年份</label>
						<div class="col-sm-4">
							<input name="start_year" type="text" placeholder="起始年份" class="form-control">
						</div>
					<p class="col-sm-2 text-center">至</p>
					<div class="col-sm-4">
							<input name="stop_year" type="text" placeholder="终止年份" class="form-control">
						</div>
					</div>	
					<div class="form-group">
						<label class="col-sm-2 control-label">作者</label>
						<div class="col-sm-10">
							<input name="author" type="text" placeholder="作者" class="form-control">
						</div>
					</div>	
					<div class="form-group">					
						<label class="col-sm-2 control-label">价格</label>
						<div class="col-sm-4">
							<input name="low_price" type="text" placeholder="最低价格" class="form-control">
						</div>
					<p class="col-sm-2 text-center">至</p>
					<div class="col-sm-4">
							<input name="high_price" type="text" placeholder="最高价格" class="form-control">
						</div>
					</div>	
					<div class="text-center">
							<input type="submit" value="查询" class="btn btn-primary"></input>
							<a class="btn btn-default" href="index.php" role="button">返回</a>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	<!-- /container -->

<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>