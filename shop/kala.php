<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body dir="rtl"><?php
include("headerpage.php");
error_reporting(0);
$link=mysqli_connect("localhost","root","","hardware");
mysqli_set_charset($link,"utf8");
$query=mysqli_query($link,"select * from casecomputer");
if(!isset($_GET['codekala']) && !isset($_GET['delete']))
{
?>
<form action="#" method="post">
<input type="text" name="n1"/>کد کالا
</br><input type="text" name="n2"/>نام کالا
</br><input type="text" name="n3"/>موجودی کالا
</br><input type="text" name="n5"/>قیمت
</br><input type="file" name="n4"/>عکس
</br><input type="submit" value="ثبت"/>
</form>
<?php
	echo '<table border="2" align="right">';
	echo '<tr>';
	echo '<td>';
	echo 'کد کالا';
	echo '</td>';
	echo '<td>';
	echo 'نام کالا';
	echo '</td>';
	echo '<td>';
	echo 'موجودی کالا';
	echo '</td>';
	echo '<td>';
	echo 'قیمت کالا';
	echo '</td>';
	echo '<td>';
	echo 'تصویر';
	echo '</td>';
	echo '<td>';
	echo 'ویرایش';
	echo '</td>';
	echo '<td>';
	echo 'حذف';
	echo '</td>';
	echo '</tr>';
	while($row=mysqli_fetch_array($query))
	{
		echo "<tr align='right'>";
		echo "<td>";
		echo $row['codekala'];
		echo "</td>";
			echo "<td>";
			echo $row['namekala'];
		echo "</td>";
			echo "<td>";
			echo $row['mojodikala'];
		echo "</td>";
					echo "<td>";
			echo $row['gheymatkala'];
		echo "</td>";
			echo "<td>";
			echo '<img height="50" width="50" src="'.$row['pic'].'"/>';
		echo "</td>";
				echo "<td>";
		echo '<a href="?codekala='.$row['codekala'].'" style="color:blue;">ویرایش </a> ';
		echo "</td>";
				echo "<td>";
			echo '<a href="?delete='.$row['codekala'].'" style="color:blue;">حذف</a> ';
				echo "</td>";
		echo "</tr>";
	}
}
else if(isset($_GET['codekala']))
{?>

<?php
	$sq="select * from casecomputer where codekala='".$_GET['codekala']."'";
	$x=mysqli_query($link,$sq);
	$row= mysqli_fetch_array($x);
?>
<form action="edit.php" method="post">
<input type="text" value="<?php
echo $row['codekala'];
?>" name="n1"/>کد

</br><input type="text" value=" <?php
echo $row['namekala'];
?>" name="n2"/>عنوان
</br><input type="text" value=" <?php
echo $row['gheymatkal'];
?>" name="n2"/>قیمت کالا

</br> <textarea dir="rtl" cols="60" rows="10" value="خبر" name="n3">
<?php
echo $row['mojodikala'];
?></textarea>
</br><input type="file" name="n4" />تصویر

</br><input type="submit" name="update" value="ویرایش"/>
</form>
<?php
	echo '<table border="2" align="right">';
	echo '<tr>';
	echo '<td>';
	echo 'کد';
	echo '</td>';
	echo '<td>';
	echo 'عنوان';
	echo '</td>';
	echo '<td>';
	echo 'خبر';
	echo '</td>';
	echo '<td>';
	echo 'تصویر';
	echo '</td>';
	echo '<td>';
	echo 'ویرایش';
	echo '</td>';
	echo '<td>';
	echo 'حذف';
	echo '</td>';
	echo '</tr>';
	while($row=mysqli_fetch_array($query))
	{
		echo "<tr align='right'>";
		echo "<td>";
		echo $row['codekala'];
		echo "</td>";
			echo "<td>";
			echo $row['namekala'];
		echo "</td>";
			echo "<td>";
			echo $row['mojodikala'];
		echo "</td>";
					echo "<td>";
			echo $row['gheymatkala'];
		echo "</td>";
			echo "<td>";
			echo '<img height="50" width="50" src="'.$row['pic'].'"/>';
		echo "</td>";
				echo "<td>";
			echo '<a href="?id='.$row['codekala'].'" style="color:blue;">ویرایش </a> ';
		echo "</td>";
				echo "<td>";
			echo '<a href="?delete='.$row['codekala'].'" style="color:blue;">حذف</a> ';
				echo "</td>";
		echo "</tr>";
	}
	echo '<a href="p1.php" style="color:blue; font-weight:bold; display:block;">بازگشت به صفحه قبل</a></div>';
}
else if(isset($_GET['delete']))
{
		$sq="select * from casecomputer where codekala='".$_GET['delete']."'";
	$x=mysqli_query($link,$sq);
	$row= mysqli_fetch_array($x);
?>
<form action="edit.php" method="post">
<input type="text" value="<?php
echo $row['codekala'];
?>" name="n1"/>کد

</br><input type="text" value=" <?php
echo $row['namekala'];
?>" name="n2"/>عنوان

</br><input type="text" value=" <?php
echo $row['mojodikala'];
?>" name="n2"/>عنوان
</br> <textarea dir="rtl" cols="60" rows="10" value="خبر" name="n3">
<?php
echo $row['gheymatkala'];
?></textarea>
</br><input type="file" name="n4" />تصویر

</br><input type="submit" name="delete" value="حذف" onClick="javascript: return confirm('Please confirm deletion');"/>
</form>
<?php
	echo '<table border="2" align="right">';
	echo '<tr>';
	echo '<td>';
	echo 'کد';
	echo '</td>';
	echo '<td>';
	echo 'عنوان';
	echo '</td>';
	echo '<td>';
	echo 'خبر';
	echo '</td>';
	echo '<td>';
	echo 'تصویر';
	echo '</td>';
	echo '<td>';
	echo 'ویرایش';
	echo '</td>';
	echo '<td>';
	echo 'حذف';
	echo '</td>';
	echo '</tr>';
	while($row=mysqli_fetch_array($query))
	{
		echo "<tr align='right'>";
		echo "<td>";
		echo $row['codekala'];
		echo "</td>";
			echo "<td>";
			echo $row['namekala'];
		echo "</td>";
			echo "<td>";
			echo $row['mojodikala'];
		echo "</td>";
					echo "<td>";
			echo $row['gheymatkala'];
		echo "</td>";
			echo "<td>";
			echo '<img height="50" width="50" src="'.$row['pic'].'"/>';
		echo "</td>";
				echo "<td>";
		echo '<a href="?codekala='.$row['codekala'].'" style="color:blue;">ویرایش </a> ';
		echo "</td>";
				echo "<td>";
			echo '<a href="?delete='.$row['codekala'].'" style="color:blue;">حذف</a> ';
				echo "</td>";
		echo "</tr>";
	}
	echo '<a href="p1.php" style="color:blue; font-weight:bold; display:block;">بازگشت به صفحه قبل</a></div>';
}
?>
</table>

</body>
</html>