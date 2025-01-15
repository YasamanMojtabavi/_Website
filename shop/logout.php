<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
error_reporting(0);
session_start();
session_unset();
session_destroy();
?>
<script type="text/ecmascript">
location.replace("p1.php");
</script>
</body>
</html>