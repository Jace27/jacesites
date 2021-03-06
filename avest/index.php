<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Авестийская нумерология</title>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
		<script src="resources/script.js"></script>
		<style type="text/css">
			body { padding-bottom: 30px; }
			.input {margin-top: 5px; float: none;}
			.planet {display: none; font-size: 20px}
			#surname {width: 200px}
			#name {width: 200px}
			#patronymic {width: 200px}
			#dayBirth {width: 42px}
			#monthBirth {width: 42px}
			#yearBirth {width: 100px}
			#result {font-size: 30px}
			.iscopied {
				opacity: 0;
				margin-left: 15px;
				display: inline-block;
				vertical-align: middle;
				margin-top: inherit;
			}
		</style>
	</head>
	<body link="#009" alink="#009" vlink="#009">
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); ?>
		<div class="container">
			<form autocomplete="on">
			<div class="input"><input type="text" id="surname" placeholder="" autofocus> - фамилия</div>
			<div class="input"><input type="text" id="name" placeholder=""> - имя</div>
			<div class="input"><input type="text" id="patronymic" placeholder=""> - отчество</div>
			<div class="input">
				<input type="text" id="dayBirth" placeholder="" pattern="[0-9]{2}">
				<input type="text" id="monthBirth" placeholder="" pattern="[0-9]{2}">
				<input type="text" id="yearBirth" placeholder="" pattern="[0-9]{4}"> - дата рождения в формате дд.мм.гггг</div>
			<div class="input"><input type="button" id="enter" value="Ввести данные" onclick="enterValue()" class="btn btn-primary"></div></form>
			<div id="result"></div>
			<div id="first" class="planet">Знаки в формуле означают планеты. Каждая планета по-своему влияет на человеческий характер. Чем больше количество определенной планеты в Вашей формуле, тем сильнее ее влияние на Вас.<br><b>Планеты, содержащиеся в Вашей формуле:</b></div>
			<div id="sun" class="planet"><b>Солнце &#9737;</b><br>Солнце является центром и скрепляющей все силой. Оно отвечает за внешнюю деятельность. Оно наделяет все энергией. Восходя, оно пробуждает нас и дает возможность действовать, проявляться в этом мире. Солнце ставит задачей что-то совершить, стать полезным кому-то или чему-то. Любой день должен быть прожит не напрасно. У каждого дня должен быть итог. Человеку с Солнцем в формуле суждено активно проявляться, что-то после себя оставлять, воздействовать на мир, нести ответственность, лидировать. Он будет на передовой. Он обладает энергией действовать и должен делиться ей с тем, кто слабее. Кому не пробить себе дорогу самому. Только помогая другим можно что-то получить себе.</div>
			<div id="moon" class="planet"><b>Луна &#9790;</b><br>Восход Луны завершает день. Она дает покой, отдых, охлаждение нашим мыслям, нашим чувствам, нашему телу. Задача Луны – это восстановление потраченных ресурсов. Луна разрешает потреблять, чтоб иметь возможность дальше жить. Она несет наслаждение покоем, сытостью, безопасностью, комфортом, обустроенностью. Наличие Луны свидетельствует о чуткости, ранимости, большой зависимости от комфорта и внешних условий. Вы нуждаетесь в понимании и заботе, но получите ее только если сами тоже будете мягки и терпеливы с окружающими. Вы станете нести своим присутствие комфорт, умиротворение, отзывчивость, станете продвигать принципы неравнодушия. Также Луна отвечает за мечтательность и воображение.</div>
			<div id="mars" class="planet"><b>Марс &#9794;</b><br>Марс в ответе за Вашу силу и выносливость. За уровень работоспособности. За энергичность. Как следствие он дает целеустремленность, напористость и стремление к результату. Через это отвечает за активность и способность к лидерству, либо же за ведомость. Он же отвечает за смелость и отвагу, склонность к риску. Имеет мужскую природу и гармоничней проявляется у мужчин. Женщинам может давать излишнюю самостоятельность и независимость.</div>
			<div id="mercury" class="planet"><b>Меркурий &#9791;</b><br>Меркурий отвечает за Ваш ум и этим все сказано. Во-первых это способность запоминать, дальше это скорость реакции мозга. Это так же умение вербально общаться, богатство и выразительность речи. Из этого вытекают возможности человека в аналитической работе. Поскольку анализ – это как раз возможность быстро сопоставить имеющиеся в памяти факты и облачить их в слова. Меркурий отвечает за логику, за обучаемость, за контактность.</div>
			<div id="jupiter" class="planet"><b>Юпитер &#9795;</b><br>Юпитер отражает религиозность и глубину человека. Если Меркурий дает возможность запомнить новую информацию, то Юпитер дает возможность человеку проникнуть в ее глубинную суть. Он отвечает за мудрость. Будучи мужской планетой дает активность в освоении знания.</div>
			<div id="venus" class="planet"><b>Венера &#9792;</b><br>Венера несет в себе принцип вкуса и такта. Она отвечает за способность получать наслаждение. И направлений в этом два. Первое – это наслаждение от материальных объектов. Оно выражается в наличии (или отсутствии) вкуса во всем, от одежды и интерьера, до гастрономических предпочтений. Второе направление – наслаждение от общения. Это и вкус к дружбе, и вкус к сотрудничеству, и вкус к любовным переживаниям. В высшей своей октаве Венера отвечает за способность сердца любить (или же за его черствость).</div>
			<div id="saturn" class="planet"><b>Сатурн &#9796;</b><br>Сатурн включает совесть. Если Юпитер дает теоретическое знание, то Сатурн отвечает за его реализацию на практике. Он создает условия для становления личности. А потому отражает нашу дисциплинированность, ответственность, сдержанность. А так же крепость и несгибаемость позиций личности. Женская природа Сатурна проявляется в полном подчинении внешним условиям, принятии их справедливости и уместности.</div>
			<div id="uranus" class="planet"><b>Уран &#9797;</b><br>Уран в формуле отвечает за способность мыслить нестандартно. За тягу (или страх) все поменять, разорвать прежние оковы и начать с чистого листа. Он дает способность найти принципиально новое решение, пойти нехоженой тропой. Он более остальных дает склонность к риску и непривязанность к нажитому комфорту.</div>
			<div id="neptun" class="planet"><b>Нептун &#9798;</b><br>Нептун дает тонкость чувствования этого мира. Это касается моментов, где нет логики и четких аргументов, но человек просто знает что-то и это для него очевидно. А доказать свое видение другим возможности нет. Это ситуации, когда мы, например чувствуем обман, или наоборот доверие, предчувствуем беду или возможность удачи. Нептун отвечает за интуицию и веру.</div>
		</div>
		<script type="text/javascript">
			var search = "";
			if (window.location.search !== ""){
				search = window.location.search.substring(1).split('&').map(function(item){
					return item.split('=');
				});

				var isnameexist = false;
				var issurnameexist = false;
				var isdayexist = false;
				var ismonthexist = false;
				var isyearexist = false;
				for(var i = 0; i < search.length; i++){
			  		if (search[i][0] == 'name'){
			  			document.getElementById('name').value = decodeURI(search[i][1]);
			  			isnameexist = true;
			  		}
			  		if (search[i][0] == 'surname'){
			  			document.getElementById('surname').value = decodeURI(search[i][1]);
			  			issurnameexist = true;
			  		}
			  		if (search[i][0] == 'patronymic'){
			  			document.getElementById('patronymic').value = decodeURI(search[i][1]);
			  		}
			  		if (search[i][0] == 'daybirth'){
			  			document.getElementById('dayBirth').value = decodeURI(search[i][1]);
			  			isdayexist = true;
			  		}
			  		if (search[i][0] == 'monthbirth'){
			  			document.getElementById('monthBirth').value = decodeURI(search[i][1]);
			  			ismonthexist = true;
			  		}
			  		if (search[i][0] == 'yearbirth'){
			  			document.getElementById('yearBirth').value = decodeURI(search[i][1]);
			  			isyearexist = true;
			  		}
				}
				if (isnameexist && issurnameexist && isdayexist && ismonthexist && isyearexist){
					enterValue();
				}
			}

			$(document).ready(function(){
				$('#link_for_copy').on('click', function(){
					document.getElementById('link_for_copy').select();
					document.execCommand('copy');
					$('#is-copied-label').animate({ opacity: "1" }, 100);
					$('#is-copied-label').animate({ opacity: "0" }, 3000);
				});
			});
		</script>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
	</body>
</html>