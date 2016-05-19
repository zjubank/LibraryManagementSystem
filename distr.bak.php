<!DOCTYPE html>
<html lang="zh-CN">
<script type="text/javascript">
  window["_gaUserPrefs"] = { ioo : function() { return true; } }
</script>
<?php 
  require 'dbconnect.php';
#require 'authcheck.php';
?>
<head>
  <title>借还书籍</title>

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
</head>

<body>
	<div class="container">
	<div class="row">
	<div class="column">
<?php
echo'
	<form action="#" method="post" class="form-horizontal">
		<fieldset>
			<!-- <h2>图书借还</h2> -->
			<div id="legend" class="">
					<legend class="">卡号查询</legend>
			</div>
			<div class="form-group" >
				<!-- Search input-->
				<label class="col-sm-2 control-label">卡号</label>
				<div class="col-sm-10">	
					<input name="id" type="text" placeholder="请输入卡号" class="form-control">
				</div>	
			</div>
			<div class="text-center">
				<input type="submit" value="查询" class="btn btn-primary"></input>
			</div> 
			';

	if (isset($_POST["id"])) {
	$id=$_POST["id"];
	$_SESSION["cno"]=$id;
	
	$result = mysql_query("SELECT book.bno,
									book.title,
									book.author,
									borrow.borrow_date,
									DATE_ADD(borrow.borrow_date, INTERVAL 90 DAY) AS prtime
									FROM book,borrow 
						where borrow.cno='$id' and book.bno=borrow.bno and return_date is NULL
						order by book.title;");
	

echo "
<table id='result' class='display'>
<thead>
<tr>
<th>书号</th>
<th>书名</th>
<th>作者</th>
<th>借入时间</th>
<th>应还时间</th>
</tr>
</thead>";
echo "</table>";
echo "<script>$(document).ready(function() {
		$('#result').dataTable();
} );</script>";
}
?>
<!--require 'cardsearchresult.php';-->

<?php
	if (isset($_POST["id"])) {
	$id=$_POST["id"];
	$_SESSION["cno"]=$id;
echo '
<br>
	<form action="borrow.php" method="post" class="form-horizontal" target="_blank">
		<fieldset>	
			<div id="legend" class="">
				<legend class="">申请借书</legend>
			</div>
			<div class="form-group" >
				<label class="col-sm-2 control-label">申请借书</label>
				<div class="col-sm-10">	
					<input name="id" type="text" placeholder="请输入书号" class="form-control">
				</div>	
			</div>
			<div class="text-center">
				<input type="submit" value="提交" class="btn btn-primary"></input>
			</div> 
		</fieldset>
	</form>
<br>
<form action="return.php" method="post" class="form-horizontal" target="_blank">
		<fieldset>	
	 <div id="legend" class="">
				<legend class="">归还图书</legend>
			</div>
	<div class="form-group" >
				<!-- Search input-->
				<label class="col-sm-2 control-label">归还图书</label>
				<div class="col-sm-10">	
					<input name="id" type="text" placeholder="请输入书号" class="form-control">
		</div>	
		</div>
			<div class="text-center">
		<input type="submit" value="提交" class="btn btn-primary"></input>
			</div> 
		</fieldset>
	</form>';
	}
?>
		</fieldset>
	</form>
	</div>
	</div>
	</div>

	<!-- /container -->
</body>
</html>