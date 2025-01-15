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
if(isset($_POST['family'])&&!empty($_POST['family']) &&
isset($_POST['email'])&&!empty($_POST['email']) &&
isset($_POST['matn'])&&!empty($_POST['matn']))
{
	$family=$_POST['family'];
	$email=$_POST['email'];
	$matn=$_POST['matn'];
}
$link=mysqli_connect("localhost","root","","hardware");
$query="insert into contact(id,family,email,matn) values ('0','$family','$email','$matn')";
$result=mysqli_query($link,$query);
echo "متن پیام ثبت شد";
			header('location:contact.php');
?>
</body>
</html>