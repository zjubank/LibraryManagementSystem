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
	<title>删除借书证</title>

	<!-- Bootstrap core CSS -->
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/bootstrap-theme.min.css" rel="stylesheet">
	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script> 
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
	<form class="form-horizontal" action="delcard2.php" method="post" target="_blank">
		<fieldset>
			<div id="legend" class="">
				<legend class="">删除借书证</legend>
			</div>
			<?php
if($result)
{
echo "<table id='result' border='1' class='display'>
<thead>
<tr>
<th>卡号</th>
<th>姓名</th>
<th>单位</th>
<th>类别</th>
</tr>
</thead>";

while($row = mysql_fetch_array($result))
  {
  switch ($row['type'])
  {
  case 0:
    $type='本科生';
	break;
  case 1:
    $type='研究生';
	break;
  case 2:
    $type='教职工';
	break;
  case 3:
    $type='其它';
	break;
  default:
    $type=$row['type'];
	break;
  }	
  echo "<tr>";
  $cno=$row['cno'];
  echo "<td>" . $row['cno'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['department'] . "</td>";
  echo "<td>" . $type . "</td>";
#echo "<td><a class='btn btn-primary' href='delcard2.php' method='post' cno = '$cno'>删除</a></td>";
  echo "</tr>";

  }
  }
echo "</table>";
echo "<script>$(document).ready(function() {
		$('#result').dataTable();
} );</script>";
?>  

	</br>
			<div class="form-group">
					<label class="col-sm-2 control-label">卡号</label>
					<div class="col-sm-10">
						<input name="cno" type="text" placeholder="请输入要删除的卡号" class="form-control">
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