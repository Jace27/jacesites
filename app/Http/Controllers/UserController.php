<?php

namespace App\Http\Controllers;

use App\Models\js_roles;
use App\Models\js_user_roles;
use App\Models\js_users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function SignUp(Request $request){
        if (!isset($_SESSION)) session_start();
        $user = js_users::where('nick', $request->input('nick'))->get();
        if (count($user) == 0){
            $user = js_users::create([
                'nick' => $request->input('nick'),
                'password' => password_hash($request->input('password'), PASSWORD_BCRYPT)
            ]);
            js_user_roles::insert([
                [
                    'user_id' => $user->id,
                    'role_id' => js_roles::where('name', 'Пользователь')->get()[0]->id,
                ],
                [
                    'user_id' => $user->id,
                    'role_id' => js_roles::where('name', 'Новичок')->get()[0]->id,
                ],
            ]);
            $_SESSION['user'] = $user->nick;
        } else {
            $_SESSION['message'] = 'Пользователь существует';
        }
        return redirect(route('main'));
    }
    public function SignIn(Request $request){
        if (!isset($_SESSION)) session_start();
        $user = js_users::where('nick', $request->input('nick'))->get();
        if (count($user) > 0){
            if (password_verify($request->input('password'), $user[0]->password)){
                $_SESSION['user'] = $user[0]->nick;
            } else {
                $_SESSION['message'] = 'Неверный пароль';
            }
        } else {
            $_SESSION['message'] = 'Пользователя не существует';
        }
        return redirect(route('main'));
    }
    public function SignOut(){
        if (!isset($_SESSION)) session_start();
        unset($_SESSION['user']);
        return redirect(route('main'));
    }
}
