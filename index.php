<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
<form action="login.php" medhod="post">
帳號：<input type="text" name="userId" placeholder="6～12字元"><br>
密碼：<input type="password" name="userPw" placeholder="你常用的密碼"><br>
  <input type="radio" name="gender" value="male">男
  <input type="radio" name="gender" value="famale">女
  <input type="radio" name="age" value="18">8~18
  <input type="radio" name="age" value="29">19~29
  <input type="radio" name="age" value="58">38~58
<br>
  <?php
  for($i=0; $i<100; $i++){
    printf("<input type=\"checkbox\" name=\"lucky[]\" value=\"%d\"> %02d",$i,$i);
  }
?>
  <input type="submit" value="登入">
  <input type="reset">
  </body>
</html>
