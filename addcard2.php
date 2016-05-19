<?php
  require 'dbconnect.php';
  require 'authcheck.php';
  
  $name = $_POST["name"];
  $department = $_POST["department"];
  $type = $_POST["type"];
  $cno = $_POST["cno"];
  if($cno!=''){
 
 // $data_values = "('$cno', '$name', '$department', '$type');";
  $query = mysql_query("INSERT INTO card (cno, name, department, type) VALUES ('$cno', '$name', '$department', '$type');");
  $result = mysql_affected_rows();
  }
  if($result == 1){ 
    echo '<script>alert("添加成功！");'; 
    echo 'self.close(); </script>';
  } 
 
  else { 
    echo '<script>alert("添加失败！");'; 
    echo 'self.close(); </script>'; 
  }  
?>