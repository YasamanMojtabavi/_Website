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
if(isset($_POST['codekala'])&&!empty($_POST['codekala']) &&
isset($_POST['namekala'])&&!empty($_POST['namekala']) &&
isset($_POST['mojodikala'])&&!empty($_POST['mojodikala']) 
&& isset($_POST['gheymatkala']) && !empty($_POST['gheymatkala'])&&
isset($_POST['n4'])&&!empty($_POST['n4'])&&
isset($_POST['description'])&&!empty($_POST['description']))
{
	$codekala=$_POST['codekala'];
	$namekala=$_POST['namekala'];
	$mojodikala=$_POST['mojodikala'];
	$gheymatkala=$_POST['gheymatkala'];
	$description=$_POST['description'];
	$pic='Pic/'.$codekala.'.jpg';

	$link=mysqli_connect("localhost","root","","hardware");
	mysqli_set_charset($link,"utf8");
	$query=mysqli_query($link,"insert into casecomputer(codekala,namekala,mojodikala,gheymatkala,pic,link,description) values ('$codekala','$namekala','$mojodikala','$gheymatkala','$pic',' ','$description')");
	move_uploaded_file($_FILES['n4']['tmp_name'],$pic);
}
?>
<script type="text/javascript">
location.replace("k.php");
</script>
</body>
</html>