<?php
//Подключаемся к БД
include("includes/connection.php");
//Выбираем все сообщения
$res=mysqli_query($con, "SELECT * FROM `messages` ORDER BY `id` ");
//Выводим все сообщения на экран
while($d=mysqli_fetch_array($res))
{	
	echo "<b><font color='orange'>".$d['username'].":&nbsp;</font></b>"."<font color='red'>".$d['message']."</font></b>"."<br>";
}
?>