<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php
session_start();
if ((!isset($_SESSION['nick']) || !isset($_SESSION['session'])) && !isset($_GET['user'])) {
	$_SESSION['message'] = 'Пустой запрос';
	header('location: /');
}
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/sessions.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/users.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
	<title>Профиль: <?php echo $_SESSION['nick']; ?></title>
	<meta http-equiv="Cache-Control" content="no-cache">
</head>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); ?>
	<div class="container">
<?php
$user = [];

if (!isset($_GET['user'])){
	$user = get_user_data($_SESSION["nick"]);
	if ($user == null){
		echo 'Пользователя не существует';
		die;
	}
?>
		<form action="/_actions/users/edit.php" method="post" id="profile_data_form" enctype="multipart/form-data">
			<label><br><img style="max-width:200px;max-height:200px;" src="/_images/avatars/<?php if (file_exists($_SERVER['DOCUMENT_ROOT'].'/_images/avatars/'.$user['nick'])) echo $user['nick']."?rnd=".time(); else echo 'default?rnd='.time(); ?>"><br><br>
			<input type="button" value="Изменить аватар" class="btn btn-secondary form-control" id="btn_change_avatar">
			<input type="file" name="ava" id="profile_data_input_ava" class="form-control" style="display:none;" accept="image/png, image/jpg, image/jpeg"></label><br>
			<label>Никнейм:&nbsp;&nbsp;<input class="form-control" id="profile_data_input_nick" type="text" name="nick" value="<?php echo $user['nick']; ?>" maxlength="32"></label>
			<label>Имя:&nbsp;&nbsp;<input class="form-control" id="profile_data_input_name" type="text" name="name" value="<?php echo $user['name']; ?>" maxlength="64"></label><br>
			<label>Фамилия:&nbsp;&nbsp;<input class="form-control" id="profile_data_input_surname" type="text" name="surname" value="<?php echo $user['surname']; ?>" maxlength="64"></label>
			<label>Отчество:&nbsp;&nbsp;<input class="form-control" id="profile_data_input_patronymic" type="text" name="patronymic" value="<?php echo $user['patronymic']; ?>" maxlength="64"></label><br>
			<label>Город:&nbsp;&nbsp;<input class="form-control" id="profile_data_input_city" type="text" name="city" value="<?php echo $user['city']; ?>" maxlength="64"></label>
			<label>Часовой пояс (к Москве):&nbsp;&nbsp;<input class="form-control" id="profile_data_input_hour" type="text" name="hour" value="<?php echo $user['hour']; ?>" maxlength="3"></label><br>
			<label>Дата рождения:&nbsp;&nbsp;<input class="form-control" id="profile_data_input_birth" type="text" name="birth" value="<?php echo $user['birth']; ?>" maxlength="10"></label>
			<label>Новый пароль:&nbsp;&nbsp;<input class="form-control" id="profile_data_input_new_password" type="password" name="new_password"><input class="form-control" id="profile_data_input_new_pass" type="password" name="new_pass" style="display: none;"></label>
			<hr>
			<label><b>Для подтверждения изменений введите пароль:</b></label><br>
			<label>Пароль:&nbsp;&nbsp;<input class="form-control" id="profile_data_input_password" type="password" name="password"><input class="form-control" id="profile_data_input_pass" type="password" name="pass" style="display: none;"></label>
			<label>Повтор пароля:&nbsp;&nbsp;<input class="form-control" id="profile_data_input_pass_repeat" type="password" name="pass_repeat"></label><br>
			<input type="button" class="btn btn-primary" value="Отправить изменения" id="profile_data_form_submit">
		</form>
		<script type="text/javascript">
			$('#btn_change_avatar').click(function(){
				$('#profile_data_input_ava').click();
			});
			$('#profile_data_input_ava').change(function(){
				if (this.files.length > 0){
					$('#btn_change_avatar').val('Файл выбран');
				}
			});
			$('#profile_data_input_nick').on('change', function(){
				if ($.trim($('#profile_data_input_nick').val()) != "<?php echo $_SESSION['nick']; ?>"){
					$.ajax({
						url: "/_actions/users/check_nick.php?nick="+$.trim($('#profile_data_input_nick').val()),
						cache: false,
						data: null,
						dataType: "text",
						method: "get",
						success: function(data, status, jqXHR){
							console.log(data);
							if ($.trim(data) == "busy")
								alert('Никнейм занят!');
						}
					});
				}
			});
			$('#profile_data_form_submit').on('click', function(){
				if ($.trim($('#profile_data_input_nick').val()) == ""){
					alert("Вы не ввели никнейм");
					return;
				} else
				if ($.trim($('#profile_data_input_password').val()) == ""){
					alert("Вы не ввели пароль");
					return;
				} else
				if ($.trim($('#profile_data_input_password').val()) != $.trim($('#profile_data_input_pass_repeat').val())){
					alert("Пароли не совпадают");
					return;
				} else {
					$('#profile_data_input_pass').val(sha256($.trim($('#profile_data_input_password').val())));
					if ($.trim($('#profile_data_input_new_password').val()) != "")
						$('#profile_data_input_new_pass').val(sha256($.trim($('#profile_data_input_new_password').val())));
					$('#profile_data_form').submit();
				}
			});
		</script>
<?php
} else {
	$user = get_user_data($_GET['user']);
	if ($user == null){
		echo 'Пользователя не существует';
		die;
	} else {
		?>
		<label><br><img style="max-width:200px;max-height:200px;" src="/_images/avatars/<?php if (file_exists($_SERVER['DOCUMENT_ROOT'].'/_images/avatars/'.$user['nick'])) echo $user['nick']."?rnd=".time(); else echo 'default?rnd='.time(); ?>"></label><br>
		<label>Никнейм:&nbsp;&nbsp;<b><?php echo $user['nick']; ?></b></label><br>
		<label>Имя:&nbsp;&nbsp;<b><?php echo $user['name']; ?></b></label><br>
		<label>Фамилия:&nbsp;&nbsp;<b><?php echo $user['surname']; ?></b></label><br>
		<label>Отчество:&nbsp;&nbsp;<b><?php echo $user['patronymic']; ?></b></label><br>
		<label>Город:&nbsp;&nbsp;<b><?php echo $user['city']; ?></b></label><br>
		<label>Часовой пояс (к Москве):&nbsp;&nbsp;<b><?php echo $user['hour']; ?></b></label><br>
		<label>Дата рождения:&nbsp;&nbsp;<b><?php echo $user['birth']; ?></b></label>
		<?php
	}
}
?>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
</body>
</html>