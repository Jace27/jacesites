<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/_includes/preload.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Рандомайзер</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/_includes/head.php'); ?>
	<style type="text/css">
		#variants {
			width: 90%;
			min-height: 200px;
		}
		button {
			width: 90%;
		}
		input[type="number"]{
			display: inline-block;
		}
	</style>
</head>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/_includes/header.php'); ?>
	<div class="container">
		<p>&nbsp;</p>
		<p>Введите варианты ответов, новая строка - новый вариант. Пустая строка тоже считается за вариант.</p>
		<textarea id="variants"></textarea>
		<button class="btn btn-primary" id="btn1">Выбрать случайный вариант!</button>
		<p id="res1"></p>
		<hr>
		<p>Или можно сгенерировать случайное число в диапазоне:</p>
		<p>От&nbsp;<input type="number" value="0" id="min">&nbsp;до&nbsp;<input type="number" value="0" id="max"></p>
		<button class="btn btn-primary" id="btn2">Выбрать случайный вариант!</button>
		<p id="res2"></p>

		<script type="text/javascript" src="/_scripts/jquery-3.4.1.js"></script>
		<script type="text/javascript">
			$('#btn1').click(function(e){
				let vars = [];
				let text = $('#variants').val();
				vars = text.split('\n');
				let i = get_random(0, vars.length - 1);
				$('#res1').html('Результат: ' + vars[i]);
			});
			$('#btn2').click(function(e){
				let min = +($('#min').val());
				let max = +($('#max').val());
				let res = get_random(min, max);
				$('#res2').html('Результат: ' + res);
			});
			function get_random(min, max){
				return min + Math.floor(Math.random() * (+max - +min));
			}
		</script>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/_includes/message.php') ?>
</body>
</html>