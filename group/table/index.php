<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
	<title>Группа</title>
	<style>
		table {
			border: gray 2px solid;
			border-spacing: 0px;
			margin: 0 2em;
		}
		td, th {
			padding: 3px;
		}
		.container {
			min-width: 80%;
		}
		#back_button {
			top: 64px;
		}
	</style>
</head>
<body link="#009" alink="#009" vlink="#009">
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/back_button.php'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); ?>
	<div class="container">
		<p>&nbsp;</p>
		<table border="1">
			<tbody>
				<tr>
					<th>Имя, Фамилия</th>
					<th>Ник</th>
					<th>Часовой пояс (по МСК)</th>
					<th>Город</th>
					<th>Дата рождения</th>
					<th>Зодиак</th>
					<th>Цвет ауры</th>
					<th>Способности</th>
					<th>Роль в группе</th>
				</tr>
				<tr>
					<td>Данила Шилов</td>
					<td>Денни, Джейс</td>
					<td>+2</td>
					<td>Челябинск</td>
					<td>02.2001</td>
					<td>Рыба</td>
					<td>Голубой</td>
					<td>Библиотекарь, сталкер, воин, защитник традиции</td>
					<td>Основатель, координатор</td>
				</tr>
				<tr>
					<td>Эвелина Титова</td>
					<td>Эви, Эльфи</td>
					<td>0</td>
					<td>Краснодар</td>
					<td>29.12.2000</td>
					<td>Козерог</td>
					<td>Бирюзовый</td>
					<td>Сновидящая, ритуалист</td>
					<td>Администратор</td>
				</tr>
				<tr>
					<td></td>
					<td>Макс</td>
					<td>0</td>
					<td>Москва</td>
					<td></td>
					<td>Телец</td>
					<td>Синий</td>
					<td></td>
					<td>Модератор, рекрутер</td>
				</tr>
				<tr>
					<td>Кирилл Карпицкий</td>
					<td>Кир Реддрим</td>
					<td>0</td>
					<td>Королёв</td>
					<td>11.05.2005</td>
					<td>Телец</td>
					<td>Фиолетовый</td>
					<td>Сновидящий, энергет</td>
					<td></td>
				</tr>
				<tr>
					<td>Дарина Тулегенова</td>
					<td>Дори</td>
					<td>+3</td>
					<td>Павлодар</td>
					<td>28.08.2002</td>
					<td>Дева</td>
					<td>Золотой</td>
					<td>Сновидящая, воин, энергет</td>
					<td>Основатель</td>
				</tr>
				<!--
				<tr>
					<td>Александр Седов</td>
					<td></td>
					<td>+1</td>
					<td>Саратов</td>
					<td>25.01.1988</td>
					<td>Водолей</td>
					<td></td>
					<td>Курьер, сталкер</td>
					<td></td>
				</tr>
				<tr>
					<td>Денис Абдураманов</td>
					<td></td>
					<td>+2</td>
					<td>Ташкент</td>
					<td>30.01.1993</td>
					<td>Водолей</td>
					<td>Голубого Шепота</td>
					<td>Пророк, шаман, энергет</td>
					<td></td>
				</tr>
				<tr>
					<td>Дмитрий Седых</td>
					<td></td>
					<td>0</td>
					<td>Курск</td>
					<td></td>
					<td></td>
					<td></td>
					<td>Сновидения, астрал</td>
					<td></td>
				</tr>
				<tr>
					<td>Элла Сальникова</td>
					<td>Элен</td>
					<td>0</td>
					<td>Краснодар</td>
					<td></td>
					<td></td>
					<td>Синий</td>
					<td>Астрал</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>Владислав Ларус</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>Демонология, псионик</td>
				</tr>
				<tr>
					<td>Эвелина Катамадзе</td>
					<td></td>
					<td>0</td>
					<td>Москва</td>
					<td>03.11</td>
					<td>Скорпион</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Игорь Калинин</td>
					<td></td>
					<td>0</td>
					<td>Санкт-Петербург</td>
					<td></td>
					<td></td>
					<td>Синий / зеленый</td>
					<td>Руны, воин, медитации</td>
					<td>Модератор</td>
				</tr>-->
				<tr>
					<td colspan="9">В отпуске:</td>
				</tr>
				<tr>
					<td>Дмитрий Копейкин</td>
					<td>Смит Сайтер / Ева Кузнецова</td>
					<td>0</td>
					<td></td>
					<td>19.06.1998</td>
					<td>Близнец</td>
					<td>Серый</td>
					<td>Сталкер, воин, организатор, защитник традиции</td>
					<td></td>
				</tr>
			</tbody>
		</table><br><br>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
</body>
</html>