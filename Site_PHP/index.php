<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">      
</head>
<body>
<?php
$count=0;
if(isset($_COOKIE['Log']))
{
$count=$_COOKIE['Log'];
$count++;
}
setcookie("Log",$count,time()+3600);
if($count>0) {
echo"$count";
}
?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/Site/elements/head.php'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/Site/elements/form_input.php'); ?>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/Site/elements/nav_menu.php');?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/Site/pages/default.php'); ?>	
    
</body>
</html>
