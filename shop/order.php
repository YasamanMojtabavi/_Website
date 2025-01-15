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
<br>
<?php
$link=mysqli_connect("localhost","root","","hardware");
mysqli_set_charset($link,"utf8");
$query="select * from casecomputer";
$query1="select * from members";
$result=mysqli_query($link,$query);
$result1=mysqli_query($link,$query1);
$sq="select * from casecomputer where codekala='".$_GET['codekala']."'";
$x=mysqli_query($link,$sq);
$r= mysqli_fetch_assoc($x);
$_SESSION["codekala"]=$r['codekala'];
$_SESSION["namekala"]=$r['namekala'];
$row1=mysqli_fetch_assoc($result1);
if(isset($_SESSION["statelogin"]))
{
		if($_SESSION["role"]==0 && isset($_GET['codekala']))
		{		
?>
<form name="add_product" action="admin_products.php" method="post" enctype="multipart/form-data">
  <td><div style="direction:rtl"><form method="get" enctype="multipart/form-data" style=" direction:rtl"><table width="200" border="0">
    <tr>
    <tr>
    <td>کدکالا<span style="color:red">*</span></td>
      <td width="60%"><span style="color:red"><span style="width=&quot;78%;&quot;">
   <input type="text" id="pro_code2" name="code" value="<?php echo $r["codekala"]?>"/>
      </span></span></td>
      <td style=width="78%;">&nbsp;</td>
    </tr>
    <tr>
      <td>نام کالا<span style="color:red">*</span></td>
   <td><input type="text" style="text-align:right;" id="pro_name" name="name" value="<?php echo $r["namekala"]?>"/></td>
    </tr>
    <tr>
      <td>تعداد یا مقدار در خواستی<span style="color:red">*</span></td>
    <td>&nbsp;<input type="text" style="text-align:left;"  onChange="cal();" id="por_qty" name="pro_qty"/> </td>
    </tr>
    
     <tr>
      <td>قیمت واحد کالا<span style="color:red">*</span></td>
      <td>&nbsp;<input type="text" style="text-align:left;" id="por_price" name="pro_price" value="<?php echo $r["gheymatkala"]?>"/> &nbsp;ریال</td>
    </tr>

<tr>
<td>مبلغ قابل پرداخت<span style="color:red;">&nbsp;&nbsp;&nbsp;*</span></td></br>
 <td> <input type="text" style="text-align:left;" id="total" name="pro_image" size="30" value="0" readonly/></td>
</tr><tr>
      <td>پست الکترونیکی<span style="color:red">*</span></td>
    <td>&nbsp;<input type="text" style="text-align:left;" id="por_qty" name="pro_email"/> </td>
    </tr>
    <tr>
      <td>کد پستی<span style="color:red">*</span></td>
    <td>&nbsp;<input type="text" style="text-align:left;" id="por_qty" name="pro_postcode"/> </td>
    </tr>
    <tr>
      <td>شماره تلفن همراه<span style="color:red">*</span></td>
 <td>&nbsp;<input type="text" style="text-align:left;" id="por_qty" name="pro_phone" /> </td>
    </tr>
    
   
      <tr>
<td>نام خریدار<span style="color:red;">*</span></td>
<td>
<input type="text" id="pro_detail" name="username" cols="45" rows="10" wrap="virtual" value="<?php echo $_SESSION['username'];?>"/>
</td> <tr>
      <td>ادرس دقیق پستی جهت تحویل محصول<span style="color:red">*</span></td>
    <td>&nbsp;<input type="text" style="text-align:left;" id="por_qty" name="address" /> </td>
      </tr>
<td><br/><br/></td>
<td><input type="submit" value="خرید محصول" onClick="f()"/> &nbsp;&nbsp;&nbsp;<input type="reset" value="جدید"/></td>
</td></table>
<script type="text/javascript">


function cal()
{
	var price = document.getElementById('por_qty').value* document.getElementById('por_price').value;
	document.getElementById('total').value=price;
}
</script>


<script type="text/javascript">
function cal()
{
	var price = document.getElementById('por_qty').value* document.getElementById('por_price').value;
	document.getElementById('total').value=price;
}

function f()
{
	var a=window.confirm("از صحت اطلاعات وارد شده اطمینان دارید؟");
	if(document.getElementById('total').value!=0)
{

if(a==true)
{
	location.replace("admin_products.php");
	
}
else if(a!=true)
{
	window.alert("متاسفانه خرید با موفقیت انجام نشد!");
	location.replace("order.php");
}
}
}
</script>

</form>
<?php			
		}
}
		if($_SESSION["role"]==1)
		{
			?>
          <form name="add_product" action="admin_products.php" method="post" enctype="multipart/form-data">
  <td><div style="direction:rtl"><form method="get" enctype="multipart/form-data" style=" direction:rtl"><table width="200" border="0">
    <tr>
    <tr>
    <td>کدکالا<span style="color:red">*</span></td>
      <td width="60%"><span style="color:red"><span style="width=&quot;78%;&quot;">
   <input type="text" id="code" name="code" value="<?php echo $r["codekala"]?>"/>
      </span></span></td>
      <td style=width="78%;">&nbsp;</td>
    </tr>
    <tr>
      <td>نام کالا<span style="color:red">*</span></td>
   <td><input type="text" style="text-align:right;" id="pro_name" name="name" value="<?php echo $r["namekala"]?>"/></td>
    </tr>
    <tr>
      <td>تعداد یا مقدار در خواستی<span style="color:red">*</span></td>
   <td>&nbsp;<input type="text" style="text-align:left;"  onChange="cal();" id="por_qty" name="pro_qty"/> </td>
    </tr>
    
     <tr>
      <td>قیمت واحد کالا<span style="color:red">*</span></td>
      <td>&nbsp;<input type="text" style="text-align:left;" id="por_price" name="pro_price" value="<?php echo $r["gheymatkala"]?>"/> &nbsp;ریال</td>
    </tr>

<tr>
<td>مبلغ قابل پرداخت<span style="color:red;">&nbsp;&nbsp;&nbsp;*</span></td></br>
 <td> <input type="text" style="text-align:left;" id="total" name="pro_image" size="30" value="0" readonly/></td>
</tr><tr>
      <td>پست الکترونیکی<span style="color:red">*</span></td>
    <td>&nbsp;<input type="text" style="text-align:left;" id="por_qty" name="pro_email"/> </td>
    </tr>
    <tr>
      <td>کد پستی<span style="color:red">*</span></td>
    <td>&nbsp;<input type="text" style="text-align:left;" id="por_qty" name="pro_postcode"/> </td>
    </tr>
    <tr>
      <td>شماره تلفن همراه<span style="color:red">*</span></td>
 <td>&nbsp;<input type="text" style="text-align:left;" id="por_qty" name="pro_phone" /> </td>
    </tr>
<td><br/><br/></td>
<tr>
<td>نام خریدار<span style="color:red;">*</span></td>
<td>
<input type="text" id="pro_detail" name="username" cols="45" rows="10" wrap="virtual" value="<?php echo $_SESSION['username']; ?>"/>
</td><tr>
      <td>ادرس دقیق پستی جهت تحویل محصول<span style="color:red">*</span></td>
    <td>&nbsp;<input type="text" style="text-align:left;" id="por_qty" name="address" /> </td>
      </tr>
<td><input type="submit" value="خرید محصول" onClick="f()"/> &nbsp;&nbsp;&nbsp;<input type="reset" value="جدید"/></td>
</td></table>
<script type="text/javascript">


function cal()
{
	var price = document.getElementById('por_qty').value* document.getElementById('por_price').value;
	document.getElementById('total').value=price;
}
</script>

</form>
<td>

<?php
echo '<img height="200" width="200" src="'.$r['pic'].'"/>';
?>
</td>
</tr>
</table>
</form>
<?php
		}
if(!isset($_SESSION["statelogin"]))
{
?>
  <div style="text-align:center; color:#AC0808; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:20px"; dir="rtl">
<br/>
<span style='color:red;'><b>برای خرید پستی محصول انتخاب شده باید وارد سایت شوید</b></span>
<br/><br/>
در صورتی که عضو فروشگاه هستید برای ورود
<a href="vorod.php" style='text-decoration:none;'><span style='color:blue;'><b>اینجا</b></span> </a>
کلیک کنید
<br/>
و در صورتی که عضو نیستید برای ثبت نام در سایت
<a href="ozviat.php" style='text-decoration:none;'><span style='color:green;'><b>اینجا</b></span></a>
کلیک کنید
<br/><br/>
<?php
}
?>
</body>
</html>