<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php
session_start();
if ((!isset($_SESSION['nick']) || !isset($_SESSION['session'])) && !isset($_GET['user'])) {
	$_SESSION['message'] = 'Пустой запрос';
	header('location: /');
}
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/sessions.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/users.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/options.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
	<title>Профиль: <?php echo $_SESSION['nick']; ?></title>
	<meta http-equiv="Cache-Control" content="no-cache">
	<style>
		.tabs {
			padding-top: 1em;
		}
		.tabs_body {
			border: 1px solid #007bff;
			padding: 0.3em;
			margin-top: -1px;
			margin-left: -1px;
		}
		.tabs_body img {
			max-width: 200px;
			max-height: 200px;
		}
		.tabs_header_page {
			padding: 0.5em 1em;
			display: inline-block;
			border: 1px solid #007bff;
			margin-top: -1px;
			margin-left: -1px;
			cursor: pointer;
		}
		@media (min-width: 530px) {
			.tab_page table {
				width: 100%;
			}

			th:nth-child(1), td:nth-child(1) {
				width: calc(50% - 50px);
			}

			th:nth-child(2), td:nth-child(2) {
				width: calc(50% - 50px);
			}

			th:nth-child(3), td:nth-child(3) {
				text-align: center;
				width: 100px;
			}
		}
		@media (max-width: 529px){
			th:nth-child(1), td:nth-child(1){
				display: block;
				float: none;
				width: 100%;
			}
			th:nth-child(2), td:nth-child(2){
				width: calc(100% - 39px);
				display: block;
				float: left;
			}
			th:nth-child(3), td:nth-child(3){
				width: 39px;
				display: block;
				float: right;
				text-align: center;
				overflow: hidden;
			}
		}
		.form-control {
			max-width: 100%;
		}
	</style>
</head>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); ?>
	<div class="container">
<?php
$user = [];

	$nick = ''; $can_edit = false;
	if (isset($_SESSION['nick'])) $nick = $_SESSION['nick'];
	if (isset($_GET['user'])) $nick = $_GET['user'];
	if (isset($_SESSION['nick']) && $_SESSION['nick'] == $nick) $can_edit = true;
	if ($nick == '') {
		echo 'Пустой запрос';
		die;
	}
	$user = get_user_data($nick);
	if ($user == null){
		echo 'Пользователя не существует';
		die;
	}
?>
		<form action="/_actions/users/edit.php" method="post" id="profile_data_form" enctype="multipart/form-data" name="user_data">
			<input type="text" class="d-none" name="nick" value="<?php echo $nick; ?>">
			<div class="tabs">
				<?php
				$pages = get_option_pages();
				$options = get_options($user['id']);
				$tabs_headers = '<div class="tab_header">';
				$tabs_pages = '<div class="tabs_body">';
				$i = 0;
				foreach ($pages as $page){
					if ($i == 0) $tabs_headers = $tabs_headers.'<div class="tabs_header_page" id="header_'.$page['id'].'" style="font-weight: 900">'.$page['title'].'</div>';
							else $tabs_headers = $tabs_headers.'<div class="tabs_header_page" id="header_'.$page['id'].'" style="font-weight: 500">'.$page['title'].'</div>';
					$tabs_pages = $tabs_pages.'<div class="tab_page" id="page_'.$page['id'].'"><table><tbody>';
					if ($can_edit) $tabs_pages = $tabs_pages.'<tr><th></th><th></th><th>Скрывать</th></tr>';
					if ($page['text_id'] == 'private'){
						$tabs_pages = $tabs_pages.'<tr>';
						$tabs_pages = $tabs_pages.'<td>Аватар</td>';
						if (file_exists($_SERVER['DOCUMENT_ROOT'].'/_images/avatars/'.$user['nick']))
							$tabs_pages = $tabs_pages.'<td><img id="avatar_img" src="/_images/avatars/'.$user['nick'].'"></td>';
						else
							$tabs_pages = $tabs_pages.'<td><img id="avatar_img" src="/_images/avatars/default"></td>';
						if ($can_edit) $tabs_pages = $tabs_pages.'<input name="avatar_filename" accept="image/jpeg,image/jpg,image/png" class="d-none" type="file">';
						$tabs_pages = $tabs_pages.'<td></td>';
						$tabs_pages = $tabs_pages.'</tr>';
					}
					foreach ($options as $option){
						if ($option['page'] == $page['id']) {
							$value = ''; $hidden = '';
							$checked = ''; if ($option['hidden'] == '1') $checked = ' checked';
							if ($can_edit && $option['type'] == 'custom') {
								$value = '<input name="'.$option['option'].'" class="form-control" '.$option['attrs'].' value="'.$option['value'].'">';
								$hidden = '<input name="'.$option['option'].'-hidden" type="checkbox"'.$checked.'>';
							} else {
								$value = $option['value'];
								
								if ($option['hidden'] == '1') {
									continue;
								}
							}
							if ($value == null || $value == '') $value = 'Не указано';
							$tabs_pages = $tabs_pages.'<tr>';
							$tabs_pages = $tabs_pages.'<td>'.$option['title'].'</td>';
							$tabs_pages = $tabs_pages.'<td>'.$value.'</td>';
							if ($can_edit || $option['type'] == 'custom') $tabs_pages = $tabs_pages.'<td>'.$hidden.'</td>';
							$tabs_pages = $tabs_pages.'</tr>';
						}
					}
					$tabs_pages = $tabs_pages.'</tbody></table></div>';
					$i++;
				}
				$tabs_pages = $tabs_pages.'</div>';
				$tabs_headers = $tabs_headers.'</div>';
				echo $tabs_headers;
				echo $tabs_pages;
				?>
			</div>
			<label for="new_pass_raw">
				Новый пароль:
				<input type="password" class="form-control" name="new_pass_raw">
			</label>
			<label for="new_pass_raw_repeat">
				Повтор пароля:
				<input type="password" class="form-control" name="new_pass_raw_repeat">
			</label>
			<input type="password" class="form-control d-none" name="new_pass">
			<input type="submit" class="form-control btn btn-primary" value="Сохранить изменения">
			<script>
				let pages = $('.tab_page');
				if (pages.length > 1){
					for (let i = 1; i < pages.length; i++) {
						$(pages[i]).css('display', 'none');
					}
				}
				
				$('.tabs_header_page').click(function(e){
					for (let i = 0; i < pages.length; i++){
						if (pages[i].id.substring(5, pages[i].id.length) == e.target.id.substring(7, e.target.id.length)){
							$(pages[i]).css('display', 'block');
						} else {
							$(pages[i]).css('display', 'none');
						}
					}
					let headers = $('.tabs_header_page');
					for (let i = 0; i < headers.length; i++){
						if (headers[i].id == e.target.id){
							headers[i].style.fontWeight = '900';
						} else {
							headers[i].style.fontWeight = '500';
						}
					}
				});
				
				<?php if ($can_edit) { ?>
				$('#avatar_img').click(function(e){
					$('input[type=file][name=avatar_filename]').click();
				});
				$('input[type=file][name=avatar_filename]').change(function(e){
					console.log(e);
				});
				<?php } ?>
				
				$('form[name=user_data]').submit(function(e){
					let npr = $('input[name=new_pass_raw]');
					let nprr = $('input[name=new_pass_raw_repeat]');
					let np = $('input[name=new_pass]');
					if (npr.val() == nprr.val()){
						np.val(sha256(npr.val()));
					}
					npr.remove();
					nprr.remove();
				});
			</script>
		</form>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
</body>
</html>