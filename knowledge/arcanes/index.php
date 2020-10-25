<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
	<title>Арканы мира</title>
	<style type="text/css">
		table {
			font-size: 25px;
		}
		td, th {
			border: 1px gray solid;
			padding: 5px;
		}
		.cut {
			font-size: 35px;
			font-weight: 500;
		}
	</style>
</head>
<body>
	<div style="position: fixed; padding: 10px; right: 8px; top: 8px; background-color: rgba(255,255,255,0.4); border-radius: 5px;"><a href="../../">НАЗАД</a></div>
	<div class="container">
	<table>
		<tbody>
			<tr> <th>Срез</th>					<th>Имя</th>							<th>Описание</th> 																</tr>
			<tr> <td class="cut">ש (шин)</td>	<td>Шут, Дурак, Джокер</td>				<td>Ребёнок, игра</td> 															</tr>
			<tr> <td class="cut">א (алеф)</td>	<td>Маг</td>							<td>Творец, мастер, конструктор</td> 											</tr>
			<tr> <td class="cut">ב (бет)</td>	<td>Жрица</td>							<td>Понимание сути, сакральные истины</td> 										</tr>
			<tr> <td class="cut">ה (хей)</td>	<td>Жрец, Иерофант</td>					<td>Поиски сути, нематериальные устремления</td> 								</tr>
			<tr> <td class="cut">ג (гимель)</td>	<td>Императрица</td>					<td>Мать, природа, плодородие</td> 												</tr>
			<tr> <td class="cut">ד (далет)</td>	<td>Император</td>						<td>Отец, власть, реализация законов</td> 										</tr>
			<tr> <td class="cut">ח (хет)</td>	<td>Справедливость</td>					<td>Ум, осознание законов жизни</td> 											</tr>
			<tr> <td class="cut">ר (рейш)</td>	<td>Суд</td>							<td>Исцеление, спасение, благодарность</td> 									</tr>
			<tr> <td class="cut">ו (вав)</td>	<td>Влюбленные</td>						<td>Выбор пути, связи, каналы</td> 												</tr>
			<tr> <td class="cut">ז (заин)</td>	<td>Колесница</td>						<td>Прорыв, перемещение</td> 													</tr>
			<tr> <td class="cut">ט (тет)</td>	<td>Отшельник</td>						<td>Мудрость, философия, размышления</td> 										</tr>
			<tr> <td class="cut">י (йуд)</td>	<td>Колесо, Судьба, Удача (Фортуна)</td><td>Призвание, предназначение, судьба, циклы</td> 								</tr>
			<tr> <td class="cut">כ (каф)</td>	<td>Сила</td>							<td>Принятие (любовь), осознанность, энергия (питание)</td> 					</tr>
			<tr> <td class="cut">ל (ламед)</td>	<td>Повешенный</td>						<td>Испытание, иная истина, вторая сторона медали, побочные эффекты</td> 		</tr>
			<tr> <td class="cut">מ (мем)</td>	<td>Смерть</td>							<td>Освобождение, завершение, очищение, трансформация</td> 						</tr>
			<tr> <td class="cut">ע (аин)</td>	<td>Башня</td>							<td>Освобождение, перемены, гнев/юмор</td> 										</tr>
			<tr> <td class="cut">נ (нун)</td>	<td>Умеренность, Воздержание</td>		<td>Вызревание, развитие, покровительство свыше</td> 							</tr>
			<tr> <td class="cut">ס (самех)</td>	<td>Дьявол</td>							<td>Искушение, очарование, противник</td> 										</tr>
			<tr> <td class="cut">פ (пей)</td>	<td>Звезда</td>							<td>Надежды, мечты</td> 														</tr>
			<tr> <td class="cut">צ (цади)</td>	<td>Луна</td>							<td>Страхи, неуверенность, интуиция, ночь/начало рассвета</td> 					</tr>
			<tr> <td class="cut">ק (куф)</td>	<td>Солнце</td>							<td>Радость, спокойствие, не создавать себе проблем, успех, слава, рассвет</td> </tr>
			<tr> <td class="cut">ת (тав)</td>	<td>Мир</td>							<td>Рай, своё место в мире</td> 												</tr>
		</tbody>
	</table>
	<!--<table>
	    <tbody>
	        <tr> <th>Номинал</th>   <th>Значение</th> </tr>
	        <tr> <td>Туз</td>       <td>Рок, Сила, неотвратимость, непреодолимое воздействие</td> </tr>
	        <tr> <td>Король</td>    <td></td> </tr>
	        <tr> <td>Королева</td>  <td></td> </tr>
	        <tr> <td>Рыцарь</td>    <td></td> </tr>
	        <tr> <td>Паж</td>       <td></td> </tr>
	        <tr> <td>Х</td>         <td></td> </tr>
	        <tr> <td>9</td>         <td>Пресыщение, переполнение, пик определенных качеств и настроений</td> </tr>
	        <tr> <td>8</td>         <td>Необходимость труда, волевого толчка, вливания сил для продвижения вперед</td> </tr>
	        <tr> <td>7</td>         <td></td> </tr>
	        <tr> <td>6</td>         <td></td> </tr>
	        <tr> <td>5</td>         <td>Конкуренция, конфликты, потери (любые - финансовые, силовые, моральные), интриги</td> </tr>
	        <tr> <td>4</td>         <td>Бессилие, неспособность повлиять на ситуацию ввиду постоянных независящих от человека перемен</td> </tr>
	        <tr> <td>3</td>         <td>Изменения в окружающем мире, на которые нельзя повлиять, но которые повлияют на субъект</td> </tr>
	        <tr> <td>2</td>         <td>Завершение, получение результата</td> </tr>
	    </tbody>
	</table>-->
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
</body>
</html>