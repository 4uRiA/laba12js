<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Больница ГБУЗ "Нижний Ломов" - Контакты</title>
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
	<section class="contact-phone">
		<div class="container">
			<h1 class="contact-h1">Контактная информация</h1>
			<h2 class="contact-h2">Контактные телефоны</h2>
			<div class="contant-phone-sec">
				<hr />
				<div class="phone-block">
					<div class="phone-left">
						<p>Приемная главного врача</p>
					</div>
					<div class="phone-right">
						<p>8 (841-54) 4-12-44</p>
					</div>
				</div>
				<hr />
				<div class="phone-block">
					<div class="phone-left">
						<p>Вызов врача на дом</p>
					</div>
					<div class="phone-right">
						<p>8 (841-54) 4-41-71</p>
					</div>
				</div>
				<hr />
				<div class="phone-block">
					<div class="phone-left">
						<p>Регистратура</p>
					</div>
					<div class="phone-right">
						<p>8 (841-54) 4-41-71</p>
					</div>
				</div>
				<hr />
				<div class="phone-block">
					<div class="phone-left">
						<p>Регистратура поликлиники № 2</p>
					</div>
					<div class="phone-right">
						<p>8 (841-54) 4-69-14</p>
					</div>
				</div>
				<hr />
				<div class="phone-block">
					<div class="phone-left">
						<p>Регистратура детской поликлиники</p>
					</div>
					<div class="phone-right">
						<p>8 (841-54) 4-41-44</p>
					</div>
				</div>
				<hr />
			</div>
			<h3 class="form-h1">
				Остались какие-то вопросы? Оставьте заявку на звонок специалиста
			</h3>
			<form class="form-style-9" method="post" action="./help/contacts.php">
				<ul>
					<li>
						<input type="text" name="name" class="field-style field-split align-left" placeholder="Ваше имя" />
						<input type="text" name="female" class="field-style field-split align-right" placeholder="Ваша фамилия" />
					</li>
					<li>
						<input type="text" name="question" class="field-style field-full align-none" placeholder="Ваш вопрос" />
					</li>
					<li>
						<textarea resize="none" name="questinfo" class="field-style"
							placeholder="Опишите вопрос подробнее, чтобы мы смогли Вам помочь"></textarea>
					</li>
					<li>
						<input type="submit" value="Отправить обращение" />
					</li>
				</ul>
			</form>
		</div>
	</section>
</body>

</html>