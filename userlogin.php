<!DOCTYPE html>
<html lang="zh-CN">
<script type="text/javascript">
	window["_gaUserPrefs"] = { ioo : function() { return true; } }
</script>
<head>
	<title>登录</title>
	<!-- Bootstrap core CSS -->
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/bootstrap-theme.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="signin.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="container">
		<form class="form-signin" role="form" action="userlogincheck.php" method="post">
			<h2 class="form-signin-heading">请登录</h2>
			<input name="uname" type="text" class="form-control" placeholder="用户名" required="" autofocus="">
			<input name="password" type="password" class="form-control" placeholder="密码" required="">

			<button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
		</form>
	</div> <!-- /container -->
</body>
</html>

