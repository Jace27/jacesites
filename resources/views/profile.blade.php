@extends('layouts.page')

@section('title')
Профиль<?php if (isset($requested_user)) echo ' - '.$requested_user; ?> @endsection

@section('head')
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
@endsection

@section('content')
    <?php
    $user = "";
    if (isset($requested_user)){
        $user = $requested_user;
    } else if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    } else {
        echo '<h1>Пустой запрос</h1>';
    }

    $can_edit = false;
    if (isset($_SESSION['user']) && $_SESSION['user'] == $requested_user){
        $can_edit = true;
    }

    $user_data = \App\Models\js_users::where('nick', $user)->get();
    if (count($user_data) == 0 && $user != ""){
        echo '<h1>Пользователя не существует</h1>';
    } else {
        $user_data = $user_data[0];

        if ($user_data->has_right('Управление информацией о пользователе')){
            $can_edit = true;
        }

        $pages = \App\Models\js_options_pages::all();
        $options = $user_data->options();
        $h = ""; $b = "";
        $h = $h."<div class=\"tab_header\">";
        $b = $b."<div class=\"tabs_body\">";
        foreach ($pages as $key => $page){
            $h = $h.'<div class="tabs_header_page" id="header_'.$page->id.'" style="font-weight: ';
            if ($key == 0) $h = $h."900"; else $h = $h."500";
            $h = $h.'">'.$page->name.'</div>';
            $b = $b.'<div class="tab_page" id="page_'.$page->id.'"><table><tbody>';
            if ($can_edit) $b = $b.'<tr><th></th><th></th><th>Скрывать</th></tr>';
            if ($page->name == 'Личные данные'){
                $b = $b.'<tr>';
                $b = $b.'<td>Аватар</td>';
                if (file_exists($_SERVER['DOCUMENT_ROOT'].'/images/users/'.$user.'.png'))
                    $b = $b.'<td><img id="avatar_img" src="/images/users/'.$user.'.png"></td>';
                else
                    $b = $b.'<td><img id="avatar_img" src="/images/users/user-default.png"></td>';
                if ($can_edit) $b = $b.'<input name="avatar_filename" accept="image/jpeg,image/jpg,image/png" class="d-none" type="file">';
                $b = $b.'<td></td>';
                $b = $b.'</tr>';
            }
            var_dump($options);
        }
        $h = $h."</div>";
        $b = $b."</div>";
    }
    ?>
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
@endsection
