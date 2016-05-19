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
  <title>添加书籍</title>

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
<div class="container">
<div class="row">
	<div class="column">
		<!-- <h2>添加书籍</h2> -->
		<form name="single" class="form-horizontal" action="addsingle.php" method="POST" target="_blank">
			<fieldset>
			
				<div id="legend" class="">
					<legend class="">单册入库</legend>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="bno">书号</label>
					<div class="col-sm-10">
						<input name="bno" type="text" placeholder="书号" required="required" class="form-control">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="category">类别</label>
					<div class="col-sm-10">
						<input name="category" type="text" placeholder="类别" class="form-control">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="title">书名</label>
					<div class="col-sm-10">
						<input name="title" type="text" placeholder="书名" required="required" class="form-control">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="press">出版社</label>
					<div class="col-sm-10">
						<input name="press" type="text" placeholder="出版社" class="form-control">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="year">年份</label>
					<div class="col-sm-10">
						<input name="year" type="number" placeholder="年份" class="form-control">
						<p class="help-block">4位数字</p>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="author">作者</label>
					<div class="col-sm-10">
						<input name="author" type="text" placeholder="作者" class="form-control">
					</div>
				</div>
							
				<div class="form-group">
					<label class="col-sm-2 control-label" for="price">价格</label>
					<div class="col-sm-10">
						<input name="price" type="number" step="0.01" placeholder="价格" class="form-control">
						<p class="help-block">2位小数</p>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="total">数量</label>
					<div class="col-sm-10">
						<input name="total" type="number" min="0" placeholder="数量" required="required" class="form-control">
					</div>
				</div>
				
				<div class="text-center">
					<input align="center" type="submit" value="添加" class="btn btn-primary"/>
				</div>	
				
			</fieldset>
		</form>
		
		<div id="legend" class="">
			<legend class="">批量导入</legend>
		</div>
		<form name="import" class="form-horizontal" action="import.php" method="POST" enctype="multipart/form-data" target="blank">
			<fieldset>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="file">上传图书信息文件</label>
						<div class="col-sm-10">
							<input type="file" name="file" accept="text/csv" required="required"/>
							<p class="help-block">
										 请选择制作好的图书信息文档（CSV格式），请点击<a href="template.csv">这里</a>下载样例。
							</p>
						</div>
				</div>
				
				<div class="text-center">
					<input align="center" type="submit" value="添加" class="btn btn-primary"/>
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