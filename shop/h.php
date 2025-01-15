<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
error_reporting(0);
?>
<div id="leyout" align="center" style="width:800 px; border-style:double; background-color:#aaaaaa" >
<header style="background-color:#E9D417; text-align:center">
<img src="Pic/p1.png" height="200" width="100%"/>
</header>

<nav style="background-color:#DCF812 ; text-align:center">

<a href="p1.php"><b style="background-color:#CFB662">صفحه اصلی</b>|
<a href="ozviat.php"><b style="background-color:#CFB662">عضویت در سایت</b>|

<a href="vorod.php"><b style="background-color:#CFB662">ورود به سایت</a></b>|
<a href="fdf.php"><b style="background-color:#CFB662">خرید محصولات</b></a>|
<a href="#"><b style="background-color:#CFB662">ارتباط با ما</b></a>
</nav>
<div id="header">
</div>
<?php
$u=$_POST['user'];
$p=$_POST['pass'];
$f=0;
if($u && $p)
{
	$link=mysqli_connect("localhost","root","","hardware");
	$sq="select * from members where username='$u' and password='$p'";
	$res=mysqli_query($link,$sq);
	$row1=mysqli_fetch_array($res);
	{	
		$_SESSION["username"]=$row1['username'];
		$_SESSION['role']=$row1['role'];
		$_SESSION['password']=$row1['password'];
		$_SESSION['realname']=$row1['realname'];
		$_SESSION['email']=$row1['email'];
		$_SESSION["statelogin"]=true;
		if($row1['role']==1)
			$f=1;
	}
	if($row1)
	{
		if($f==1)
		{
			echo "ثبت شد";
			header('location:p1.php');
		}
		else if($f==0)
			{
				header('location:k.php');
			}
	}
	else
	{
		echo "کاربر ثبت نشد";
	}
}
?>
</body>
</html>