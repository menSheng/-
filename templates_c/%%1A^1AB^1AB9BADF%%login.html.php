<?php /* Smarty version 2.6.26, created on 2015-10-14 17:22:19
         compiled from login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆界面</title>
</head>

<body>
<h1>用户登录页面</h1>
<form action="./LoginController.php" method="post">
用户名：&nbsp;<input type="text" name="username" size="30"  /><br />
密&nbsp;&nbsp;码：<input type="password" name="password" size="30"  /><br />
<input type="submit" value="登录" />
<input type="reset" value="重置" />
</form>
</body>
</html>