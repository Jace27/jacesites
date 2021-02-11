<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Искры Костра</title>
	<meta http-equiv="Cache-Control" content="no-cache">
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
</head>
<body link="#009" alink="#009" vlink="#009">
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); ?>
	<div class="container">
		<h3>Доступные Вам страницы:</h3>
		<?php
			include($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/site_pages.php');
			$events = get_site_pages();
			foreach ($events as $e){
				$link = $e['link'];
				$title = $e['title'];
				echo "<a href='$link'>$title</a><br>";
			}

			if (isset($_SESSION['nick']) && $_SESSION['nick'] == 'jace'){
			    echo '<a href="/encode_password/">Закодировать пароль</a>';
            }
		?>
		<hr>
		<h3>Последние события:</h3>
        <?php
            include($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/title_events.php');
            $events = get_title_events();
            foreach ($events as $e){
                $link = $e['link'];
				$page = $e['page'];
				$event = $e['event'];
				$description = $e['description'];
                echo "<p><b><a href='$link'>$page</a>: $event</b>&nbsp;$description</p>";
            }
        ?>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
</body>
</html>