<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="navbar-header navbar-brand"><span style="cursor: pointer;" onclick="window.location = '{{ route('main') }}'">Искры костра</span></div>
        <div class="nav">
            <?php if (isset($_SESSION['user'])) { ?>
            <a href="/dream_diary/new/" class="nav-item nav-link" style="color: rgba(255, 255, 255, 0.9)">Новый сон</a>&nbsp;&nbsp;
            <a href="/chats/" class="nav-item nav-link" style="color: rgba(255, 255, 255, 0.9)">Чаты</a>&nbsp;&nbsp;
            <?php } ?>
        </div>
        <?php
        if (!isset($_SESSION['user'])){
        ?>
        <div class="form-inline">
            <input type="text" class="form-control" placeholder="Nickname" required id="sign_form_input_nick">&nbsp;
            <input type="password" class="form-control" placeholder="Password" required id="sign_form_input_password">&nbsp;&nbsp;&nbsp;
            <input type="button" value="Войти" class="btn btn-dark" id="btn_sign_in">&nbsp;&nbsp;&nbsp;
            <!--<input type="button" value="Зарегистрироваться" class="btn btn-secondary" id="btn_sign_up">-->
        </div>
        <script type="text/javascript">
            $('#btn_sign_in').on('click', function(){
                if ($.trim($('#sign_form_input_nick').val()) == "" ||
                    $.trim($('#sign_form_input_password').val()) == ""){
                    alert("Вы заполнили не все поля");
                } else {
                    let form = document.createElement('form');
                    form.setAttribute('action', '{{ route('signin') }}');
                    form.setAttribute('method', 'post');
                    form.setAttribute('style', 'display: none;');
                    let input1 = document.createElement('input');
                    input1.setAttribute('type', 'text');
                    input1.setAttribute('name', 'nick');
                    input1.setAttribute('value', $.trim($('#sign_form_input_nick').val()));
                    form.append(input1);
                    let input2 = document.createElement('input');
                    input2.setAttribute('type', 'text');
                    input2.setAttribute('name', 'password');
                    input2.setAttribute('value', sha256($.trim($('#sign_form_input_password').val())));
                    form.append(input2);
                    document.body.append(form);
                    form.submit();
                }
            });
            /*$('#btn_sign_up').on('click', function(){
                if ($.trim($('#sign_form_input_nick').val()) == "" ||
                    $.trim($('#sign_form_input_password').val()) == ""){
                    alert("Вы заполнили не все поля");
                } else {
                    let form = document.createElement('form');
                    form.setAttribute('action', '{{ route('signup') }}');
                    form.setAttribute('method', 'post');
                    form.setAttribute('style', 'display: none;');
                    let input1 = document.createElement('input');
                    input1.setAttribute('type', 'text');
                    input1.setAttribute('name', 'nick');
                    input1.setAttribute('value', $.trim($('#sign_form_input_nick').val()));
                    form.append(input1);
                    let input2 = document.createElement('input');
                    input2.setAttribute('type', 'text');
                    input2.setAttribute('name', 'password');
                    input2.setAttribute('value', sha256($.trim($('#sign_form_input_password').val())));
                    form.append(input2);
                    document.body.append(form);
                    form.submit();
                }
            });*/
        </script>
        <?php
        } else {
            $nick = $_SESSION['user'];
        ?>
        <div class="nav-item">
            Здравствуйте,
            <a href="{{ route('profile') }}" alt="Перейти в профиль" style="color: rgba(255, 255, 255, 0.9)">
                {{ $nick }}&nbsp;&nbsp;
                <?php if (file_exists($_SERVER['DOCUMENT_ROOT'].'/images/users/'.$nick.'.png')){ ?>
                <img src="/images/users/{{ $nick }}.png" style="max-height: 2rem; max-width: 2rem;"></a>!
                <?php } else { ?>
                <img src="/images/users/user-default.png" style="max-height: 2rem; max-width: 2rem;"></a>!
                <?php } ?>
            <button class="btn btn-secondary" onclick="window.location.href = '{{ route('signout') }}'">Выйти</button></div>
        <?php
        }
        ?>
    </div>
</nav>
