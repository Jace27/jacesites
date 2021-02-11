<?php
function format($str){
	return substr(json_encode($str), 1, strlen(json_encode($str)) - 2);
}
function onerror($errno, $errstr, $errfile, $errline){
	require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/database.php');
	$mysqli = connect_db();
	$errfile = str_replace('\\', '/', $errfile);
	$error = json_decode($errstr, true);
	if ($error == null) {
		$error = json_decode('{ "status": "error", "error": "unknown", "errno": "'.$errno.'", "description": "'.format($errstr).'" }', true);
	}
	switch($error['error']){
		case 'mysql connect error':
			require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/database.php');
			$mysqli2 = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
			if ($mysqli2->connect_errno) {
				?>
				<!DOCTYPE html>
				<html lang="ru">
				<head>
					<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
					<title>Ошибка</title>
				</head>
				<body>
					<nav class="navbar navbar-dark bg-primary">
						<div class="container-fluid">
							<div class="navbar-header navbar-brand"><span style="cursor: pointer;" onclick="window.location = '/'">Искры костра</span></div>
						</div>
					</nav>
					<div class="container">
						<h1>Извините, на сервере произошла фатальная ошибка подключения к базе данных. Функционирование сайта невозможно. Обратитесь к системному администратору.</h1>
						<p><b>ERRNO:</b> <?php echo $mysqli2->connect_errno; ?></p>
						<p><b>ERROR:</b> <?php echo $mysqli2->connect_error; ?></p>
					</div>
				</body>
				</html>
				<?php
			}
			mysqli_set_charset($mysqli2, "utf8");
			$mysqli2->close();
			break;
		case 'mysql query error':
			echo '<script> alert("Ошибка запроса mysql. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
			
		case 'get user data error':
			echo '<script> alert("Ошибка получения данных аккаунта пользователя. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'check nick error':
			echo '<script> alert("Ошибка при проверке существования никнейма. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'add new user error':
			echo '<script> alert("Ошибка при добавлении нового пользователя. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'change user data error':
			echo '<script> alert("Ошибка при изменении данных пользователя. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
			
		case 'get sessions data error':
			echo '<script> alert("Ошибка получения данных сессий. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'add session error':
			echo '<script> alert("Ошибка при добавлении новой сессии. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'change session error':
			echo '<script> alert("Ошибка при изменении данных сессии. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'destroy session error':
			echo '<script> alert("Ошибка при удалении сессии. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
			
		case 'add visit record error':
			echo '<script> alert("Ошибка при добавлении записи о посещении страницы. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
			
		case 'get option pages error':
			echo '<script> alert("Ошибка при получении страниц данных пользователя. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'get user options data error':
			echo '<script> alert("Ошибка при получении данных пользователя. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'get option id by text_id error':
			echo '<script> alert("Ошибка при получении идентификатора поля данных пользователя. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'check option record existence error':
			echo '<script> alert("Ошибка при проверке существования записи данных пользователя. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'set option record error':
			echo '<script> alert("Ошибка при установке записи данных пользователя. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
			
		case 'get title events error':
			echo '<script> alert("Ошибка при получении событий сайта. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'get site pages list error':
			echo '<script> alert("Ошибка при получении списка страниц сайта. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		
		case 'get dream tag types error':
			echo '<script> alert("Ошибка при получении типов тегов снов. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'get dream tags error':
			echo '<script> alert("Ошибка при получении тегов снов. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'check tag existence error':
			echo '<script> alert("Ошибка при проверке существования тега снов. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'add new dream tag error':
			echo '<script> alert("Ошибка при добавлении нового тега снов. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
			
		case 'create game session error':
			echo '<script> alert("Ошибка при создании игровой сессии. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'getting game session id error':
			echo '<script> alert("Ошибка при получении id игровой сессии. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'invalid game status error':
			echo '<script> alert("Попытка установки несуществующего статуса игры. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'change game status error':
			echo '<script> alert("Ошибка при попытке изменить статус игры. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		case 'get active games error':
			echo '<script> alert("Ошибка при получении списка активных игр. Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		/*
		case '':
			echo '<script> alert("Ошибка.Отправляю отчет об ошибке разработчику..."); </script>';
			break;
		 */
		default:
			echo '<script> alert("Неизвестная ошибка. Отправляю отчет об ошибке разработчику...';
			echo '\n';
			if($error != null) var_dump($error);
			echo '"); </script>';
			break;
	}
	if($error['status'] != 'core error'){
		$query = "INSERT INTO errorlog (time, type, errno, descr, file, line) VALUES ('".time()."','".$error['error']."','".$error['errno']."','".str_replace('\'', '\\\'', $error['description'])."', '".$errfile."', '".$errline."')";
		$handler = $mysqli->query($query);
		if (!$handler) {
			trigger_error('{ "status": "error", "error": "mysql query error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
		}
		$mysqli->close();
	}
	return true; //чтобы не запустился стандартный обработчик
}
function onshutdown(){
	if(error_get_last() != NULL){
		//ob_flush();
		ob_end_clean();
		$error = error_get_last();
		require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/database.php');
		$mysqli = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
		if ($mysqli && !$mysqli->connect_errno) {
			mysqli_set_charset($mysqli, "utf8");
			$query = "INSERT INTO errorlog (time, type, errno, descr, file, line) VALUES ('".time()."','FATAL','".$error['type']."','".$error['message']."', '".$error['file']."', '".$error['line']."')";
			$mysqli->query($query);
			$mysqli->close();
		}
		// == СТРАНИЦА ОШИБКИ ==
		?>
		<!DOCTYPE html>
		<html lang="ru">
		<head>
			<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
			<title>Ошибка</title>
		</head>
		<body>
			<nav class="navbar navbar-dark bg-primary">
				<div class="container-fluid">
					<div class="navbar-header navbar-brand"><span style="cursor: pointer;" onclick="window.location = '/'">Искры костра</span></div>
				</div>
			</nav>
			<div class="container">
				<h1>Извините, на сервере произошла фатальная ошибка. Отчет был отправлен разработчику. Повторите попытку позже.</h1>
				<?php echo $error['type'].', '.$error['message'].', '.$error['file'].', '.$error['line']; ?>
				<br><br>
				<h3><a href="/">Вернуться на главную</a></h3>
			</div>
		</body>
		</html>
		<?php
	} else {
		ob_flush();
		ob_end_clean();
	}
}
?>