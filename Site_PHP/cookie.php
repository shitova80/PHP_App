<?php
$count=0;
if(isset($_COOKIE['Log']))
{
$count=$_COOKIE['Log'];
$count++;
}
setcookie("Log",$count,time()+3600);
if($count) {
echo"$count";
}
?>