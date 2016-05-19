<!DOCTYPE html>
<html lang="zh-CN">
<script type="text/javascript">
	window["_gaUserPrefs"] = { ioo : function() { return true; } }
</script>
<?php 
	require 'dbconnect.php';
 	require 'authcheck.php';
?>
<head>
	<title>添加借书证</title>

	<!-- Bootstrap core CSS -->
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/bootstrap-theme.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="container">
	<div class="row">
	<div class="column">
	<form class="form-horizontal" action="addcard2.php" method="post" target="_blank">
		<fieldset>
			<div id="legend" class="">
				<legend class="">添加借书证</legend>
			</div>
			
		<div class="form-group">
					<label class="col-sm-2 control-label">卡号</label>
					<div class="col-sm-10">
						<input name="cno" type="text" placeholder="卡号" required="required" class="form-control">
					</div>
				</div>
		<div class="form-group">
					<label class="col-sm-2 control-label">姓名</label>
					<div class="col-sm-10">
						<input name="name" type="text" placeholder="姓名" class="form-control">
					</div>
				</div>
		<div class="form-group">
					<label class="col-sm-2 control-label">单位</label>
					<div class="col-sm-10">
						<input name="department" type="text" placeholder="单位" class="form-control">
					</div>
				</div>

		<div class="form-group">
					<label class="col-sm-2 control-label">类别</label>
					<div class="col-sm-10">
						<select name="type" class="form-control">
							<option value="0">本科生</option>
							<option value="1">研究生</option>
							<option value="2">教职工</option>
							<option value="3">其它</option>
						</select>
					</div>
		</div>		
		<div class="text-center">
			<input align="center" type="submit" value="提交" class="btn btn-primary"></input>
		</div>
		</fieldset>
	</form>
	</div>
	</div>
	</div>
 <!-- /container -->

<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->



 </body>
 </html>