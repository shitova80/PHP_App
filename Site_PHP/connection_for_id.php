<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$host = 'localhost'; // адрес сервера 
$database = 'shop'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
$con = mysql_connect($host, $user, $password) 
    or die("Ошибка " . mysql_error($con)); 
$select=mysql_select_db($database,$con);
$query_1="SELECT ItemName FROM Item Where SectionId=1";
$result_1 = mysql_query($query_1) or die("Ошибка " . mysql_error($select)); 
if($result_1)
{    
    echo "<ul>";
    while ($row = mysql_fetch_row($result_1)) {
        echo "<li>$row[0]</a></li>";
    }
    echo "</ul>"; 	
    mysql_free_result($result_1);
} 
mysql_close($con);
?>
</body>
</html>