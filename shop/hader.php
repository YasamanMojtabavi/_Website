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
<?php
if(isset($_SESSION['user']) && isset($_SESSION['user']))
{
?>
<a href="p1.php"class="set_style_link">خروج از سایت
<?php
session_unset();
?>
</a>
<?php
}
else
{
?>
<table>
<?php
$i=1;
//$link=mysqli_connect("localhost","root","","hardware");
$link=mysqli_connect("localhost","root","","hardware");
mysqli_set_charset($link,"utf8");
$query="select * from casecomputer";
$result=mysqli_query($link,$query);
if(!isset($_GET['codekala']))
{
	while($row=mysqli_fetch_array($result))
	{
		$i++;
			if($i%3==2)
				echo "<tr>";
			echo "<td>";
			echo "<div style='width:150;border-style:double' align='center'>";
			echo "</br>"."نام کالا:";
			echo $row["namekala"];
			echo "</br>";
            echo '<a href="?codekala='.$row['codekala'].'"/>';
			echo "<img height='100' width='100' src='".$row['pic']."'/>";
			echo "</br>"."قیمت کالا:";
			echo $row['gheymatkala'];
			echo "</br>"."موجودی کالا:";
			echo $row['mojodikala'];
			echo "</div>"; 
			echo "</td>";
	}
}
else if(isset($_GET['codekala']))
{
			$sq="select * from casecomputer where codekala='".$_GET['codekala']."'";
			$x=mysqli_query($link,$sq);
			$row= mysqli_fetch_array($x);
			$_SESSION["codekala"]=$r['codekala'];
			$_SESSION["namekala"]=$r['namekala'];
	    	echo "<tr align='justify'>";
			echo "<td>";
			echo "<div style='width:150;border-style:double' align='center'>";
			echo "</br>"."نام کالا:";
			echo $row["namekala"];
			echo "</br>";
			echo $row["description"];
			echo "</br>";
			echo '<a href="order.php?codekala='.$row['codekala'].'"/>سفارش محصول';
			echo "</td>";
			echo "<td>";
			echo "</br>";
			echo "<img height='100' width='100' src='".$row['pic']."'/>";
			echo "</br>"."قیمت کالا:";
			echo $row['gheymatkala'];
			echo "</br>"."موجودی کالا:";
			echo $row['mojodikala'];
			echo "</div>"; 
			echo "</td>";			
			echo "</tr>";
}
?>
</table>
<?php
}
?></body>
</html>