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
include("headerpage.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<h2 style="text-align:right">معرفی سخت افزار های برونی</h2>
<form enctype="multipart/form-data" dir="rtl" action="submitform.html" method="get">
    <p>
        <label for="textfield">نام:</label>
        <input name="textfield" type="text" required id="textfield" onBlur="MM_validateForm('textfield','','R','textfield2','','R','textfield3','','RisEmail');return document.MM_returnValue">

    </p>
    <p>
        <label for="textfield2">نام خانوادگی:</label>
        <input name="textfield2" type="text" id="textfield2" size="30">
    </p>
    <p onMouseOver="MM_validateForm('textfield3','','RisEmail');MM_popupMsg('لطفا رایانامه را وارد نمایید');return document.MM_returnValue">
        <label for="textfield3">نشانی کاربر:</label>
        <input name="textfield3" type="text" id="textfield3" size="60">
    </p>
    <p>
      <label>نوع کالا:</label>
        <label>
            <input type="radio" name="نوع کالا" value="میوه" id="نوعکالا_0">
            کامپیوتر</label>

        <label>
            <input type="radio" name="نوع کالا" value="آجیل و خشکبار" id="نوعکالا_1">
            لپ تاب</label>

       
        <label>نوع کالا:</label>
        <label>
            <input checked type="radio" name="انتخاب کالا" value="زعفران" id="انتخابکالا_0">
            مانیتور</label>

        <label>
            <input type="radio" name="انتخاب کالا" value="پسته" id="انتخابکالا_1">
            موس</label>

        <label>
            <input type="radio" name="انتخاب کالا" value="خرما" id="انتخابکالا_2">
            کیبورد</label>
            
             <label>
            <input type="radio" name="انتخاب کالا" value="خرما" id="انتخابکالا_2">
           کیس </label>

    </p>
    <label>استان محل زندگی:</label>
    <select>
        <option value="ایلام">ایلام</option>
        <option value="مشهد">مشهد</option>
    </select>
    <br>
    <label>file:</label>
    <input type="file"><br>
    <input name="btnsubmit" type="submit" value="ثبت">
    <input name="btnreset" type="reset" value="بازنشانی">
</form>
</body>
</html>
</body>
</html>
