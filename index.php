<!--
ЗАДАЧА: Вывести три поста (автор и текст поста) из своей таблицы twitter.
ЧТО НУЖНО СДЕЛАТЬ:
1. Подключится к своей Базе данных.
2. Сделать запрос к таблице twitter.
3. Вывести три поста.

Внизу читай комментарии, где что выводить.

Если закончил, сделай добавление нового твита.

Если сделал, добавление нового твита, создай таблицу 'img', в которой хранятся:
	- аватар автора,
	- картинка поста.
	
Выведи на странице изображения из таблицы 'img'.
-->

<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">
	<!-- ШАПКА -->
	<div class="header border-bottom pb-2">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-xl-5">
					<div class="row">
						<div class="col-4">
							<img src="img/icons8-home-50.png" class="w-25">
							<a href="">Домой</a>
						</div>
						<div class="col-4 px-0">
							<img src="img/icons8-notification-50.png" class="w-25">
							<a href="">Уведомления</a>
						</div>
						<div class="col-4">
							<img src="img/icons8-new-post-50.png" class="w-25">
							<a href="">Сообщения</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-xl-3">
					<img class="w-25" src="img/icons8-twitter-50.png" >
				</div>
				<div class="col-sm-12 col-md-4 col-xl-4">
					<input type="" name="">
					<a href=""><img src="img/avatar.jpg" class="rounded-circle"></a>
					<button type="button" class="btn btn-primary">Твитнуть</button>					
				</div>
			</div>
		</div>
	</div>
	<!-- ДИВ С КОНТЕНТОМ -->						
	<div class="main mt-3">
		<div class="container">
			<div class="row">
				<!-- левая колонка --> <!-- ПРОФИЛЬ-->
				<div class="col-sm-12 col-md-4 col-xl-3">
					<!-- Описание профиля -->
					<div class=" bg-white">
						<!--фон-->
						<a href=""><img src="img/background.jpg" class="img-fluid"></a>
						<!--карточка-->
						<div class="row">
							<div class="col-4">
								<a href=""><img src="img/avatar.jpg" class="rounded-circle"></a>
							</div>
							<div class="col-8">
								<div>
									<a href="">Mary Smith</a>
								</div>
								<div>
									<a href="">@MarySmith</a>
								</div>
							</div>
						</div>
						<!--Статистика-->
						<div class="row pt-1 pb-1 pr-1 pl-1">
							<div class="col-6">
								<a href="">
									<b>Твиты</b><br>276
								</a>
							</div>

							<div class="col-6">
								<a href="">
									<b>Читаемые</b><br> 106
								</a>
							</div>										
						</div>	
					</div>

					<!-- Актуальные темы для вас-->
					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3" >
						<div class="">
							<h6>Актуальные темы для вас</h6>
						</div>

						<div>
							<a href="">#inktober</a>
						</div>
						<div>
							<a href="">#movies</a>
						</div>
						
					</div>
				</div>

				<!-- Средняя колонка: Лента твитов: добавить, твиты -->
				<div class="col-sm-12 col-md-8 col-xl-6" style="">
					<div class="pt-2 bg-white">
						<div class="row">
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle w-100">
							</div>
							<div class="col-10">
								<!-- 
									
									ЗДЕСЬ СОЗДАЕШЬ ФОРМУ С ИНПУТАМИ И КНОПКОЙ "Твитнуть"

								-->
								<form action="insert.php" method="GET">
									<input class="col-12 form-control" name="author">
									<input class="col-12 form-control" name="text">
									<button class="btn-primary btn">Твитнуть</button>
								</form>
							</div>
						</div>
						<!-- новый пост -->
						<div class="row mt-4">
							<div class="col-2">
								
							</div>
							<div class="col-xl-10">
									<h5><!--

										ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА НОВОГО ТВИТА
									-->
										<?php
											$connect = mysqli_connect("127.0.0.1", "root","", "twitter");
											$text_zaprosa = 'SELECT * FROM twits';
											$zapros = mysqli_query($connect, $text_zaprosa);

											$stroka1 = $zapros->fetch_assoc();
											$stroka2 = $zapros->fetch_assoc();
											$stroka3 = $zapros->fetch_assoc();
											$stroka4 = $zapros->fetch_assoc();
											$stroka5 = $zapros->fetch_assoc();
											$stroka6 = $zapros->fetch_assoc();
											$stroka7 = $zapros->fetch_assoc();
											$stroka8 = $zapros->fetch_assoc();
											$stroka9 = $zapros->fetch_assoc();
											$stroka10 = $zapros->fetch_assoc();

											echo $stroka10["author"];
										?>
									</h5>
									<p><!-- 

										ЗДЕСЬ ВЫВОДИШЬ ТЕКСТА НОВОГО ТВИТА

									-->
										<?php
											echo $stroka10["text"];
										?>
									</p>
									
							</div>
						</div>

					<!-- twit -->
						<div class="row">
							<div class="col-2">
								
							</div>
							<div class="col-xl-10">
									<h5>
										<?php
											echo $stroka9["author"];
										?>
									</h5>
									<p>
										<?php
											echo $stroka9["text"];
										?>
									</p>
									
							</div>
						</div>

					<!-- twit -->
						<div class="row">
							<div class="col-2">
								
							</div>
							<div class="col-xl-10">
									<h5>
										<?php
											echo $stroka8["author"];
										?>
									</h5>
									<p>
										<?php
											echo $stroka8["text"];
										?>
									</p>
									
							</div>
						</div>

					<!-- twit -->
						<div class="row">
							<div class="col-2">
								
							</div>
							<div class="col-xl-10">
									<h5>
										<?php
											echo $stroka7["author"];
										?>
									</h5>
									<p>
										<?php
											echo $stroka7["text"];
										?>
									</p>
									
							</div>
						</div>
							
					<!-- twit -->
						<div class="row mt-4">
							<div class="col-2">
								
							</div>
							<div class="col-xl-10">
									<h5>
										<?php
											echo $stroka6["author"];
										?>
									</h5>
									<p>
										<?php
											echo $stroka6["text"];
										?>
									</p>
									
							</div>
						</div>
						<!-- twit -->
						<div class="row mt-4">
							<div class="col-2">
								
							</div>
							<div class="col-xl-10">
									<h5>
										<?php
											echo $stroka5["author"];
										?>
									</h5>
									<p>
										<?php
											echo $stroka5["text"];
										?>
									</p>
									
							</div>
						</div>

						<!-- 

							НИЖЕ ТРИ ДИВА ДЛЯ ВЫВОДА ТВИТОВ ИЗ ТАБЛИЦЫ 'twitter'

						 -->
						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle w-100">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
									<!-- 
									ЗДЕСЬ: 
										1. ПОДКЛЮЧИСЬ К СВОЕЙ БАЗЕ ДАННЫХ
										2. СДЕЛАЙ ЗАПРОС К ТАБЛИЦЕ
									
									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ПЕРВОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->
										<?php
											echo $stroka1["author"];
										?>

									</h5>
								</div>
								<div>
									<p>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ПЕРВОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	
										<?php
											echo $stroka1["text"];
										?>
									</p>
									<!-- 

									место для картинки

									-->	
									<?php
										echo "<img class='col-12' src='".$stroka1["img"]."'>";
									?>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/4.jpg" class="rounded-circle w-100">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ВТОРОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->
										<?php
											echo $stroka2["author"];
										?>

									</h5>
								</div>
								<div>
									<p>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ВТОРОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	
										<?php
											echo $stroka2["text"];
										?>
									</p>
									<!-- 

									место для картинки

									-->	
										<?php
											echo "<img class='col-12' src='".$stroka2["img"]."'>";
										?>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/straykids.png" class="rounded-circle w-100">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ТРЕТЬЕГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->
										<?php
											echo $stroka3["author"];
										?>

									</h5>
								</div>
								<div>
									<p>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ТРЕТЬЕГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	
										<?php
											echo $stroka3["text"];
										?>
									</p>
									<!-- 

									место для картинки

									-->	
									
										<?php
											echo "<img class='col-12' src='".$stroka3["img"]."'>";
										?>
								</div>
							</div>
						</div>
				</div>
				<!-- правая колонка -->
				<div class="col-sm-12 col-md-4 col-xl-3">
					<!-- "Читаемые" -->
					<div class="bg-white pt-3 pb-3 pl-3 pr-3">
						<!-- форму создать здесь -->
						<form action="insert2.php" method="GET">
							<input type="" name="name">
							<input type="" name="address">
							<input type="" name="img">
							<button class="btn-primary btn">Добавить в читаемые</button>
						</form>
						<div class="col-4">
							<h6>Читаемые</h6>
						</div>

						<div class="row mb-3">
							<div class="col-4">
								<!-- аватарка, внутри ссылки картинка-->
								<?php
									$connect = mysqli_connect("127.0.0.1", "root","", "twitter");
									$text_zaprosa2 = 'SELECT * FROM channels';
									$zapros2 = mysqli_query($connect, $text_zaprosa2);

									$channel1 = $zapros2->fetch_assoc();
									$channel2 = $zapros2->fetch_assoc();
									$channel3 = $zapros2->fetch_assoc();
									$channel4 = $zapros2->fetch_assoc();
									$channel5 = $zapros2->fetch_assoc();
									$channel6 = $zapros2->fetch_assoc();
									$channel7 = $zapros2->fetch_assoc();
									echo "<a href=''><img class='w-100 rounded-circle' src='".$channel7["img"]."'></a>";
								?>
							</div>
							<div class="col-xl-8">
								<div>
									<!-- имя юзера -->
									<?php
										echo "<a href=''>".$channel7["name"]."</a>";
									?>
									<!--название аккаунта-->
									<?php
										echo "<span style='font-size: 12px;'>".$channel7["address"]."</span>";
									?>
								</div>
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-4">
								<!-- аватарка, внутри ссылки картинка-->
								<?php
									echo "<a href=''><img class='w-100 rounded-circle' src='".$channel6["img"]."'></a>";
								?>
							</div>
							<div class="col-xl-8">
								<div>
									<!-- имя юзера -->
									<?php
										echo "<a href=''>".$channel6["name"]."</a>";
									?>
									<!--название аккаунта-->
									<?php
										echo "<span style='font-size: 12px;'>".$channel6["address"]."</span>";
									?>
								</div>
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-4">
								<!-- аватарка, внутри ссылки картинка-->
								<?php
									echo "<a href=''><img class='w-100 rounded-circle' src='".$channel5["img"]."'></a>";
								?>
							</div>
							<div class="col-xl-8">
								<div>
									<!-- имя юзера -->
									<?php
										echo "<a href=''>".$channel5["name"]."</a>";
									?>
									<!--название аккаунта-->
									<?php
										echo "<span style='font-size: 12px;'>".$channel5["address"]."</span>";
									?>
								</div>
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-4">
								<!-- аватарка, внутри ссылки картинка-->
								<?php
									echo "<a href=''><img class='w-100 rounded-circle' src='".$channel4["img"]."'></a>";
								?>
							</div>
							<div class="col-xl-8">
								<div>
									<!-- имя юзера -->
									<?php
										echo "<a href=''>".$channel4["name"]."</a>";
									?>
									<!--название аккаунта-->
									<?php
										echo "<span style='font-size: 12px;'>".$channel4["address"]."</span>";
									?>
								</div>
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-4">
								<!-- аватарка, внутри ссылки картинка-->
								<?php
									echo "<a href=''><img class='w-100 rounded-circle' src='".$channel3["img"]."'></a>";
								?>
							</div>
							<div class="col-xl-8">
								<div>
									<!-- имя юзера -->
									<?php
										echo "<a href=''>".$channel3["name"]."</a>";
									?>
									<!--название аккаунта-->
									<?php
										echo "<span style='font-size: 12px;'>".$channel3["address"]."</span>";
									?>
								</div>
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-4">
								<!-- аватарка, внутри ссылки картинка-->
								<?php
									echo "<a href=''><img class='w-100 rounded-circle' src='".$channel2["img"]."'></a>";
								?>
							</div>
							<div class="col-xl-8">
								<div>
									<!-- имя юзера -->
									<?php
										echo "<a href=''>".$channel2["name"]."</a>";
									?>
									<!--название аккаунта-->
									<?php
										echo "<span style='font-size: 12px;'>".$channel2["address"]."</span>";
									?>
								</div>
							</div>
						</div>


						<div class="row mb-3">
							<div class="col-4">
								<!-- <a href=""><img class="w-100 rounded-circle" src="images/1.jpg"></a> --> <!-- аватарка, внутри ссылки картинка-->
								<?php
									echo "<a href=''><img class='w-100 rounded-circle' src='".$channel1["img"]."'></a>";
								?>
							</div>
							<div class="col-xl-8">
								<div>
									  <!-- имя юзера -->
										<?php
											echo "<a href=''>".$channel1["name"]."</a>";

											
										?>
									 <!--название аккаунта-->
									<?php
										echo "<span style='font-size: 12px;'>".$channel1["address"]."</span>";
									?>
								</div>
							</div>
						</div>

					</div>
					<!-- Ссылки © Twitter, 2018 -->
					
					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3">
						<div >
							© Twitter, 2018
							<a href="">О нас</a>
							<a href="">Справочный центр</a>
							<a href="">Условия</a>
							<a href="">Политика конфиденциальности</a>
							<a href="">Файлы cookie</a>
							<a href="">О рекламе</a>
							<a href="">Бренд</a>
							<a href="">Блог</a>
							<a href="">Состояние</a>
							<a href="">Приложения</a>
							<a href="">Вакансии</a>
							<a href="">Маркетинг</a>
							<a href="">Компаниям</a>
							<a href="">Разработчикам</a>
						</div>
						<div class="d-flex">
							<a href="">Рекламируйте вместе с Твиттером</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>