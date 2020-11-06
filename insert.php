<?php
	$connect = mysqli_connect("127.0.0.1", "root","", "twitter");
	$text_zaprosa_vstavit = "INSERT INTO twits (author, img, text)
							VALUES ('{$_GET["author"]}', 'img/1.jpg', '{$_GET["text"]}')";
	$zapros_vvoda = mysqli_query($connect, $text_zaprosa_vstavit); #запрос для ввода в таблицу
	header('Location: index.php');
?>	