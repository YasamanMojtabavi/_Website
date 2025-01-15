<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include("headerpage.php");
error_reporting(0);
?>

<form method="post" action="h.php">
<input name="user" type="text"/>نام کاربری
<br/>
<input name="pass" type="password"/>رمز عبور
<br/>
<input type="submit" value="ورود"/>
</form>
</body>
</html>