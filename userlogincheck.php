<?php
  include "dbconnect.php";
  $posts = $_POST;
  foreach ($posts as $key => $value) {
    $posts[$key] = trim($value);
  }
  $password = md5($posts["password"]);
  $uname = $posts["uname"]; 
  $query = "SELECT `password`, `uname`, `uid` FROM `user` WHERE `password` = '$password' AND `uname` = '$uname'";
  $result = mysql_query($query);
  $userInfo = mysql_fetch_array($result); 
  if (!empty($userInfo)) 
  {
    session_start();
    $_SESSION["login"] = "user";
	$_SESSION["uid"] = $userInfo["uid"];
	$_SESSION["uname"] = $userInfo["uname"];
	echo $userInfo["uname"];
	echo " 您已登陆成功，3秒后跳转<br>";
	echo '如您的浏览器不支持跳转，请点击<a href="index.php">此处</a>';
	echo "<meta http-equiv=\"refresh\" content=3;url=index.php>";
  } else {
    die("用户名密码错误，请后退并重试。");
  }
?>  