<?php
//Проверям есть ли переменные на добавление
if(isset($_POST['mess']) && $_POST['mess']!="" && $_POST['mess']!=" ")
{
	//Стартуем сессию для записи логина пользователя
	session_start();
	//Принимаем переменную сообщения
	$mess=$_POST['mess'];
	//Переменная с логином пользователя
	$username=$_SESSION['session_username'];
	//Подключаемся к базе
	include("includes/connection.php");
	//Добавляем все в таблицу
	$res=mysqli_query($con, "INSERT INTO `messages` (`username`,`message`) VALUES ('$username','$mess') ");
}
?>