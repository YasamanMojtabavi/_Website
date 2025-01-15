<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body><?php
include("headerpage.php");
error_reporting(0);
?>
<?php
if(isset($_POST['realname'])&&!empty($_POST['realname']) &&
isset($_POST['username'])&&!empty($_POST['username']) &&
isset($_POST['password'])&&!empty($_POST['password']) 
&& isset($_POST['repassword']) && !empty($_POST['repassword'])&&
isset($_POST['email'])&&!empty($_POST['email'])){
$realname=$_POST['realname'];
$username=$_POST['username'];
$pass=$_POST['password'];
$reppass=$_POST['repassword'];
$email=$_POST['email'];
}
else
	exit("برخی فیلدها مقداردهی نشده اند");
if($pass!=$reppass)
	exit("کلمه عبور و تکرار آن مشابه نیست");
$link=mysqli_connect("localhost","root","","hardware");
$query="insert into members(realname,username,password,email,role) values ('$realname','$username','$pass','$email','1')";
$result=mysqli_query($link,$query);
echo "کاربر ".$realname." ثبت شد";
?>
</body>
</html>