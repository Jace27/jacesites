<nav class="navbar navbar-dark bg-primary">
	<div class="container-fluid">
		<div class="navbar-header navbar-brand"><span style="cursor: pointer;" onclick="window.location = '/'">Искры костра</span></div>
		<div class="nav">
			<?php if (false && isset($_SESSION['nick'])) { ?>
			<a href="/dream_diary/new/" class="nav-item nav-link" style="color: rgba(255, 255, 255, 0.9)">Новый сон</a>&nbsp;&nbsp;
			<a href="/chats/" class="nav-item nav-link" style="color: rgba(255, 255, 255, 0.9)">Чаты</a>&nbsp;&nbsp;
			<?php } ?>
		</div>
		<?php
		if (!isset($_SESSION['session'])){
		?>
		<form action="#" method="post" class="form-inline" style="margin-block-end: 0" id="sign_form">
			<div class="form-group">
				<input type="text" name="nick" class="form-control" placeholder="Nickname" required id="sign_form_input_nick">&nbsp;
				<input type="password" name="password" class="form-control" placeholder="Password" required id="sign_form_input_password">&nbsp;&nbsp;&nbsp;
				<input type="password" name="pass" style="display: none" id="sign_form_input_pass">
				<input type="button" value="Войти" class="btn btn-dark" id="btn_sign_in">&nbsp;&nbsp;&nbsp;
				<?php //echo '<input type="button" value="Зарегистрироваться" class="btn btn-secondary" id="btn_sign_up">'; 
?>
			</div>
		</form>
		<script type="text/javascript">
			$('#btn_sign_in').on('click', function(){
				$('#sign_form').attr('action', '/_actions/users/sign_in.php');
				if ($.trim($('#sign_form_input_nick').val()) != ""){
					console.log(sha256($.trim($('#sign_form_input_password').val())));
					$('#sign_form_input_pass').val(sha256($.trim($('#sign_form_input_password').val())));
					localStorage.setItem('encryption_key', sha256($.trim($('#sign_form_input_password').val())));
					$('#sign_form').submit();
				}
				else
					alert('Вы заполнили не все поля');
			});
			<?php //echo "$('#btn_sign_up').on('click', function(){";
				//echo "$('#sign_form').attr('action', '/_actions/users/sign_up.php');";
				//echo "if ($.trim($('#sign_form_input_nick').val()) != ""){";
					//echo "$('#sign_form_input_pass').val(sha256($.trim($('#sign_form_input_password').val())));";
                    //echo "localStorage.setItem('encryption_key', sha256($.trim($('#sign_form_input_password').val())));";
					//echo "$('#sign_form').submit();";
				//echo "}";
				//echo "else";
					//echo "alert('Вы заполнили не все поля');";
			//echo "});";
?>
			$('#sign_form').on('submit', function(e){
				if ($('#sign_form').attr('action') == '#'){
					e.preventDefault();
				}
			});
		</script>
		<?php
		} else {
		?>
		<div class="nav-item">
			Здравствуйте,
			<a href="/profile/" alt="Перейти в профиль" style="color: rgba(255, 255, 255, 0.9)"><?php echo $_SESSION['nick']; ?>&nbsp;&nbsp;
			<img src="/_images/avatars/<?php
				if (file_exists($_SERVER['DOCUMENT_ROOT'].'/_images/avatars/'.$_SESSION['nick']))
					echo $_SESSION['nick']."?rnd=".time();
				else
					echo 'default?rnd='.time(); ?>" style="max-height: 2rem; max-width: 2rem;"></a>!
			<button class="btn btn-secondary" onclick="window.location.href = '/_actions/users/exit.php'">Выйти</button></div>
		<?php
		}
		?>
	</div>
</nav>
