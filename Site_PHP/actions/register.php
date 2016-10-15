<?php
$host = 'localhost'; // адрес сервера 
$database = 'web_auth'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
$con = mysql_connect($host, $user, $password) 
    or die("Ошибка " . mysql_error($con)); 
$select=mysql_select_db($database,$con);
if(isset($_POST['myname']) && isset($_POST['mypassword']) && isset($_POST['myemail']) &&isset($_POST['myphone'])&& $_SERVER['REQUEST_METHOD']=="POST")
{
$query="INSERT INTO `user`(`Id`, `Username`, `Password`, `Email`, `Phone`) VALUES ('','{$_POST['myname']}','{$_POST['mypassword']}','{$_POST['myemail']}','{$_POST['myphone']}')";
 
$result = mysql_query($query,$con) or die("Ошибка " . mysql_error($select));
}
if(!$result)
{
echo'повторите регистрацию';
}
?>