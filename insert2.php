<?php
		$connect = mysqli_connect("127.0.0.1", "root","", "twitter");
		$text_zaprosa_vstavit = "INSERT INTO channels (name, img, address)
								VALUES ('{$_GET["name"]}', '{$_GET["img"]}', '{$_GET["address"]}')";
		$zapros_vvoda = mysqli_query($connect, $text_zaprosa_vstavit); #запрос для ввода в таблицу
		header('Location: index.php');
?>