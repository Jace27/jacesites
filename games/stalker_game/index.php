<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Сталкерская игра</title>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
	<style type="text/css">
		#active_games option {
			background-color: #a00;
		}
		option[status="created"] {
			background-color: #0a0 !important;
		}
	</style>
</head>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); ?>
	<div class="container">
		<?php
		define('GAME', 'stalker_game');
		require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/games.php');
		//create_game(GAME, 'test '.time());
		$active_games = get_active_games(GAME);
		?>
		<select multiple size="10" id="active_games">
			<?php
			for ($i = 0; $i < count($active_games); $i++){
				echo '<option status="'.$active_games[$i]['status'].'" gameId="'.$active_games[$i]['id'].'">'.$active_games[$i]['title'].'</option>';
			}
			?>
		</select>
		<button class="btn btn-primary" disabled id="btn-join">Присоединиться</button>
		<script type="text/javascript">
			$('#active_games').on('change', function(e){
				for (let i = 0; i < this.options.length; i++)
					if (i != this.options.selectedIndex)
						this.options[i].selected = false;
				if (this.options.selectedIndex != -1 && this.options[this.options.selectedIndex].getAttribute('status') == 'created'){
					$('#btn-join').removeAttr('disabled');
				} else {
					$('#btn-join').attr('disabled', '');
				}
			});
			$('#btn-join').click(function(e){
				document.cookie = 'game=stalker_game';
				document.cookie = 'id=' + $('#active_games')[0].options[$('#active_games')[0].options.selectedIndex].getAttribute('gameId');
				window.location = '/games/stalker_game/create_identity.php';
			});
		</script>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
</body>
</html>