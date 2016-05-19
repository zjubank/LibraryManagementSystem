<!DOCTYPE html>
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
	<title>查询结果 - 图书管理系统</title>
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
	<div class="container-fluid">
	<div class="page-header">
		<h1>图书管理系统</h1>
	</div>
<?php 
#require 'navbar.php'; 
?>
	<div class="row-fluid">
		<div class="column">
			<form class="form-horizontal" action="searchresult.php" method="post">
				<fieldset>
					<div id="legend" class="">
						<legend class="">查询结果</legend>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	
<?php
 $category=$_POST["category"];
 $title=$_POST["title"];
 $press=$_POST["press"];
 $start_year=$_POST["start_year"];
 $stop_year=$_POST["stop_year"];
 $author=$_POST["author"];
 $low_price=$_POST["low_price"];
 $high_price=$_POST["high_price"]; 
?>

<?php
$result = mysql_query("SELECT * FROM book
					where ('$category' = '' or category  = '$category')
					and	  ('$title'      = '' or title     = '$title')
					and	  ('$press'      = '' or press     = '$press')
					and   ('$start_year' = '' or year     >= '$start_year')
					and   ('$stop_year'  = '' or year     <= '$stop_year')
					and   ('$author'     = '' or author    = '$author')
					and   ('$low_price'  = '' or price    >= '$low_price')
					and   ('$high_price' = '' or price    <= '$high_price')
					order by title;");
#echo '<br><div class="row">
#		<div class="column">';
echo "
<table id='result' class='display'>
<thead>
<tr>
<th>书号</th>
<th>类别</th>
<th>书名</th>
<th>出版社</th>
<th>年份</th>
<th>作者</th>
<th>价格</th>
<th>总藏书量</th>
<th>库存</th>
</tr>
</thead>";			



$cnt=0;

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['bno'] . "</td>";
  echo "<td>" . $row['category'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['press'] . "</td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "<td>" . $row['author'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['total'] . "</td>";
  echo "<td>" . $row['stock'] . "</td>";
  echo "</tr>";
  
  if($cnt++>100)break;
  }

echo "</table>";
echo "<script>$(document).ready(function() {
		$('#result').dataTable();
} );</script>";
?>
</body>
</html>