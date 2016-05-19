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
	<title>已借书籍</title>
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

	<div class="row-fluid">
		<div class="column">
			<form class="form-horizontal" action="searchresult.php" method="post">
				<fieldset>
					<div id="legend" class="">
						<legend class="">已借书籍</legend>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	</div>
<?php
$cno = $_SESSION["cno"];
$result = mysql_query("SELECT book.bno,
								book.title,
								book.author,
								borrow.borrow_date,
								DATE_ADD(borrow.borrow_date, INTERVAL 90 DAY) AS prtime
								FROM book,borrow 
					where borrow.cno='$cno' and book.bno=borrow.bno and return_date is NULL
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

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['bno'] . "</td>";;
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['press'] . "</td>";
  echo "<td>" . $row['author'] . "</td>";
  echo "<td>" . $row['borrow_time'] . "</td>";
  echo "<td>" . $row['return_date'] . "</td>";
  echo "</tr>";
  }
  
echo "</table>";

echo "<script>$(document).ready(function() {
		$('#result').dataTable();
} );</script>";

?>

</body>
</html>