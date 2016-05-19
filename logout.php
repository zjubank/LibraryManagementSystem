<?php
  session_start();
  session_destroy();
  echo "注销成功，3秒后跳转<br>";
  echo "如您的浏览器不支持跳转，请点击<a href=\"index.php\">此处</a>";
  echo "<meta http-equiv=\"refresh\" content=3;url=\"index.php\">";
?>