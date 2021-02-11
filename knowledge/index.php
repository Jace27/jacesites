<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
		<meta http-equiv="Cache-Control" content="no-cache">
		<title>База знаний группы</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="/_styles/hider.css">
	</head>
	<body onload="loadmenu()">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/back_button.php'); ?>
		<div class="openbm" onclick="openmenu();">&equiv;</div>
		<div class="p_menu p_close" id="menu">
			<div class="loadmenu" onclick="loadmenu();">&#8635;</div>
		</div>
		<div class="page" id="container">
			<h2>Здравствуйте!</h2>
		</div>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/foot.php'); ?>
		<script>
			var container = document.getElementById('container');
			var menu = document.getElementById('menu');

			function loadpage(name){
				container.innerHTML = "<h2>Загрузка...</h2>";
				menu.className = "p_menu p_close";
				var xhr = new XMLHttpRequest();
				xhr.open("get", "pages/"+name, true);
				xhr.send();
				xhr.onreadystatechange = function(){
					if(xhr.readyState != 4){ return; }
					if(xhr.status != 200){
						console.log(xhr);
						container.innerHTML = "<h1>Error! Status: "+xhr.status+"<br>"+xhr.statusText+"</h1>";
						document.title = name + " - База знаний";
					} else {
						container.innerHTML = xhr.responseText;
						document.title = $('#container').find('h1').text() + " - База знаний";
						resetMenuHandler();
					}
				};
			}

			var menu_need_reload = true;

			function loadmenu(){
				if (menu_need_reload){
					menu.innerHTML = "<h2>Загрузка...</h2>";
					//menu.className = "menu close";
					var xhr = new XMLHttpRequest();
					xhr.open("get", "menu.html", true);
					xhr.send();
					xhr.onreadystatechange = function(){
						if(xhr.readyState != 4){ return; }
						if(xhr.status != 200){
							console.log(xhr);
							menu.innerHTML = "<h1>Error! Status: "+xhr.status+"<br>"+xhr.statusText+"</h1>";
						} else {
							menu.innerHTML = xhr.responseText;
							$('#count_articles').html("<b>Всего статей: " + $('.link > a').length + "</b>");
							resetMenuHandler();
						}
					};
				}
			}

			function openmenu(){
				if(menu.className == "p_menu p_close"){
					menu.className = "p_menu p_open";
				} else {
					menu.className = "p_menu p_close";
				}
			}

			$(document).ready(function(){
				$('body').on("load", function(event){
					loadmenu();
				});
				$('.loadmenu').on("click", function(event){
					menu_need_reload = true;
					loadmenu();
				});
			});

			var search = "";
			if (window.location.search !== ""){
				search = window.location.search.substring(1).split('&').map(function(item){
					return item.split('=');
				});

				for (var i = 0; i < search.length; i++){
					if (search[i][0] == 'page'){
						loadpage(decodeURI(search[i][1]) + ".html");
						if (localStorage.getItem('menu') != null) {
							$('#menu')[0].innerHTML = localStorage.getItem('menu');
							menu_need_reload = false;
							resetMenuHandler();
						}
					}
				}
			}
			
			function resetMenuHandler(){
				$('.header').unbind('click');
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
			}
		</script>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
	</body>
</html>