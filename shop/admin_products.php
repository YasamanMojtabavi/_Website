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
if(isset($_POST['code'])&&!empty($_POST['code']) &&
isset($_POST['name'])&&!empty($_POST['name']) &&
isset($_POST['pro_email'])&&!empty($_POST['pro_email']) 
&& isset($_POST['pro_price']) && !empty($_POST['pro_price'])&&
 isset($_POST['pro_qty']) && !empty($_POST['pro_qty'])&&
isset($_SESSION["username"])&&!empty($_SESSION["username"])&&
isset($_POST['address'])&&!empty($_POST['address'])&&
isset($_POST['pro_phone'])&&!empty($_POST['pro_phone'])){
	
$pro_code=$_POST['code'];
$pro_qty=$_POST['pro_qty'];
$pro_name=$_POST['name'];
$pro_email=$_POST['pro_email'];
$pro_phone=$_POST['pro_phone'];
$pro_price=$_POST['pro_price'];
$username=$_SESSION["username"];
$address=$_POST['address'];
$pro_postcode=$_POST['pro_postcode'];
$order_date=date('Ymd');
}
$link=mysqli_connect("localhost","root","","hardware");
$query="insert into orders(id,username,order_date,pro_code,pro_qty,pro_price,mobile,address,trackcode) values ('0','$username',$order_date,'$pro_code','$pro_qty','$pro_price',$pro_phone,'$address','000000000000000000000000')";
$result=mysqli_query($link,$query);
echo "خرید کاربر ".$username." ثبت شد";
header('location:p1.php');
?>
</body>
</html>