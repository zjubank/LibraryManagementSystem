<?php
require_once 'dblogin.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if(!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db('library');
mysql_query("SET CHARACTER SET utf8");
?>