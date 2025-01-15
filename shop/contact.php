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
include("headerpage.php");
?>

<form action="action_contact.php" method="post">
 نام و نام خانوادگی<input type="text" name="family" value='<?php echo $_SESSION["username"]?>'/>
</br>آدرس پست الکترونیکی<input type="text" name="email" value='<?php echo $_SESSION['email']?>'/>
</br>متن پیام<textarea type="text" name="matn"></textarea>
</br><input type="submit" value="ارسال پیغام"/>
<input type="reset" value="جدید" class="btn" id="btnid"/>

</form>
</body>
</html>