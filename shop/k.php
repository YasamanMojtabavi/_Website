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
error_reporting(0);
include("headerpage.php");
?>
<?php
$f=0;
$link=mysqli_connect("localhost","root","","hardware");
$query="select * from members where username=".$_SESSION['username']." and password=".$_SESSION['password']."";
$result=mysqli_query($link,$query);
{
{
	$f=1;	
}
$row1=mysqli_fetch_assoc($result);
if($_SESSION["role"]==0)
{

?>
    </b></a>
</nav>
<div id="header">
</div>
<?php
		echo $_SESSION['username']."خوش آمدید";// $_POST['user']."خوش آمدید";

$link=mysqli_connect("localhost","root","","hardware");
mysqli_set_charset($link,"utf8");
$query=mysqli_query($link,"select * from casecomputer");
if(!isset($_GET['codekala']) && !isset($_GET['delete']))
{?>

<form action="sabtekala.php" method="post">
کد کالا<input type="text" name="codekala"/>
</br>نام کالا<input type="text" name="namekala"/>
</br>موجودی کالا<input type="text" name="mojodikala"/>
</br>قیمت کالا<input type="text" name="gheymatkala"/>
</br>تصویر<input type="file" name="n4" />
</br>توضیحات<textarea dir="rtl" cols="60" rows="10" name="description">
</textarea>
</br><input type="submit" value="ثبت" name="btn"/>
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
}
else if(isset($_GET['codekala']))
{?>

<?php
	$sq="select * from casecomputer where codekala='".$_GET['codekala']."'";
	$x=mysqli_query($link,$sq);
	$row= mysqli_fetch_array($x);
?>
<form action="edit.php" method="post" enctype="multipart/form-data">
کد<input type="text" value="<?php
echo $row['codekala'];
?>" name="n1"/>

</br>عنوان<input type="text" value=" <?php
echo $row['namekala'];
?>" name="n2"/>
</br>قیمت کالا<input type="text" value=" <?php
echo $row['gheymatkala'];
?>" name="n5"/>

</br>موجودی کالا <input type="text" value="
<?php
echo $row['mojodikala'];
?>" name="n3"/>
</br>تصویر<input type="file" name="n4" /><?php echo '<img height="50" width="50" src="'.$row['pic'].'"/>';?>
</br>توضیحات
<textarea dir="rtl" cols="60" rows="10" value="توضیحات" name="n6">
<?php
echo $row['description'];
?></textarea>
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
	echo 'تعداد';
	echo '</td>';
	echo '<td>';
	echo 'قیمت';
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
	echo '<a href="k.php" style="color:blue; font-weight:bold; display:block;">بازگشت به صفحه قبل</a></div>';
}
else if(isset($_GET['delete']))
{
		$sq="select * from casecomputer where codekala='".$_GET['delete']."'";
	$x=mysqli_query($link,$sq);
	$row= mysqli_fetch_array($x);
?>
<form action="edit.php" method="post" enctype="multipart/form-data">
کد<input type="text" value="<?php
echo $row['codekala'];
?>" name="n1"/>

</br>عنوان<input type="text" value=" <?php
echo $row['namekala'];
?>" name="n2"/>

</br>قیمت کالا<input type="text" value=" <?php
echo $row['gheymatkala'];
?>" name="n5"/>
</br>موجودی کالا <input type="text" value="
<?php
echo $row['mojodikala'];
?>"name="n3"/>
</br>تصویر<input type="file" name="n4" /><?php echo '<img height="50" width="50" src="'.$row['pic'].'"/>';?>
</br>توضیحات
<textarea dir="rtl" cols="60" rows="10" value="توضیحات" name="n6">
<?php
echo $row['description'];
?></textarea>
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
	echo 'تعداد';
	echo '</td>';
	echo '<td>';
	echo 'قیمت';
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
	echo '<a href="k.php" style="color:blue; font-weight:bold; display:block;">بازگشت به صفحه قبل</a></div>';
}
?>
</table>
        <?php
}
else
	include("vorod.php");
	}
?>
</body>
</html>