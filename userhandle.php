<!DOCTYPE html>
<?php
	require 'dbconnect.php';
	require 'authcheckweak.php';
	require 'navbar.php';
?>
	
<html lang="zh-CN">

<head>
	<title>我的图书馆 - 图书管理系统</title>
	<!-- Bootstrap core CSS -->
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/bootstrap-theme.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
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
</head>

<body>
	<div class="container-fluid">
	<div class="page-header">
		<h1>图书管理系统</h1>
	</div>

	<div class="row-fluid">
		<div class="column">
			
				<fieldset>
					<div id="legend" class="">
						<legend class="">我的图书馆</legend>
					</div>
					
					<div class="tabbable" id="tabs-595265"><!-- Only required for left/right tabs -->
						<ul id = ""class="nav nav-tabs">
							<li class="active"><a  data-toggle="tab" href="#panel-575415">借阅记录</a></li>
							<li><a data-toggle="tab" href="#panel-786875">个人信息管理</a></li>
							<li><a data-toggle="tab" href="#panel-359951">借书证管理</a></li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="panel-575415">
							<p>  </p>
							</div>
							
							<div class="tab-pane" id="panel-786875">
							<p> </p>
							</div>
							
							<div class="tab-pane" id="panel-359951">
							<p> </p>
							</div>
							
						</div>
					</div>
				</fieldset>
			
		</div>
	</div>
	<!-- /container -->
</div>
<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>