<!DOCTYPE html>
<html>
<head>
<title>Первый сайт на PHP</title>
<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	<input  type="text" name='Name' value="name"></input>
	<input  type="text" name='Password' value="password"></input>
	<input  type="text" name='Email' value="Email"></input>
	<input  type="text" name='Phone' value="Phone"></input>
	<input type="submit" value="отправить"> </input>
</form>
<?php
$host = 'localhost'; // адрес сервера 
$database = 'shop'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
$con = mysql_connect($host, $user, $password) 
    or die("Ошибка " . mysql_error($con)); 
$select=mysql_select_db($database,$con);
$query1 ="INSERT INTO User VALUES ( '{$_POST['Name']}','{$_POST['Password']}', '{$_POST['Email']}','{$_POST['Phone']}')";
$query2="SELECT * FROM user ";
if(isset($_POST['myname'])&&isset($_POST['mypassword'])&&isset($_POST['myemail'])&&isset($_POST['myphone'])&&($_SERVER['REQUEST_METHOD']=="POST"))
{
$result1 = mysql_query($query1) or die("Ошибка " . mysql_error($select)); 
}
$result2 = mysql_query($query2) or die("Ошибка " . mysql_error($select)); 
if($result2)
{   
    echo "<ul>";
	//$row2= mysql_fetch_assoc($result2);
	//print_r($row1);
	//print_r($row2);
    while ($row1 = mysql_fetch_assoc($result2)) {
	        echo "<li>{$row1['Id']}</li>";
			echo "<li>{$row1['Username']}</li>";
            echo "<li>{$row1['Password']}</li>";
            echo "<li>{$row1['Email']}</li>";
            echo "<li>{$row1['Phone']}</li>";				
	}
    echo "</ul>"; 	
} 

mysql_close($con);
?>
</body>
</html>