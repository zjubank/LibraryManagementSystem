<?php
  include "dbconnect.php";
  $posts = $_POST;
  foreach ($posts as $key => $value) {
    $posts[$key] = trim($value);
  }
  $password = md5($posts["password"]);
  $aname = $posts["aname"]; 
  $query = "SELECT `password`, `aname`, `aid` FROM `admin` WHERE `password` = '$password' AND `aname` = '$aname'";
  $result = mysql_query($query);
  $userInfo = mysql_fetch_array($result); 
  if (!empty($userInfo)) 
  {
    session_start();
    $_SESSION["login"] = "admin";
	$_SESSION["aid"] = $userInfo["aid"];
	$_SESSION["aname"] = $userInfo["aname"];
	echo $userInfo["aname"];
	echo " 您已登陆成功，3秒后跳转<br>";
	echo '如您的浏览器不支持跳转，请点击<a href="index.php">此处</a>';
	echo "<meta http-equiv=\"refresh\" content=3;url=index.php>";
  } else {
    die("用户名密码错误，请后退并重试。");
  }
?>  