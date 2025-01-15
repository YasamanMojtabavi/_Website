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
$codekala=$_POST['n1'];
$mojodikala=$_POST['n3'];
$namekala=$_POST['n2'];
$gheymatkala=$_POST['n5'];
$pic='Pic/'.$codekala.'.jpg';
$link=mysqli_connect("localhost","root","","hardware");
mysqli_set_charset($link,"utf8");
if(isset($_POST['update']))
{
	$query=mysqli_query($link,"update casecomputer set pic='$pic', namekala='$namekala', mojodikala='$mojodikala',gheymatkala='$gheymatkala' 
		where codekala='$codekala'");
		move_uploaded_file($_FILES['n4']['tmp_name'],$pic);
}
else if(isset($_POST['delete']))
{
	$query=mysqli_query($link,"delete from casecomputer where codekala='$codekala'");
}
?>
<script type="text/javascript">
location.replace("k.php");
</script>
<?php
echo '<a href="k.php" style="color:blue; font-weight:bold; display:block;">بازگشت به صفحه قبل</a></div>';
?>
</body>
</html>