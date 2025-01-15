<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style_login.css">
</head>

<body>
<div align="center" dir="rtl">
<?php
include("headerpage.php");
error_reporting(0);
?>
<table border="2" align="right" align="center">
<?php
$link=mysqli_connect("localhost","root","","hardware");
mysqli_set_charset($link,"utf8");
$query=mysqli_query($link,"select * from orders");
$x="";
while($row=mysqli_fetch_array($query))
	{
		{
			$final = $row['pro_qty']*$row['pro_price'];
			$query2=mysqli_query($link,"select * from casecomputer where codekala='".$row['pro_code']."'");
			$row2=mysqli_fetch_array($query2);
			echo '<tr bgcolor="#BCA9E4" align="center">';
			echo '<td>';
			echo 'کد سفارش';
			echo '</td>';
			echo '<td>';
			echo 'نام خریدار';
			echo '</td>';
			echo '<td>';
			echo 'نام محصول';
			echo '</td>';
			echo '<td>';
			echo 'تاریخ سفارش';
			echo '</td>';
			echo '<td>';
			echo 'تعداد سفارش';
			echo '</td>';
			echo '<td>';
			echo 'قیمت کالا';
			echo '</td>';
			echo '<td>';
			echo 'قیمت نهایی';
			echo '</td>';
			echo '</tr>';
			echo "<tr align='right' align='center'>";
			echo "<td>";
			echo $row['id'];
			echo "</td>";
			echo "<td>";
			echo $row['username'];
			echo "</td>";
			echo "<td>";
			echo $row2['namekala'];
			echo "</td>";
			echo "<td>";
			echo $row['order_date'];
			echo "</td>";
			echo "<td id='por_qty'>";
			echo $row['pro_qty'];
			echo "</td>";
			echo "<td id='por_price'>";
			echo $row['pro_price'];
			echo "</td>";
			echo "<td>";
			echo $final;
			echo "</td>";
				echo "</tr>";
				
				echo '<tr bgcolor="#BCA9E4"  align="center">';
			echo '<td>';
			echo 'شماره تماس';
			echo '</td>';
			echo '<td>';
			echo 'آدرس';
			echo '</td>';
			echo '<td>';
			echo 'کد مرسوله پستی';
			echo '</td>';
			echo '<td>';
			echo 'وضعیت سفارش';
			echo '</td>';
			echo '<td colspan="3">';
			echo 'ابزار مدیریتی';
			echo '</td>';		
			echo '</tr>';
			echo "<tr align='right' align='center'>";
			echo "<td>";
			echo $row['mobile'];
			echo "</td>";
			echo "<td>";
			echo $row['address'];
			echo "</td>";
			echo "<td>";
			echo $row['trackcode'];
			echo "</td>";
			echo "<td  bgcolor='#44D381'>";
			$s1="تحت بررسی";
			$s2="آماده برای ارسال";
			$s3="ارسال شده";
			$s4="سفارش لغو شده";
			if(isset($_GET['idcode']) && $_GET['idcode'] == $row['id'])
			{
				if(isset($_GET['action']) && $_GET['action'] == 'tahtebarasi')
				{
					echo "تحت بررسی";
				}
				else if(isset($_GET['action']) && $_GET['action'] == 'amadebarayeersal')
				{
						echo "آماده برای ارسال";
				}
				else if(isset($_GET['action']) && $_GET['action'] == 'ersalshodeh')
				{
						echo "ارسال شده";
				}
				else if(isset($_GET['action']) && $_GET['action'] == 'laghv')
				{
						echo "سفارش لغو شده";
				}
			}
			echo "</td>";
			echo "<td colspan='3' bgcolor='#F087E2'  align='center'>";
			echo '<a href="?code=1&action=tahtebarasi&idcode='.$row['id'].'" >تحت بررسی</a>';
			echo '</br>';
			echo '<a href="?code=2&action=amadebarayeersal&idcode='.$row['id'].'" >آماده برای ارسال</a>';
			echo '</br>';
			echo '<a href="?code=3&action=ersalshodeh&idcode='.$row['id'].'" >ارسال شده</a>';
			echo '</br>';
			echo '<a href="?code=4&action=laghv&idcode='.$row['id'].'" >سفارش لغو شده</a>';
			echo "</td>";		
				echo "</tr>";
		}
	}
?>
</table>
</div>
</body>
</html>