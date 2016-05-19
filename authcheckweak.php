<?php
$login = false;
if(!isset($_SESSION)){  
   session_start();  
} 
if (isset($_SESSION["login"]) && $_SESSION["login"] == "admin") {
} 
else if( isset($_SESSION["login"]) && $_SESSION["login"] == "user"){
}
else
{
	$_SESSION["login"] = false;
	die("请先登录！");
}
?>