<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Больница ГБУЗ "Нижний Ломов"</title>
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header-top">
				<a href="#" class="logo"><img src="./images/44.png" alt="" />ГБУЗ</a>
				<ul class="header-list">
					<li class="list-item"><a href="./index.php">Главная</a></li>
					<li class="list-item"><a href="#">Пациентам</a></li>
					<li class="list-item"><a href="#">Специалистам</a></li>
					<li class="list-item"><a href="./contacts.php">Контакты</a></li>
					<li class="list-item"><a href="./otziv.php">Отзывы</a></li>
				</ul>
				<a href="./autorize.php" class="auth">Личный кабинет</a>
			</div>
		</div>
		<hr />
	</header>
	<section class="main-section">
		<div class="container">
			<p class="time-text tt2">
				Добро пожаловать в Нижнеломовскую центральную районную больницу!
			</p>
			<div class="main">
				<a href="#" class="main-left-link">
					<div class="main-left">
						<img src="./images/55.png" alt="" />
						<div class="left-text">
							<p>Запись к врачу</p>
							<p>Вызов врача на дом</p>
							<p>Дневник самонаблюдения</p>
						</div>
					</div>
				</a>
				<a href="#" class="main-right-link">
					<div class="main-right">
						<p>Информация о новой коронавирусной инфекции COVID-19</p>
					</div>
				</a>
			</div>
		</div>
	</section>
	<section class="time">
		<div class="container">
			<p class="time-text">Важно!</p>
			<div class="time-block">
				<div class="time-block-left">
					<img src="./images/Вакцинация.png" alt="" class="time-img" />
				</div>
				<div class="time-block-right">
					<div class="right-text-1">
						<p>РАСПИСАНИЕ РАБОТЫ ПОЛИКЛИНИКИ:</p>
						<p>ПН-ПТ c 8:00 до 18:00 | СБ с 8:00 до 14:00 | ВС выходной</p>
					</div>
					<div class="right-text-2">
						<p>
							РЕГИСТРАТУРЫ: ПН-ПТ c 8:00 до 20:00 | СБ-ВС с 8:00 до 15:00,
						</p>
						<p>телефон: 8 (841-54) 4-41-71</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="form">
		<div class="container">
			<h1 class="form-h1">Обратиться в нашу больницу</h1>
		</div>
		<form class="form-style-9" method="post" action="./help/sendform.php">
			<ul>
				<li>
					<input type="text" name="name" class="field-style field-split align-left" placeholder="Ваше имя" />
					<input type="email" name="email" class="field-style field-split align-right" placeholder="Ваш Email" />
				</li>
				<li>
					<input type="text" name="phone" class="field-style field-split align-left" placeholder="Ваш номер телефона" />
					<input type="text" name="address" class="field-style field-split align-right"
						placeholder="Адрес проживания" />
				</li>
				<li>
					<input type="text" name="who" class="field-style field-full align-none"
						placeholder="Почему решили обратиться?" />
				</li>
				<li>
					<textarea resize="none" name="problem" class="field-style" placeholder="Опишите вашу проблему"></textarea>
				</li>
				<li>
					<input type="submit" value="Отправить обращение" />
				</li>
			</ul>
		</form>
	</section>
</body>

</html>