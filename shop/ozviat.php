<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body dir="rtl">
<?php
include("headerpage.php");
error_reporting(0);
?>
<table>

<br/>
<form name="register" action="v.php" method="post">

<tr>
<td style="width:40%;">نام واقعی<span style="color:#F50C10;">*</span></td>
<td style="width:60%;"><input type="text" id="real name" name="realname"/></td>
</tr>

<tr>
<td >نام کاربری<span style="color:#F50C10;">*</span></td>
<td><input type="text" style="text-align:left;" id="user name" name="username"/></td>
</tr>

<tr>
 <td >کلمه عبور<span style="color:#F50C10;">*</span></td>
<td><input type="password" style="text-align:left;" id="password" name="password"/></td>
</tr>

<tr>
 <td >تکرار کلمه عبور<span style="color:#F50C10;">*</span></td>
<td><input type="password" style="text-align:left;" id="repassword" name="repassword"/></td>
</tr>

<tr>
 <td >پست الکترونیکی<span style="color:#F50C10;">*</span></td>
<td><input type="text" style="text-align:left;" id="email" name="email"/></td>
</tr>

<tr>
<td><br/><br/></td>
<a href="fdf.html"><td><input type="submit" value="ثبت نام"/>
&nbsp;&nbsp;&nbsp;
<input type="reset" value="جدید"/>
</td>
</tr>
</table>

</body>
</html>