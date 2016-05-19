<?php
	if( isset($_SESSION["aname"]) )
		$yourname = $_SESSION["aname"];
	else if( isset($_SESSION["uname"]) )
	{
		$yourname = $_SESSION["uname"];
	}
	else
	{
		$yourname = '游客';
	}
?> 
	
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/bootstrap-theme.min.css" rel="stylesheet">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">首页</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <!--  <li class="active"><a href="#">回到首页<span class="sr-only">(current)</span></a></li> -->
        <li><a href="search.php">图书查询</a></li>
		<li><a href="userhandle.php">我的图书馆</a></li>
		<li><a href="handle.php">管理工具</a></li>
      </ul>
     
	<!-- <button type="button" class="btn btn-default navbar-btn navbar-right">Sign in</button> -->
	<p class="navbar-text navbar-right">欢迎您,	<a href="#" class="navbar-link"><?php echo $yourname ;?></a></p>
	
	  
   </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>