<!DOCTYPE html>
<?php session_start(); ?>
<html lang="zh-CN">

<script type="text/javascript">
	window["_gaUserPrefs"] = { ioo : function() { return true; } }
</script>
	
<?php 
	require 'dbconnect.php';
?>
	
<?php
	require 'navbar.php';
?>

<head>
	<title>首页 - 图书管理系统</title>

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
	
	<div class="container-fluid">
    <!-- Main component -->
	<div class="page-header">
		<h1>图书管理系统</h1>
	</div>
	
	<div class="row-fluid">
		<h3>请选择您的身份</h3></br>
		<ul class="thumbnails">
			<div class="col-md-4">
				 <img alt="300x200" src="img/lib.jpg" />
				<div class="caption">
					<h3>我是游客</h3>
					<p>在线查询书库藏书</p>
					<p><a class="btn btn-primary" href="search.php">查询</a> <!-- <a class="btn" href="#">分享</a> --> </p>
				</div>
			</div>

			<div class="col-md-4">
				<img alt="300x200" src="img/edit.jpg" />
				<div class="caption">
					<h3>我是会员</h3>
					<p>查看借阅历史，更改个人信息</p>
					<p><a class="btn btn-primary" href="userlogin.php">登录</a>  <a class="btn btn-default" href="logout.php" role="button">注销</a> </p>
				</div>
			</div>

			<div class="col-md-4">
				<img alt="300x200" src="img/cmd.jpg" />
				<div class="caption">
					<h3>我是管理员</h3>
					<p>管理书库和用户</p>
					<p><a class="btn btn-primary" href="adminlogin.php">登录</a>  <a class="btn btn-default" href="logout.php" role="button">注销</a> </p>
				</div>
			</div>	
		</ul>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
<!--
  <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap.min.js"></script>
 --> 
</body>
</html>