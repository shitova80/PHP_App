<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$host = 'localhost:8080'; // адрес сервера 
$database = 'shop'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
$con = mysqli_connect($host, $user, $password) 
    or die("Ошибка " . mysqli_error($con)); 
$select=my_select_db($database,$con);
$query ="SELECT SectionName FROM Section";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{    
    echo "<ul>";
    while ($row = mysql_fetch_row($result)) {
        echo "<li>$row[0]</li>";
    }
    echo "</ul>"; 	
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
</body>
</html>