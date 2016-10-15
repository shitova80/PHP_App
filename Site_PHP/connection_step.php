<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
.listSection {
    font-size:20px;
    list-style:none;
	text-decoration: none;
    float: left; /* Обтекание справа */
    border-right: 1px double #333; /* Параметры рамки вокруг */
    width: 20%; /* Ширина колонки */
    height:580px;
    padding: 5px; /* Поля вокруг текста */
    margin: 10px 10px 20px 5px; /* Значения отступов */
}
#image {
border: 1px solid #333;
}

</style>
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
$query1 ="SELECT * FROM Section";
$result1 = mysql_query($query1) or die("Ошибка " . mysql_error($select)); 
global $_id;
if($result1)
{   
    echo '<ul div class="listSection">';
    while ($row1 = mysql_fetch_assoc($result1)) {
	        $_id=$row1['Id'];
	        echo "<li><a href='connection_step.php?id=$_id'>{$row1['SectionName']}</a></li>";			
	}
    echo '</div>'; 
	 echo '</ul>'; 
    mysql_free_result($result1);
} 
$_id = isset($_GET['id']) ? $_GET['id'] : '1' ;
$query2="SELECT * FROM Item Where SectionId=$_id";
$result2 = mysql_query($query2) or die("Ошибка " . mysql_error($select));
if($result2)
{   
    while ($row2 = mysql_fetch_assoc($result2)) {	      
	        //echo "<li>{$row2['ItemName']}</li>";			
			echo "<img src='{$row2['ImageFile']}'id='image'/> ";
		    }
	//echo'</ul>';
    mysql_free_result($result2);
} 
mysql_close($con);
@header("location:".$SERVER['PHP_SELF']);
?>
</body>
</html>


