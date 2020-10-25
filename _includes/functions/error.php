<?php
error_reporting(-1);
set_error_handler('onerror');
register_shutdown_function('onshutdown');
function onerror($errno, $errstr, $errfile, $errline){
	require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/database.php');
	$mysqli = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
	$mysqli->query ("SET NAMES 'utf8'");
	if ($mysqli->connect_error) {
		trigger_error('{ "status": "core error", "error": "mysql connect error", "errno": "'.$mysqli->connect_errno.'", "description": "'.format($mysqli->connect_error).'" }', E_USER_ERROR);
	}
	//обработка ошибки
	//echo $errstr;
	try {
		$error = json_decode($errstr, true);
	} catch (Throwable $ex) {
		$error = json_decode('{ "status": "error", "error": "unknown", "errno": "'.$errno.'", "description": "'.$errstr.'" }');
	}
	//var_dump($error);
	switch($error['error']){
		case 'mysql connect error':
			$mysqli = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
			$mysqli->query ("SET NAMES 'utf8'");
			if ($mysqli->connect_error) {
				//trigger_error('{ "status": "core error", "error": "mysql connect error", "errno": "'.$mysqli->connect_errno.'", "description": "'.format($mysqli->connect_error).'" }', E_USER_ERROR);
				?>
				<!DOCTYPE html>
				<html lang="ru">
				<head>
					<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
					<title>Ошибка</title>
				</head>
				<body>
					<div class="container">
						<h1>Извините, на сервере произошла фатальная ошибка подключения к базе данных. Функционирование сайта невозможно. Обратитесь к системному администратору.</h1>
					</div>
				</body>
				</html>
				<?php
			}
			break;
		case 'mysql query error':
			echo '<script> alert("Ошибка запроса mysql. Отправляю отчет об ошибке разработчикам..."); </script>';
			break;
		case 'get user data error':
			echo '<script> alert("Ошибка получения данных пользователя. Отправляю отчет об ошибке разработчикам..."); </script>';
			break;
		case 'check nick error':
			echo '<script> alert("Ошибка при проверке существования никнейма. Отправляю отчет об ошибке разработчикам..."); </script>';
			break;
		case 'add new user error':
			echo '<script> alert("Ошибка при добавлении нового пользователя. Отправляю отчет об ошибке разработчикам..."); </script>';
			break;
		case 'change user data error':
			echo '<script> alert("Ошибка при изменении данных пользователя. Отправляю отчет об ошибке разработчикам..."); </script>';
			break;
		case 'get sessions data error':
			echo '<script> alert("Ошибка получения данных сессий. Отправляю отчет об ошибке разработчикам..."); </script>';
			break;
		case 'add session error':
			echo '<script> alert("Ошибка при добавлении новой сессии. Отправляю отчет об ошибке разработчикам..."); </script>';
			break;
		case 'change session error':
			echo '<script> alert("Ошибка при изменении данных сессии. Отправляю отчет об ошибке разработчикам..."); </script>';
			break;
		case 'destroy session error':
			echo '<script> alert("Ошибка при удалении сессии. Отправляю отчет об ошибке разработчикам..."); </script>';
			break;
		case 'add visit record error':
			echo '<script> alert("Ошибка при добавлении записи о посещении страницы. Отправляю отчет об ошибке разработчикам..."); </script>';
			break;
		default:
			echo '<script> alert("Неизвестная ошибка. Отправляю отчет об ошибке разработчикам...';
			echo '\n';
			if($error != null) var_dump($error);
			echo '"); </script>';
			break;
	}
	if($error['status'] != 'core error'){
		$query = "INSERT INTO `errorlog` (`id`, `time`, `type`, `errno`, `descr`, `file`, `line`) VALUES (NULL,'".time()."','".format($error['error'])."','".$error['errno']."','".format($error['description'])."', '".format($errfile)."', '".$errline."')";
		$handler = $mysqli->query($query);
		if ($mysqli->connect_error) {
			trigger_error('{ "status": "error", "error": "mysql query error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
		}
	}
	//echo $query;
	return true; //чтобы не запустился стандартный обработчик
}
function onshutdown(){
	if(error_get_last() != NULL){
		ob_end_clean();
		$error = error_get_last();
		require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/database.php');
		$mysqli = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
		$mysqli->query ("SET NAMES 'utf8'");
		if ($mysqli->connect_error) {
			trigger_error('{ "status": "core error", "error": "mysql connect error", "errno": "'.$mysqli->connect_errno.'", "description": "'.format($mysqli->connect_error).'" }', E_USER_ERROR);
		}
		$query = "INSERT INTO `errorlog` (`id`, `time`, `type`, `errno`, `descr`, `file`, `line`) VALUES (NULL,'".time()."','FATAL','".$error['type']."','".format($error['message'])."', '".format($error['file'])."', '".$error['line']."')";
		$mysqli->query($query);
		$mysqli->close();
		// == СТРАНИЦА ОШИБКИ ==
		?>
		<!DOCTYPE html>
		<html lang="ru">
		<head>
			<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
			<title>Ошибка</title>
		</head>
		<body>
			<div class="container">
				<h1>Извините, на сервере произошла фатальная ошибка. Отчет был отправлен разработчику. Повторите попытку позже.</h1>
				<?php echo $error['type'].','.$error['message'].', '.$error['file'].', '.$error['line']; ?>
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

function format($string){
	$string = str_replace('&acute;','`',$string);
	$string = str_replace('&prime;',"'",$string);
	$string = str_replace('&Prime;','"',$string);
	$string = str_replace('\\','/',$string);
	$string = trim($string);
	return $string;
}

ob_start();
?>