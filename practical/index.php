<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Сохранения переписок</title>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="/_styles/hider.css">
	</head>
	<body link="#009" alink="#009" vlink="#009">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); ?>
		<div class="container">
			<div class="section">
				<div class="header"><span>Сновиденные</span></div>
				<div class="items">
					<div class="section">
						<div class="header"><span>Уровень Первых Врат</span></div>
						<div class="items">
							<a href=""><span class="link"></span></a><br>
							<a href="Магмас ака Масяня - Голос эмиссара/"><span class="link">Магмас ака Масяня - Голос эмиссара</span></a><br>
							<a href="Vachaps Workshop.htm"><span class="link">Vachap - Искусство Внимания</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Осторожно! 14мб трафика!</strong></span><br>
						</div>
					</div>
					<div class="section">
						<div class="header"><span>Уровень Вторых Врат</span></div>
						<div class="items">
							<a href=""><span class="link"></span></a><br>
						</div>
					</div>
				</div>
			</div>
			<div class="section">
				<div class="header"><span>Сталкерские</span></div>
				<div class="items">
					<a href=""><span class="link"></span></a><br>
					<a href="DisPetcher - Сталкинг для начинающих/"><span class="link">DisPetcher - Сталкинг для начинающих</span></a><br>
					<a href="Lucy - Третье абстрактное ядро - сталкинг/"><span class="link">Lucy - Третье абстрактное ядро - сталкинг</span></a><br>
					<a href="Lucy - Матрешка - вторая тема по сталкингу/"><span class="link">Lucy - Матрешка (вторая тема по сталкингу)</span></a><br>
					<a href="Lucy - Перепросмотр в современной жизни/"><span class="link">Lucy - Перепросмотр в современной жизни</span></a><br>
					<a href="Lucy - Адекватность/"><span class="link">Lucy - Адекватность</span></a><br>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$('.header').on("click", function(event){
				elem = event.currentTarget.parentNode.lastElementChild;
				if(elem.style.display != "block"){
					elem.style.display = "block";
					event.currentTarget.style.backgroundImage = "url('/_styles/light_arrow_open.gif')";
				} else {
					elem.style.display = "none";
					event.currentTarget.style.backgroundImage = "url('/_styles/light_arrow_shut.gif')";
				}
				localStorage.setItem('menu', $('#menu').html());
			});
		</script>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
	</body>
</html>