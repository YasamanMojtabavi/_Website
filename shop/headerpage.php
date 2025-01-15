<?php
//session_start();
?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body dir="rtl">
<div id="leyout" align="center" style="width:800 px; border-style:double; background-color:#aaaaaa" >
<header style="background-color:#E9D417; text-align:center">
<img src="Pic/p1.png" height="200" width="100%"/>
</header>

<nav style="background-color:#DCF812 ; text-align:center">

<a href="p1.php"><b style="background-color:#CFB662">صفحه اصلی</b>|
<a href="ozviat.php"><b style="background-color:#CFB662">عضویت در سایت</b>|
<?php
error_reporting(0);
if(isset($_SESSION["statelogin"]))
{
?>
    
<a href="logout.php"><b style="background-color:#CFB662">خروج از سایت
<?php
if($_SESSION['role']==0)
{
	echo "(مدیریت سایت)";
	echo "</b>|";
	echo '<a href="admin_manage_order.php"><b style="background-color:#CFB662">مدیریت سفارشات</b></a>';
}
else
	echo $_SESSION['username'];
?>
</a></b>|
<?php
}
else 
{

?>
<a href="vorod.php"><b style="background-color:#CFB662">ورود به سایت</a></b>|
<?php
}
?>
<a href="fdf.php"><b style="background-color:#CFB662">خرید محصولات</b></a>|
<a href="contact.php"><b style="background-color:#CFB662">ارتباط با ما</b></a>
<?php /*?>if($_SESSION['role']==0)
{
echo '|<a href="admin_manage_order.php"><b style="background-color:#CFB662">مدیریت سفارشات</b></a>';
}<?php */
?>
</nav>
<div id="header">
</div>